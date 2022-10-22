<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function visitRegister()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // dd($request->negara);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'no_hp' => 'required|between:10,13|regex:/^08\d{8,10}$/',
            'negara' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required|digits:5',
            'password' => 'required|min:5|max:255'
        ], [
            'email.unique' => 'Email ini telah digunakan',
            'no_hp.required' => 'Mohon isi nomor hape',
            'no_hp.between' => 'Mohon gunakan nomor hp valid',
            'no_hp.regex' => 'Mohon gunakan nomor hp valid',
            'kode_pos.digits' => 'Mohon gunakan nomor hp valid',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);

        $user = User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil!');
    }
}
