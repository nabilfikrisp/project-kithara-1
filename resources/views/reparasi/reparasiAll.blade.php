@extends('layout')

@section('head')
    <title>Reparasi Gitar</title>
    <link rel="stylesheet" href="{{ asset('/css/reparasiPageStyle.css') }}">
@endsection

@section('jenis_reparasi_head')
    <p class="m-0">Jenis Reparasi Head :</p>

    @foreach ($services as $service)
        @if ($service->part == 'head')
            <div class="form-check mt-1">
                <input class="form-check-input" type="checkbox" name="services[]" id="radio1" value="{{ $service->id }}">
                <label class="form-check-label" for="radio1">
                    {{ $service->service_name }}
                </label>
            </div>
            <div id='repRefinishHead' style="">
                <table>
                    <tr>
                        <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                        <td class="detail-reparasi-text">: {{ $service->estimasi_waktu }} hari</td>
                    </tr>
                    <tr>
                        <td class="detail-reparasi-text">Biaya</td>
                        <td class="detail-reparasi-text">: Rp. {{ $service->biaya }}</td>
                    </tr>
                </table>
            </div>
        @endif
    @endforeach
@endsection



@section('jenis_reparasi_neck')
    <p class="m-0">Jenis Reparasi Neck :</p>
    @foreach ($services as $service)
        @if ($service->part == 'neck')
            <div class="form-check mt-1">
                <input class="form-check-input" type="checkbox" name="services[]" id="radio2"
                    value="{{ $service->id }}">
                <label class="form-check-label" for="radio1">
                    {{ $service->service_name }}
                </label>
            </div>
            <div id='repRefinishHead' style="">
                <table>
                    <tr>
                        <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                        <td class="detail-reparasi-text">: {{ $service->estimasi_waktu }} hari</td>
                    </tr>
                    <tr>
                        <td class="detail-reparasi-text">Biaya</td>
                        <td class="detail-reparasi-text">: Rp. {{ $service->biaya }}</td>
                    </tr>
                </table>
            </div>
        @endif
    @endforeach
@endsection


@section('jenis_reparasi_body')
    <p class="m-0">Jenis Reparasi Body :</p>
    @foreach ($services as $service)
        @if ($service->part == 'body')
            <div class="form-check mt-1">
                <input class="form-check-input" type="checkbox" name="services[]" id="radio3"
                    value="{{ $service->id }}">
                <label class="form-check-label" for="radio1">
                    {{ $service->service_name }}
                </label>
            </div>
            <div id='repRefinishHead' style="">
                <table>
                    <tr>
                        <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                        <td class="detail-reparasi-text">: {{ $service->estimasi_waktu }} hari</td>
                    </tr>
                    <tr>
                        <td class="detail-reparasi-text">Biaya</td>
                        <td class="detail-reparasi-text">: Rp. {{ $service->biaya }}</td>
                    </tr>
                </table>
            </div>
        @endif
    @endforeach
@endsection

@section('content')
    <div class="container-fluid mt-4 mb-4">
        @if (session()->has('error'))
            <div class="container col-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <div class="row align-items-center justify-content-center">
            <h1 class="text-center" style="color:white">Reparasi Gitar</h1>
        </div>
        <div class="row align-items-center justify-content-center mt-3" style="margin-bottom: 150px">
            <form action="/checkout" method="POST">
                @csrf
                <div class="row align-items-center justify-content-center mb-3">
                    <div class="col d-flex justify-content-end">
                        <img class="guitar-part-head border border-white rounded"
                            src="{{ asset('image/guitar/head.png') }}">
                    </div>
                    <div class="col d-flex justify-content-start">
                        <h6 class="guitar-part-text">Head</h6>
                    </div>
                </div>
                <div class="col d-flex justify-content-center mb-5">
                    <div class="card card-reparasi">
                        <div class="row p-3">
                            <div class="col">
                                @yield('jenis_reparasi_head')
                            </div>
                        </div>
                    </div>
                </div>
                <div style="border-top:1px solid white"></div>
                <div class="row align-items-center justify-content-center mb-3 mt-5">
                    <div class="col d-flex justify-content-end">
                        <img class="guitar-part-head border border-white rounded"
                            src="{{ asset('image/guitar/neck.png') }}">
                    </div>
                    <div class="col d-flex justify-content-start">
                        <h6 class="guitar-part-text">Neck</h6>
                    </div>
                </div>
                <div class="col d-flex justify-content-center mb-5">
                    <div class="card card-reparasi">
                        <div class="row p-3">
                            <div class="col">
                                @yield('jenis_reparasi_neck')
                            </div>
                        </div>
                    </div>
                </div>
                <div style="border-top:1px solid white"></div>
                <div class="row align-items-center justify-content-center mb-3 mt-5">
                    <div class="col d-flex justify-content-end">
                        <img class="guitar-part-head border border-white rounded"
                            src="{{ asset('image/guitar/body.png') }}">
                    </div>
                    <div class="col d-flex justify-content-start">
                        <h6 class="guitar-part-text">Body</h6>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card card-reparasi">
                        <div class="row p-3">
                            <div class="col">
                                @yield('jenis_reparasi_body')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 position-fixed start-50 translate-middle own-action d-flex justify-content-center">
                    <div class="d-flex justify-content-center" style="width: fit-content;">
                        <button type="button" class="btn btn-secondary" style="width:6rem"
                            onClick="window.location.reload(true)">Reset Order</button>
                    </div>
                    <div class="d-flex justify-content-center" style="width: fit-content;">
                        <button type="submit" class="btn btn-primary" style="width:6rem" data-toggle="button"
                            aria-pressed="false" autocomplete="off" style="width:fit-content">Konfirmasi
                            Pesanan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script></script>
@endsection
