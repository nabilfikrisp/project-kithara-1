@extends('layout')

@section('head')
    <title>Cek Resi</title>
    <link rel="stylesheet" href="{{ asset('/css/loginPageStyle.css') }}">
@endsection

@section('content')

    <body>
        <div class="vh-100 w-100 d-flex align-items-center justify-content-center" id="mainBgn">
            @if (session()->has('error'))
                <div class="container col-4" style="position: fixed; top: 20vh;">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="formContainer">
                <div class="text-center mb-2">
                    <img src="/image/logo/logo.png" alt="Logo Kitharra" style="width:12rem">
                </div>
                <div class="text-center mb-4">
                    <h1 style="color:white">Cek Resi</h1>
                </div>
                <form action="/cek-resi" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-6 justify-content-center">
                            <div class="my-2">
                                <span class="inputLogo"><i class="fas fa-key"></i></span><input type="text"
                                    class="form-control rounded-pill" name="no_resi" placeholder="Insert Your Nomor Resi">
                            </div>
                            <button class="btn btn-accent rounded-pill w-100" type="submit"><span class="login-text">Cek
                                    Resi</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
