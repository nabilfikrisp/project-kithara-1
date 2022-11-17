<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\StatusLog;
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
}
