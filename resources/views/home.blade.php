@extends('layout')

@section('head')
<link rel="stylesheet" href="/css/generalStyle.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
<div class="container-sm d-flex flex-column justify-content-center align-items-center mb-5">
    <div class="row w-100 align-items-center justify-content-center">
        <div class="col-6 img-banner d-flex justify-content-center mt-5">
            <img src="/image/logo/logo.png" alt="Logo Kitharra">
        </div>
    </div>
    <div class="row d-flex action-section mt-4">
        <div class="col justify-content-center">
            <div class="mt-3 mb-3">
                <a href="{{ route('reparasi') }}">
                    <button class="btn btn-primary btn-kithara w-100" type="button">Reparasi Gitar</button>
                </a>
            </div>
            <!-- <div class="mt-3 mb-3">
                <a href="{{ route('login') }}">
                    <button class="btn btn-primary btn-kithara w-100" type="button">Login</button>
                </a>
            </div> -->
            <div class="mt-3 mb-3">
                <a href="{{ route('cekResi') }}">
                    <button class="btn btn-primary btn-kithara w-100" type="button">Cek Resi</button>
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-6 justify-content-center">
            <div class="mt-3 mb-3">
                <a href="">
                    <button class="btn btn-primary btn-kithara w-100" type="button">
                        <i class='bx bxl-tiktok me-2'></i>
                        Tiktok
                    </button>
                </a>
            </div>
            <div class="mt-3 mb-3">
                <a href="">
                    <button class="btn btn-primary btn-kithara w-100" type="button">
                        <i class='bx bx-store-alt me-2'></i>
                        BukaLapak
                    </button>
                </a>
            </div>
            <div class="mt-3 mb-3">
                <a href="">
                    <button class="btn btn-primary btn-kithara w-100" type="button">
                        <i class='bx bxl-youtube me-2'></i>
                        Youtube
                    </button>
                </a>
            </div>
        </div>
        <div class="col-6 justify-content-center">
            <div class="mt-3 mb-3">
                <a href="">
                    <button class="btn btn-primary btn-kithara w-100" type="button">
                        <i class='bx bx-store-alt me-2'></i>
                        Tokopedia
                    </button>
                </a>
            </div>
            <div class="mt-3 mb-3">
                <a href="">
                    <button class="btn btn-primary btn-kithara w-100" type="button">
                        <i class='bx bxl-instagram me-2'></i>
                        Instagram
                    </button>
                </a>
            </div>
            <div class="mt-3 mb-3">
                <a href="">
                    <button class="btn btn-primary btn-kithara w-100" type="button">
                        <i class='bx bx-store-alt me-2'></i>
                        Shopee
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection