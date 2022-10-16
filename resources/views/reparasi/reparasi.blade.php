@extends('layout')

@section('head')
<title>Reparasi Gitar</title>
<link rel="stylesheet" href="{{ asset('/css/reparasiPageStyle.css') }}">
@endsection

@section('content')
<main class="mt-3 mb-3">
    <div class="row">
        <h2 class="reparasi-head-text">Reparasi Gitar</h2>
        <p class="reparasi-desc-text">Click on Guitar to see details</p>
    </div>
    <div class="container-fluid">
        <div class="row display-table">
            <div class="col-9 same-height" align="center">
                <a href="{{ route('reparasiHead') }}">
                    <img class="guitar-part-head" src="{{ asset('image/guitar/head.png') }}">
                </a>
            </div>
            <div class="col-3 same-height">
                <div class="row d-flex h-100">
                    <div class="col-1 d-flex same-height">
                        <div class="row align-items-start horizontal-line">
                        </div>
                    </div>
                    <div class="col d-flex same-height align-items-center">
                        <p class="guitar-part-text">Head</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center display-table">
            <div class="col-9 same-height" align="center">
                <a href="{{ route('reparasiNeck') }}">
                    <img class="guitar-part-neck" src="{{ asset('image/guitar/neck.png') }}">
                </a>
            </div>
            <div class="col-3 same-height" align="center">
                <div class="row d-flex h-100">
                    <div class="col-1 d-flex same-height">
                        <div class="row align-items-start horizontal-line">
                        </div>
                    </div>
                    <div class="col d-flex same-height align-items-center">
                        <p class="guitar-part-text">Neck</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center display-table">
            <div class="col-9 same-height" align="center">
                <a href="{{ route('reparasiBody') }}">
                    <img class="guitar-part-body" src="{{ asset('image/guitar/body.png') }}">
                </a>
            </div>
            <div class="col-3 same-height" align="center">
                <div class="row d-flex h-100">
                    <div class="col-1 d-flex same-height">
                        <div class="row align-items-start horizontal-line">
                        </div>
                    </div>
                    <div class="col d-flex same-height align-items-center">
                        <p class="guitar-part-text">Body</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection