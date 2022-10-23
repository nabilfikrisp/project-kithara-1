@extends('layout')

@section('head')
<link href="{{ asset('css/loginPageStyle.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="w-100 d-flex align-items-center">
    <div class="formContainer">
        <div class="text-center mb-2">
            <img src="/image/logo/logo.png" alt="Logo Kitharra" style="width:12rem">
        </div>
        <div class="text-center mb-4">
            <h1 style="color:white">Profile</h1>
        </div>
        <form>
            <div class="row d-flex justify-content-center">
                <div class="col justify-content-center">
                    <div class="my-2">
                        <label for="email" class="profile-label">Email</label>
                        <span class="inputLogo"></span><input type="email" class="form-control rounded-pill" name="email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="my-2">
                        <label for="email" class="profile-label">Name</label>
                        <span class="inputLogo"></span><input type="text" class="form-control rounded-pill" name="name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="my-2">
                        <label for="email" class="profile-label">No HP</label>
                        <span class="inputLogo"></span><input type="tel" class="form-control rounded-pill" name="no_hp" value="{{ Auth::user()->no_hp }}">
                    </div>
                    <div class="my-2">
                        <label for="email" class="profile-label">Alamat</label>
                        <span class="inputLogo"></span><input type="text" class="form-control rounded-pill" name="alamat" value=" {{ Auth::user()->alamat }}, {{ Auth::user()->kelurahan }}, {{ Auth::user()->kecamatan }}, {{ Auth::user()->kota }}, {{ Auth::user()->negara }}, {{ Auth::user()->kode_pos }}">
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-accent rounded-pill" type="button"><span class="login-text">Edit Profile</span></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection