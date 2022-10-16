@extends('layout')

@section('head')
<title>Cek Resi</title>
<link rel="stylesheet" href="{{ asset('/css/loginPageStyle.css') }}">
@endsection

@section('content')

<body>
    <div class="vh-100 w-100 d-flex align-items-center" id="mainBgn">
        <div class="formContainer">
            <div class="text-center mb-2">
                <img src="/image/logo/logo.png" alt="Logo Kitharra" style="width:12rem">
            </div>
            <div class="text-center mb-4">
                <h1 style="color:white">Cek Resi</h1>
            </div>
            <form>
                <div class="row d-flex justify-content-center">
                    <div class="col-6 justify-content-center">
                        <div class="my-2">
                            <span class="inputLogo"><i class="fas fa-key"></i></span><input type="text" class="form-control rounded-pill" name="resi" placeholder="Insert Your Nomor Resi">
                        </div>
                        <button class="btn btn-accent rounded-pill w-100" type="submit"><span class="login-text">Cek Resi</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection