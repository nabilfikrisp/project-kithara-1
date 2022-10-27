@extends('layout')

@section('head')
    <title>Reparasi Gitar</title>
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
        <input class="form-check-input" type="radio" name="repHead" id="radio2" value="ubah_head">
        <label class="form-check-label" for="radio2" style="line-height:15px">
            Ubah Bentuk Head<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahHead" style="display:none">
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
        <input class="form-check-input" type="radio" name="repTuningMachine" id="radio4" value="ubah_tuning_machine">
        <label class="form-check-label" for="radio4" style="line-height:15px">
            Ubah Bentuk Tuning Machine<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahTuningMachine" style="display:none">
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
        <input class="form-check-input" type="radio" name="repNut" id="radio6" value="ubah_nut">
        <label class="form-check-label" for="radio6" style="line-height:15px">
            Ubah Bentuk Nut<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahNut" style="display:none">
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

@section('jenis_reparasi_neck')
    <p class="m-0">Jenis Reparasi Neck :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repNeck" id="radio7" value="refinish_neck"
            onchange="showDetails4(this)">
        <label class="form-check-label" for="radio7">
            Re-Finish Neck
        </label>
        <div id='repRefinishNeck' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[7]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[7]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repNeck" id="radio8" value="ubah_neck">
        <label class="form-check-label" for="radio8" style="line-height:15px">
            Ubah Bentuk Neck<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahNeck" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[6]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[6]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_fret')
    <p class="m-0">Jenis Reparasi Fret :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repFret" id="radio9" value="refinish_fret"
            onchange="showDetails5(this)">
        <label class="form-check-label" for="radio9">
            Re-Finish Fret
        </label>
        <div id='repRefinishFret' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[9]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[9]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repFret" id="radio10" value="ubah_fret">
        <label class="form-check-label" for="radio10" style="line-height:15px">
            Ubah Bentuk Fret<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahFret" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[8]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[8]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_pickup')
    <p class="m-0">Jenis Reparasi Pickup :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repPickup" id="radio11" value="refinish_pickup"
            onchange="showDetails6(this)">
        <label class="form-check-label" for="radio11">
            Re-Finish Pickup
        </label>
        <div id='repRefinishPickup' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[11]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[11]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repPickup" id="radio12" value="ubah_pickup">
        <label class="form-check-label" for="radio12" style="line-height:15px">
            Ubah Bentuk Pickup<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahPickup" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[10]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[10]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_body')
    <p class="m-0">Jenis Reparasi Body :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repBody" id="radio13" value="refinish_body"
            onchange="showDetails7(this)">
        <label class="form-check-label" for="radio13">
            Re-Finish Body
        </label>
        <div id='repRefinishBody' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[13]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[13]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repBody" id="radio14" value="ubah_body">
        <label class="form-check-label" for="radio14" style="line-height:15px">
            Ubah Bentuk Body<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahBody" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[12]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[12]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_saddle')
    <p class="m-0">Jenis Reparasi Saddle :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repSaddle" id="radio15" value="refinish_saddle"
            onchange="showDetails8(this)">
        <label class="form-check-label" for="radio15">
            Re-Finish Saddle
        </label>
        <div id='repRefinishSaddle' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[15]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[15]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repSaddle" id="radio16" value="ubah_saddle">
        <label class="form-check-label" for="radio16" style="line-height:15px">
            Ubah Bentuk Saddle<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahSaddle" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[14]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[14]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_bridge')
    <p class="m-0">Jenis Reparasi Bridge :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repBridge" id="radio17" value="refinish_bridge"
            onchange="showDetails9(this)">
        <label class="form-check-label" for="radio17">
            Re-Finish Bridge
        </label>
        <div id='repRefinishBridge' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[17]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[17]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repBridge" id="radio18" value="ubah_bridge">
        <label class="form-check-label" for="radio18" style="line-height:15px">
            Ubah Bentuk Bridge<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahBridge" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[16]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[16]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('jenis_reparasi_pin')
    <p class="m-0">Jenis Reparasi Pin :</p>
    <div class="form-check mt-1">
        <input class="form-check-input" type="radio" name="repPin" id="radio19" value="refinish_pin"
            onchange="showDetails10(this)">
        <label class="form-check-label" for="radio19">
            Re-Finish Pin
        </label>
        <div id='repRefinishPin' style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[19]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[19]->biaya }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" type="radio" name="repPin" id="radio20" value="ubah_pin">
        <label class="form-check-label" for="radio20" style="line-height:15px">
            Ubah Bentuk Pin<br><span style="font-size:12px;">*Include Re-Finish</span>
        </label>
        <div id="repUbahPin" style="display:none">
            <table>
                <tr>
                    <td class="detail-reparasi-text">Estimasi Pengerjaan</td>
                    <td class="detail-reparasi-text">: {{ $services[18]->estimasi_waktu }} hari</td>
                </tr>
                <tr>
                    <td class="detail-reparasi-text">Biaya</td>
                    <td class="detail-reparasi-text">: Rp. {{ $services[18]->biaya }}</td>
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
                                @yield('jenis_reparasi_tuning_machine')
                                @yield('jenis_reparasi_nut')
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
                                @yield('jenis_reparasi_fret')
                                @yield('jenis_reparasi_pickup')
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
                                @yield('jenis_reparasi_saddle')
                                @yield('jenis_reparasi_bridge')
                                @yield('jenis_reparasi_pin')
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
                    <!-- {{-- <a href="{{ route('checkout') }}" class="text-center">Next dlu</a> --}} -->
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
        var box7 = document.getElementById('repRefinishNeck');
        var box8 = document.getElementById('repUbahNeck');
        var box9 = document.getElementById('repRefinishFret');
        var box10 = document.getElementById('repUbahFret');
        var box11 = document.getElementById('repRefinishPickup');
        var box12 = document.getElementById('repUbahPickup');
        var box13 = document.getElementById('repRefinishBody');
        var box14 = document.getElementById('repUbahBody');
        var box15 = document.getElementById('repRefinishSaddle');
        var box16 = document.getElementById('repUbahSaddle');
        var box17 = document.getElementById('repRefinishBridge');
        var box18 = document.getElementById('repUbahBridge');
        var box19 = document.getElementById('repRefinishPin');
        var box20 = document.getElementById('repUbahPin');

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

        function showDetails4(checkboxTicked) {
            if (checkboxTicked.checked) {
                box7.style.display = 'block';
                box8.style.display = 'none';
            } else {
                box7.style.display = 'none';
                box8.style.display = 'block';
            }
        }

        function showDetails5(checkboxTicked) {
            if (checkboxTicked.checked) {
                box9.style.display = 'block';
                box10.style.display = 'none';
            } else {
                box9.style.display = 'none';
                box10.style.display = 'block';
            }
        }

        function showDetails6(checkboxTicked) {
            if (checkboxTicked.checked) {
                box11.style.display = 'block';
                box12.style.display = 'none';
            } else {
                box11.style.display = 'none';
                box12.style.display = 'block';
            }
        }

        function showDetails7(checkboxTicked) {
            if (checkboxTicked.checked) {
                box13.style.display = 'block';
                box14.style.display = 'none';
            } else {
                box13.style.display = 'none';
                box14.style.display = 'block';
            }
        }

        function showDetails8(checkboxTicked) {
            if (checkboxTicked.checked) {
                box15.style.display = 'block';
                box16.style.display = 'none';
            } else {
                box15.style.display = 'none';
                box16.style.display = 'block';
            }
        }

        function showDetails9(checkboxTicked) {
            if (checkboxTicked.checked) {
                box17.style.display = 'block';
                box18.style.display = 'none';
            } else {
                box17.style.display = 'none';
                box18.style.display = 'block';
            }
        }

        function showDetails10(checkboxTicked) {
            if (checkboxTicked.checked) {
                box19.style.display = 'block';
                box20.style.display = 'none';
            } else {
                box19.style.display = 'none';
                box20.style.display = 'block';
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

        const radioButtons4 = document.querySelectorAll('input[name="repNeck"]');
        radioButtons4.forEach(radio => {
            radio.addEventListener('click', showDetails4);
        });

        const radioButtons5 = document.querySelectorAll('input[name="repFret"]');
        radioButtons5.forEach(radio => {
            radio.addEventListener('click', showDetails5);
        });

        const radioButtons6 = document.querySelectorAll('input[name="repPickup"]');
        radioButtons6.forEach(radio => {
            radio.addEventListener('click', showDetails6);
        });

        const radioButtons7 = document.querySelectorAll('input[name="repBody"]');
        radioButtons7.forEach(radio => {
            radio.addEventListener('click', showDetails7);
        });

        const radioButtons8 = document.querySelectorAll('input[name="repSaddle"]');
        radioButtons8.forEach(radio => {
            radio.addEventListener('click', showDetails8);
        });

        const radioButtons9 = document.querySelectorAll('input[name="repBridge"]');
        radioButtons9.forEach(radio => {
            radio.addEventListener('click', showDetails9);
        });

        const radioButtons10 = document.querySelectorAll('input[name="repPin"]');
        radioButtons10.forEach(radio => {
            radio.addEventListener('click', showDetails10);
        });
    </script>
@endsection
