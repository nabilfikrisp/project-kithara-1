<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\StatusLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function visitLogin()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd(Hash::make($credentials['password']));

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function visitProfile()
    {
        return view('profile');
    }

    public function visitMyOrder()
    {
        $orders = Order::where('user_id', auth()->user()->id)->groupBy('no_resi')->get();
        return view('myOrder', [
            'orders' => $orders,
        ]);
    }

    public function visitEditProfile()
    {
        $user = auth()->user();
        return view('editProfile',[
            'user' => $user
        ]);
    }

    public function handleEditProfile(Request $request)
    {
        $validatedData = $request->validate([
            'id' => '',
            'name' => 'required|max:255',
            'no_hp' => 'required|between:10,13|regex:/^08\d{8,10}$/',
            'negara' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required|digits:5',
        ], [
            'no_hp.required' => 'Mohon isi nomor hape',
            'no_hp.between' => 'Mohon gunakan nomor hp valid',
            'no_hp.regex' => 'Mohon gunakan nomor hp valid',
            'kode_pos.digits' => 'Mohon gunakan nomor hp valid',
        ]);
        $user = User::where('id', $validatedData['id'])->update($validatedData);
        return redirect('profile/edit')->with('success', 'Update data berhasil');
    }
}
