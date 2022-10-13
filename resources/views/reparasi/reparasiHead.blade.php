@extends('layout')

@section('head')
<title>Reparasi Gitar - Head</title>
<link rel="stylesheet" href="{{ asset('/css/reparasiPageStyle.css') }}">
@endsection

@section('jenis_reparasi_head')
<p class="m-0">Jenis Reparasi {{ $item_head[0]->nama }} :</p>
<div class="form-check mt-1">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
    <label class="form-check-label" for="exampleRadios1">
        Re-Finish {{ $item_head[0]->nama }}
    </label>
</div>
<div class="form-check mt-2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2" style="line-height:15px">
        Ubah Bentuk {{ $item_head[0]->nama }}<br><span style="font-size:12px;">*Include Re-Finish</span>
    </label>
</div>
@endsection

@section('jenis_reparasi_tuning_machine')
<p class="m-0">Jenis Reparasi {{ $item_tuning_machine[0]->nama }} :</p>
<div class="form-check mt-1">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
    <label class="form-check-label" for="exampleRadios1">
        Re-Finish {{ $item_tuning_machine[0]->nama }}
    </label>
</div>
<div class="form-check mt-2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2" style="line-height:15px">
        Ubah Bentuk {{ $item_tuning_machine[0]->nama }}<br><span style="font-size:12px;">*Include Re-Finish</span>
    </label>
</div>
@endsection

@section('jenis_reparasi_nut')
<p class="m-0">Jenis Reparasi {{ $item_nut[0]->nama }} :</p>
<div class="form-check mt-1">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1">
    <label class="form-check-label" for="exampleRadios1">
        Re-Finish {{ $item_nut[0]->nama }}
    </label>
</div>
<div class="form-check mt-2">
    <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2" style="line-height:15px">
        Ubah Bentuk {{ $item_nut[0]->nama }}<br><span style="font-size:12px;">*Include Re-Finish</span>
    </label>
</div>
@endsection

@section('content')
<div class="container-fluid mt-4 mb-4">
    <div class="row align-items-center justify-content-center">
        <h1 class="text-center" style="color:white">Reparasi Gitar</h1>
    </div>
    <div class="row align-items-center justify-content-center mt-3">
        <div class="col-4" align="center">
            <img class="guitar-part-head border border-white rounded" src="{{ asset('image/guitar/head.png') }}">
        </div>
        <div class="col-4" align="center">
            <h6 class="guitar-part-text">Head</h6>
        </div>
    </div>
    <div class="row align-items-center justify-content-center mt-3">
        <form>
            <div class="col d-flex">
                <div class="card w-100">
                    <div class="row p-2">
                        <div class="col">
                            @yield('jenis_reparasi_head')
                            @yield('jenis_reparasi_tuning_machine')
                            @yield('jenis_reparasi_nut')
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <button type="submit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="width:fit-content">Konfirmasi Pesanan</button>
            </div>
        </form>
    </div>
</div>
@endsection