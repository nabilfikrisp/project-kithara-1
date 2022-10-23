@extends('admin.adminLayout')

@section('head')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <h3 class="text-center">Data User</h3>
        <div class="col-10 d-flex justify-content-center mt-2">
            <table class="table table-bordered" style="border:black">
                <thead class="table-dark">
                    <tr>
                        <th>id</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Nomor HP</th>
                        <th>Alamat</th>
                        <th>Admin</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_user as $datum)
                    <tr class="align-middle">
                        <th>{{ $datum->id }}</th>
                        <td>{{ $datum->email }}</td>
                        <td>{{ $datum->name }}</td>
                        <td>{{ $datum->no_hp }}</td>
                        <td>
                            {{ $datum->alamat }},
                            {{ $datum->kelurahan }},
                            {{ $datum->kecamatan }},
                            {{ $datum->kota }},
                            {{ $datum->negara }}
                            {{ $datum->kode_pos }}
                        </td>
                        @if($datum->is_admin == 1)
                        <td class="text-center" style="background-color:green; color:white">Admin</td>
                        @else
                        <td class="text-center">Bukan Admin</td>
                        @endif
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