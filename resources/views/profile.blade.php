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
                <h1 style="color:white">My Profile</h1>
            </div>
            <div class="text-center mt-4">
                <a href="/profile/my-order">
                    <button class="btn btn-accent rounded-pill" type="button"><span class="login-text">Order
                            Saya</span></button>
                </a>
            </div>
            <div class="text-center mt-4">
                <a href="/profile/edit">
                    <button class="btn btn-accent rounded-pill" type="button"><span class="login-text">Edit
                            Profile</span></button>
                </a>
            </div>
        </div>
    </div>
@endsection
