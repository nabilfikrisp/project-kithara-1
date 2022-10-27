@extends('admin.adminLayout')

@section('head')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            @if (session()->has('success'))
                <div class="container col-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <h3 class="text-center">Edit Data Service [id = {{ $service->id }}]</h3>
            <div class="col d-flex justify-content-center">
                <div class="card w-75 mt-3 mb-3" style="border:1px solid black">
                    <form action="/admin/service/update" method="post">
                        @csrf
                        <div class="row d-flex justify-content-center mt-4 mb-4">
                            <div class="col-6 justify-content-center m-0">
                                {{-- <h4 class="text-center">Info Customer</h4> --}}
                                <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                    <label for="part">Part</label>
                                    <input type="text" id="part" name="part" value="{{ $service->part }}"
                                        disabled>
                                </div>
                                <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                    <label for="service_name">Service Name</label>
                                    <input type="text" id="service_name" name="service_name"
                                        value="{{ $service->service_name }}" disabled>
                                </div>
                            </div>

                            <div class="col-6 justify-content-center m-0">
                                {{-- <h4 class="text-center">Info Customer</h4> --}}
                                <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                    <label for="estimasi_waktu">Estimasi waktu dalam hari (dapat diupdate)</label>
                                    <input type="text" id="estimasi_waktu" name="estimasi_waktu"
                                        value="{{ $service->estimasi_waktu }}">
                                </div>
                                <div class="row p-1 w-75" style="margin-left:1rem;margin-right:1rem">
                                    <label for="harga">Harga (dapat diupdate)</label>
                                    <input type="text" id="harga" name="harga" value="{{ $service->biaya }}">
                                </div>
                                <input type="hidden" id="serviceID" name="serviceID" value="{{ $service->id }}">
                            </div>
                            <div class="row d-flex justify-content-center mt-5 mb-4">
                                <div class="col justify-content-center text-center">
                                    <button type="submit" class="btn btn-primary m-2">Update Service Ini</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
