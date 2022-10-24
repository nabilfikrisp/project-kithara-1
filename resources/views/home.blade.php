@extends('layout')

@section('head')
    <link rel="stylesheet" href="/css/generalStyle.css">
    <link rel="stylesheet" href="/css/homeStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endsection

@section('content')
<<<<<<< HEAD
    <div class="container-sm d-flex flex-column justify-content-center align-items-center">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show own-alert" style="width: 100%" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row w-100 align-items-center justify-content-center">
            <div class="col-6 img-banner d-flex justify-content-center mt-5">
                <img src="/image/logo/logo.png" alt="Logo Kitharra">
            </div>
        </div>
        <div class="row row-cols-2 col-10 mt-5">
            <div class="col">
                <a href="">
                    <div class="p-2 box mb-4 rounded-3">
                        <i class='bx bxl-tiktok me-2'></i>
                        Tiktok
                    </div>
                </a>

            </div>
            <div class="col">
                <a href="">
                    <div class="p-2 box mb-4 rounded-3">
                        <i class='bx bx-store-alt me-2'></i>
                        BukaLapak
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="">
                    <div class="p-2 box mb-4 rounded-3">
                        <i class='bx bxl-youtube me-2'></i>
                        Youtube
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="">
                    <div class="p-2 box mb-4 rounded-3">
                        <i class='bx bx-store-alt me-2'></i>
                        Tokopedia
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="">
                    <div class="p-2 box mb-4 rounded-3">
                        <i class='bx bxl-instagram me-2'></i>
                        Instagram
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="">
                    <div class="p-2 box mb-4 rounded-3">
                        <i class='bx bx-store-alt me-2'></i>
                        Shopee
                    </div>
                </a>
            </div>
        </div>

        <div class="row action-section mt-4">
            <div class="col-10">
                <a href="{{ route('reparasi') }}">
                    <div class="p-2 box mb-3 rounded-3">
                        Reparasi Gitar
                    </div>
                </a>
            </div>
            <div class="col-10">
                <a href="">
                    <div class="p-2 box mb-3 rounded-3">
                        Custom Gitar Akustik / Klasik
                    </div>
                </a>
            </div>
            <div class="col-10">
                <a href="">
                    <div class="p-2 box mb-3 rounded-3">
                        Semua Produk
                    </div>
=======
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
>>>>>>> 0540ecf5365450dccb4e06b2268579344babe5a4
                </a>
            </div>
        </div>
    </div>
@endsection
