@extends('layout')

@section('head')
<title>Reparasi Gitar - Head</title>
<link rel="stylesheet" href="{{ asset('/css/reparasiPageStyle.css') }}">
@endsection

@section('content')
<div class="container-fluid mt-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-4" align="center">
            <img class="guitar-part-head border border-white rounded" src="{{ asset('image/guitar/neck.png') }}">
        </div>
        <div class="col-4" align="center">
            <h6 class="guitar-part-text">Neck</h6>
        </div>
    </div>
    <div class="row align-items-center justify-content-center mt-3">
        <form>
            <div class="col d-flex">
                <div class="card w-100">
                    <div class="row p-2">
                        <div class="col">
                            <p class="m-0">Jenis Reparasi Neck :</p>
                            <div class="form-check mt-1">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Re-Finish Neck
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2" style="line-height:15px">
                                    Ubah Bentuk Neck<br><span style="font-size:12px;">*Include Re-Finish</span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <button type="submit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" style="width:fit-content">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection