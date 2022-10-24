@extends('admin.adminLayout')

@section('head')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
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
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_user as $datum)
                    <tr class="align-middle">
                        <th>{{ $datum->id }}</th>
                        <td>{{ $datum->part }}</td>
                        <td>{{ $datum->service_name }}</td>
                        <td>{{ $datum->estimasi_waktu }} Hari</td>
                        <td>Rp. {{ $datum->biaya }}</td>
                        <td class="text-center">
                            <button class="btn btn-warning" type="button">Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection