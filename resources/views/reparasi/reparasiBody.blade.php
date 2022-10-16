@extends('layout')

@section('head')
<title>Reparasi Gitar - Body</title>
<link rel="stylesheet" href="{{ asset('/css/reparasiPageStyle.css') }}">
@endsection

@section('jenis_reparasi_body')
<p class="m-0">Jenis Reparasi Body :</p>
<div class="form-check mt-1">
    <input class="form-check-input" type="radio" name="repBody" id="radio1" value="option1" onchange="showDetails1(this)">
    <label class="form-check-label" for="radio1">
        Re-Finish Body
    </label>
    <div id='repRefinishBody' style="display:none">
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
    <input class="form-check-input" type="radio" name="repBody" id="radio2" value="option2">
    <label class="form-check-label" for="radio2" style="line-height:15px">
        Ubah Bentuk Body<br><span style="font-size:12px;">*Include Re-Finish</span>
    </label>
    <div id="repUbahBody" style="display:none">
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

@section('jenis_reparasi_saddle')
<p class="m-0">Jenis Reparasi Saddle :</p>
<div class="form-check mt-1">
    <input class="form-check-input" type="radio" name="repSaddle" id="radio3" value="option1" onchange="showDetails2(this)">
    <label class="form-check-label" for="radio3">
        Re-Finish Saddle
    </label>
    <div id='repRefinishSaddle' style="display:none">
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
    <input class="form-check-input" type="radio" name="repSaddle" id="radio4" value="option2">
    <label class="form-check-label" for="radio4" style="line-height:15px">
        Ubah Bentuk Saddle<br><span style="font-size:12px;">*Include Re-Finish</span>
    </label>
    <div id="repUbahSaddle" style="display:none">
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

@section('jenis_reparasi_bridge')
<p class="m-0">Jenis Reparasi Bridge :</p>
<div class="form-check mt-1">
    <input class="form-check-input" type="radio" name="repBridge" id="radio5" value="option1" onchange="showDetails3(this)">
    <label class="form-check-label" for="radio5">
        Re-Finish Bridge
    </label>
    <div id='repRefinishBridge' style="display:none">
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
    <input class="form-check-input" type="radio" name="repBridge" id="radio6" value="option2">
    <label class="form-check-label" for="radio6" style="line-height:15px">
        Ubah Bentuk Bridge<br><span style="font-size:12px;">*Include Re-Finish</span>
    </label>
    <div id="repUbahBridge" style="display:none">
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

@section('jenis_reparasi_pin')
<p class="m-0">Jenis Reparasi Pin :</p>
<div class="form-check mt-1">
    <input class="form-check-input" type="radio" name="repPin" id="radio7" value="option1" onchange="showDetails4(this)">
    <label class="form-check-label" for="radio7">
        Re-Finish Pin
    </label>
    <div id='repRefinishPin' style="display:none">
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
    <input class="form-check-input" type="radio" name="repPin" id="radio8" value="option2">
    <label class="form-check-label" for="radio8" style="line-height:15px">
        Ubah Bentuk Pin<br><span style="font-size:12px;">*Include Re-Finish</span>
    </label>
    <div id="repUbahPin" style="display:none">
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
    <div class="row align-items-center justify-content-center">
        <h1 class="text-center" style="color:white">Reparasi Gitar</h1>
    </div>
    <div class="row align-items-center justify-content-center mt-3">
        <div class="col d-flex justify-content-end">
            <img class="guitar-part-head border border-white rounded" src="{{ asset('image/guitar/body.png') }}">
        </div>
        <div class="col d-flex justify-content-start">
            <h6 class="guitar-part-text">Body</h6>
        </div>
    </div>
    <div class="row align-items-center justify-content-center mt-3">
        <form>
            <div class="col d-flex justify-content-center">
                <div class="card card-reparasi">
                    <div class="row p-3">
                        <div class="col">
                            @yield('jenis_reparasi_body')
                            @yield('jenis_reparasi_saddle')
                            @yield('jenis_reparasi_bridge')
                            @yield('jenis_reparasi_pin')
                            <div class="mt-3 text-center">
                                <button type="button" class="btn btn-secondary" onClick="window.location.reload(true)">Reset Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="width:fit-content" disabled>Konfirmasi Pesanan</button>
                <a href="{{ route('checkout') }}" class="text-center">Next dlu</a>
            </div>
        </form>
    </div>
</div>
<script>
    var box1 = document.getElementById('repRefinishBody');
    var box2 = document.getElementById('repUbahBody');
    var box3 = document.getElementById('repRefinishSaddle');
    var box4 = document.getElementById('repUbahSaddle');
    var box5 = document.getElementById('repRefinishBridge');
    var box6 = document.getElementById('repUbahBridge');
    var box7 = document.getElementById('repRefinishPin');
    var box8 = document.getElementById('repUbahPin');

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

    const radioButtons1 = document.querySelectorAll('input[name="repBody"]');
    radioButtons1.forEach(radio => {
        radio.addEventListener('click', showDetails1);
    });

    const radioButtons2 = document.querySelectorAll('input[name="repSaddle"]');
    radioButtons2.forEach(radio => {
        radio.addEventListener('click', showDetails2);
    });

    const radioButtons3 = document.querySelectorAll('input[name="repBridge"]');
    radioButtons3.forEach(radio => {
        radio.addEventListener('click', showDetails3);
    });

    const radioButtons4 = document.querySelectorAll('input[name="repPin"]');
    radioButtons4.forEach(radio => {
        radio.addEventListener('click', showDetails4);
    });
</script>
@endsection