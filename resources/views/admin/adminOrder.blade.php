@extends('admin.adminLayout')

@section('head')
    <style>
        .td-edit {
            background-color: silver !important;
        }

        .th-id {
            background-color: rgb(255, 255, 75) !important;
        }

        .td-parent-cust {
            background-color: rgb(200, 50, 50) !important;
            color: white !important;
            font-weight: bold;
            font-size: 15px;
        }

        .td-child-cust {
            /* background-color: rgb(200, 100, 100) !important; */
            background-color: white;
            font-size: 14px;
        }

        .td-parent-order {
            background-color: rgb(50, 125, 200) !important;
            color: white !important;
            font-size: 15px;
            font-weight: bold;
        }

        .td-child-order {
            /* background-color: rgb(100, 150, 200) !important; */
            background-color: white;
        }

        .td-parent-pengerjaan {
            background-color: rgb(75, 200, 75) !important;
            color: white !important;
            font-size: 15px;
            font-weight: bold;
        }

        .td-child-pengerjaan {
            /* background-color: rgb(125, 200, 125) !important; */
            background-color: white;
        }
    </style>
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
            <h3 class="text-center">Data Order</h3>
            <div class="col-10 d-flex justify-content-center mt-2">
                <div class="table-responsive" style="width: 70vw">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Service</th>
                                <th scope="col">Harga</th>
                                <th scope="col">No Resi</th>
                                <th scope="col">Status</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr class="">
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $order->buyers->name }}</td>
                                    <td>{{ $order->services->service_name }}</td>
                                    <td>Rp. {{ number_format($order->total_harga, 2, ',', '.') }}</td>
                                    <td>{{ $order->no_resi }}</td>
                                    {{-- <td>{{ $order->status }}</td> --}}
                                    <td>
                                        @foreach ($statusLogs as $statusLog)
                                            @if ($order->no_resi == $statusLog->no_resi)
                                                {{ $statusLog->status }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="/admin/orders/{{ $order->id }}" class="d-inline-block">
                                            <button class="btn btn-warning" type="button">Show</button>
                                        </a>
                                        <form action="/admin/orders/{{ $order->id }}" method="POST" class="d-inline-block">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger m-2" onclick="return confirm('Anda yakin menghapus order ini?')">Delete Order Ini</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- <table class="table table-bordered" style="border:black">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th style="color:rgb(255, 255, 75);">id</th>
                        <th colspan="2" style="color:rgb(200,50,50);">Info Customer</th>
                        <th colspan="4" style="color:rgb(50,125,200);">Info Order</th>
                        <th colspan="2" style="color:rgb(75, 200, 75);">Info Pengerjaan</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr class="align-middle">
                        <th class="th-id" rowspan="4">{{ $order->id }}</th>
                        <td class="td-parent-cust">Nama</td>
                        <td class="td-child-cust">{{ $order->buyers->name }}</td>
                        <td class="td-parent-order">Part</td>
                        <td class="td-child-order">{{ $order->services->part }}</td>
                        <td class="td-parent-order">Service</td>
                        <td class="td-child-order">{{ $order->services->service_name }}</td>
                        <td class="td-parent-pengerjaan">No Resi</td>
                        <td class="td-child-pengerjaan">{{ $order->no_resi }}</td>
                        <td class="text-center td-edit" rowspan="4">
                            <a href="/admin/orders/{{ $order->id }}">
                                <button class="btn btn-warning" type="button">Show</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-parent-cust">Email</td>
                        <td class="td-child-cust">{{ $order->buyers->email }}</td>
                        <td class="td-parent-order">Merk Gitar</td>
                        <td class="td-child-order">{{ $order->merk_gitar }}</td>
                        <td class="td-parent-order">Tipe Gitar</td>
                        <td class="td-child-order">{{ $order->tipe_gitar }}</td>
                        <td class="td-parent-pengerjaan" rowspan="2">Status</td>
                        <td class="td-child-pengerjaan" rowspan="2">{{ $order->status }}</td>
                    </tr>
                    <tr class="align-middle">
                        <td class="td-parent-cust">No HP</td>
                        <td class="td-child-cust">{{ $order->buyers->no_hp }}</td>
                        <td class="td-parent-order">Delivery By</td>
                        <td class="td-child-order">{{ $order->delivery_by }}</td>
                        <td class="td-parent-order">Pickup By</td>
                        <td class="td-child-order">{{ $order->pickup_by }}</td>
                    </tr>
                    <tr class="align-middle">
                        <td class="td-parent-cust">Alamat</td>
                        <td class="td-child-cust">
                            {{ $order->buyers->alamat }},
                            {{ $order->buyers->kelurahan }},
                            {{ $order->buyers->kecamatan }},
                            {{ $order->buyers->kota }},
                            {{ $order->buyers->negara }}
                            {{ $order->buyers->kode_pos }}
                        </td>
                        <td class="td-parent-order">Pembayaran</td>
                        <td class="td-child-order">{{ $order->total_harga }} ({{ $order->payment_type }})</td>
                        <td class="td-parent-order">Bukti Bayar</td>
                        <td class="td-child-order">
                            @if ($order->payment_type == 'cash')
                            @if ($order->bukti_bayar == null)
                            Belom Bayar
                            @else
                            <a href="">Bukti Bayar</a>
                            @endif
                            @else
                            <a href="{{ asset('storage/' . $order->bukti_bayar) }}">Bukti Bayar</a>
                            @endif
                        </td>
                        <td class="td-parent-pengerjaan">Estimasi Waktu</td>
                        <td class="td-child-pengerjaan">{{ $order->estimasi_waktu }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}
            </div>
        </div>
    </div>
@endsection
