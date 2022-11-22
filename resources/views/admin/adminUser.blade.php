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
                            <th>Hapus</th>
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
                                @if ($datum->is_admin == 1)
                                    <td class="text-center" style="background-color:green; color:white">Admin</td>
                                @else
                                    <td class="text-center">Customer</td>
                                @endif
                                @if (count($data_user) < 2)
                                    <td class="text-center">

                                    </td>
                                @else
                                    <td class="text-center">
                                        <form action="{{ route('delete.user', $datum->id) }}" method="POST"
                                            class="d-inline-block">
                                            @csrf
                                            <button type="submit" class="btn btn-danger m-2"
                                                onclick="return confirm('Anda yakin menghapus akun ini?')">Delete</button>
                                        </form>
                                    </td>
                                @endif

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
