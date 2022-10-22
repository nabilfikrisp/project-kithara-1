@extends('layout')

@section('head')
    <title>Reparasi Gitar - Head</title>
    <link rel="stylesheet" href="{{ asset('/css/reparasiPageStyle.css') }}">
@endsection

@section('jenis_reparasi_head')
    <p class="m-0">Jenis Reparasi Head :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repHead" id="radio1" value="refinish_head"
            onchange="showDetails1(this)">
        <label class="form-check-label" for="radio1">
            Re-Finish Head
        </label>
        <div id='repRefinishHead' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: 14 hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. 50000</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repHead" id="radio2" value="ubah_head">
        <label class="form-check-label" for="radio2" style="line-height:15px">
            Ubah Bentuk Head<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahHead" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: 14 hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. 50000</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_tuning_machine')
    <p class="m-0">Jenis Reparasi Tuning Machine :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repTuningMachine" id="radio3"
            value="refinish_tuning_machine" onchange="showDetails2(this)">
        <label class="form-check-label" for="radio3">
            Re-Finish Tuning Machine
        </label>
        <div id="repRefinishTuningMachine" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: 14 hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. 50000</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repTuningMachine" id="radio4" value="ubah_tuning_machine">
        <label class="form-check-label" for="radio4" style="line-height:15px">
            Ubah Bentuk Tuning Machine<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahTuningMachine" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: 14 hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. 50000</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_nut')
    <p class="m-0">Jenis Reparasi Nut :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repNut" id="radio5" value="refinish_nut"
            onchange="showDetails3(this)">
        <label class="form-check-label" for="radio5">
            Re-Finish Nut
        </label>
        <div id="repRefinishNut" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: 14 hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. 50000</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repNut" id="radio6" value="ubah_nut">
        <label class="form-check-label" for="radio6" style="line-height:15px">
            Ubah Bentuk Nut<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahNut" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: 14 hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. 50000</td>
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
                <img class="guitar-part-head border border-white rounded" src="{{ asset('image/guitar/head.png') }}">
            </div>
            <div class="col d-flex justify-content-start">
                <h6 class="guitar-part-text">Head</h6>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mt-3">
            <form action="/checkout" method="POST">
                @csrf
                <div class="col d-flex justify-content-center">
                    <div class="card card-reparasi">
                        <div class="row p-3">
                            <div class="col">
                                @yield('jenis_reparasi_head')
                                @yield('jenis_reparasi_tuning_machine')
                                @yield('jenis_reparasi_nut')
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
        var box1 = document.getElementById('repRefinishHead');
        var box2 = document.getElementById('repUbahHead');
        var box3 = document.getElementById('repRefinishTuningMachine');
        var box4 = document.getElementById('repUbahTuningMachine');
        var box5 = document.getElementById('repRefinishNut');
        var box6 = document.getElementById('repUbahNut');

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

        const radioButtons1 = document.querySelectorAll('input[name="repHead"]');
        radioButtons1.forEach(radio => {
            radio.addEventListener('click', showDetails1);
        });

        const radioButtons2 = document.querySelectorAll('input[name="repTuningMachine"]');
        radioButtons2.forEach(radio => {
            radio.addEventListener('click', showDetails2);
        });

        const radioButtons3 = document.querySelectorAll('input[name="repNut"]');
        radioButtons3.forEach(radio => {
            radio.addEventListener('click', showDetails3);
        });
    </script>
@endsection
