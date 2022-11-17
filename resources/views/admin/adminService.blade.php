@extends('admin.adminLayout')

@section('head')
    <style>
        a {
            text-decoration: none;
            color: aliceblue;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid d-inline">
        <div class="row d-flex justify-content-center">
            @if (session()->has('success'))
                <div class="container col-6" style="position:absolute">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <button class="btn btn-primary" type="button" style="width: auto"><a href="/admin/service/add">Add
                    Service</a></button>
            <h3 class="text-center">Data Service</h3>
            <div class="col-10 d-flex justify-content-center mt-2">
                <table class="table table-bordered" style="border:black">
                    <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>Part</th>
                            <th>Nama Servis</th>
                            <th>Estimasi Waktu</th>
                            <th>Biaya</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_user as $datum)
                            <tr class="align-middle">
                                <th>{{ $datum->id }}</th>
                                <td>{{ $datum->part }}</td>
                                <td>{{ $datum->service_name }}</td>
                                <td>{{ $datum->estimasi_waktu }} Hari</td>
                                <td>Rp. {{ number_format($datum->biaya, 2, ',', '.') }}</td>
                                <td class="text-center">
                                    <button class="btn btn-warning" type="button"><a
                                            href="/admin/service/{{ $datum->id }}">Edit</a></button>
                                    <form action="/admin/service/{{ $datum->id }}" method="POST" class="d-inline-block">
                                        @csrf
                                        <button type="submit" class="btn btn-danger m-2"
                                            onclick="return confirm('Anda yakin menghapus service ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
