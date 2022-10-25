@extends('layout')

@section('head')
    <title>Reparasi Gitar - Head</title>
    <link rel="stylesheet" href="{{ asset('/css/reparasiPageStyle.css') }}">
@endsection
@section('jenis_reparasi_neck')
    <p class="m-0">Jenis Reparasi Neck :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repNeck" id="radio1" value="refinish_neck"
            onchange="showDetails1(this)">
        <label class="form-check-label" for="radio1">
            Re-Finish Neck
        </label>
        <div id='repRefinishNeck' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[1]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[1]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repNeck" id="radio2" value="ubah_neck">
        <label class="form-check-label" for="radio2" style="line-height:15px">
            Ubah Bentuk Neck<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahNeck" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[0]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[0]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_fret')
    <p class="m-0">Jenis Reparasi Fret :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repFret" id="radio3" value="refinish_fret"
            onchange="showDetails2(this)">
        <label class="form-check-label" for="radio3">
            Re-Finish Fret
        </label>
        <div id='repRefinishFret' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[3]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[3]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repFret" id="radio4" value="ubah_fret">
        <label class="form-check-label" for="radio4" style="line-height:15px">
            Ubah Bentuk Fret<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahFret" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[2]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[2]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_pickup')
    <p class="m-0">Jenis Reparasi Pickup :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repPickup" id="radio5" value="refinish_pickup"
            onchange="showDetails3(this)">
        <label class="form-check-label" for="radio5">
            Re-Finish Pickup
        </label>
        <div id='repRefinishPickup' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[5]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[5]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repPickup" id="radio6" value="ubah_pickup">
        <label class="form-check-label" for="radio6" style="line-height:15px">
            Ubah Bentuk Pickup<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahPickup" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[4]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[4]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
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
        <div class="row align-items-center justify-content-center mt-3">
            <div class="col d-flex justify-content-end">
                <img class="guitar-part-head border border-white rounded" src="{{ asset('image/guitar/neck.png') }}">
            </div>
            <div class="col d-flex justify-content-start">
                <h6 class="guitar-part-text">Neck</h6>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mt-3">
            <form action="/checkout-neck" method="POST">
                @csrf
                <div class="col d-flex justify-content-center">
                    <div class="card card-reparasi">
                        <div class="row p-3">
                            <div class="col">
                                @yield('jenis_reparasi_neck')
                                @yield('jenis_reparasi_fret')
                                @yield('jenis_reparasi_pickup')
                                <div class="mt-3 text-center">
                                    <button type="button" class="btn btn-secondary"
                                        onClick="window.location.reload(true)">Reset Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <button type="submit" class="btn btn-primary" data-toggle="button" aria-pressed="false"
                        autocomplete="off" style="width:fit-content">Konfirmasi Pesanan</button>
                    {{-- <a href="{{ route('checkout') }}" class="text-center">Next dlu</a> --}}
                </div>
            </form>
        </div>
    </div>
    <script>
        var box1 = document.getElementById('repRefinishNeck');
        var box2 = document.getElementById('repUbahNeck');
        var box3 = document.getElementById('repRefinishFret');
        var box4 = document.getElementById('repUbahFret');
        var box5 = document.getElementById('repRefinishPickup');
        var box6 = document.getElementById('repUbahPickup');

        function showDetails1(checkboxTicked) {
            if (checkboxTicked.checked) {
                box1.style.display = 'block';
                box2.style.display = 'none';
            } else {
                box1.style.display = 'none';
                box2.style.display = 'block';
            }
        }

        function showDetails2(checkboxTicked) {
            if (checkboxTicked.checked) {
                box3.style.display = 'block';
                box4.style.display = 'none';
            } else {
                box3.style.display = 'none';
                box4.style.display = 'block';
            }
        }

        function showDetails3(checkboxTicked) {
            if (checkboxTicked.checked) {
                box5.style.display = 'block';
                box6.style.display = 'none';
            } else {
                box5.style.display = 'none';
                box6.style.display = 'block';
            }
        }

        const radioButtons1 = document.querySelectorAll('input[name="repNeck"]');
        radioButtons1.forEach(radio => {
            radio.addEventListener('click', showDetails1);
        });

        const radioButtons2 = document.querySelectorAll('input[name="repFret"]');
        radioButtons2.forEach(radio => {
            radio.addEventListener('click', showDetails2);
        });

        const radioButtons3 = document.querySelectorAll('input[name="repPickup"]');
        radioButtons3.forEach(radio => {
            radio.addEventListener('click', showDetails3);
        });
    </script>
@endsection
