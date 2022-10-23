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
        <h3 class="text-center">Data Order</h3>
        <div class="col-10 d-flex justify-content-center mt-2">
            <table class="table table-bordered" style="border:black">
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
                    @foreach ($data_user as $datum)
                    <tr class="align-middle">
                        <th class="th-id" rowspan="4">{{ $datum->id }}</th>
                        <td class="td-parent-cust">Nama</td>
                        <td class="td-child-cust">{{ $datum->name }}</td>
                        <td class="td-parent-order">Part</td>
                        <td class="td-child-order">{{ $datum->part }}</td>
                        <td class="td-parent-order">Service</td>
                        <td class="td-child-order">{{ $datum->service_name }}</td>
                        <td class="td-parent-pengerjaan">No Resi</td>
                        <td class="td-child-pengerjaan">{{ $datum->no_resi }}</td>
                        <td class="text-center td-edit" rowspan="4">
                            <button class="btn btn-warning" type="button">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-parent-cust">Email</td>
                        <td class="td-child-cust">{{ $datum->email }}</td>
                        <td class="td-parent-order">Merk Gitar</td>
                        <td class="td-child-order">{{ $datum->merk_gitar }}</td>
                        <td class="td-parent-order">Tipe Gitar</td>
                        <td class="td-child-order">{{ $datum->tipe_gitar }}</td>
                        <td class="td-parent-pengerjaan" rowspan="2">Status</td>
                        <td class="td-child-pengerjaan" rowspan="2">{{ $datum->status }}</td>
                    </tr>
                    <tr class="align-middle">
                        <td class="td-parent-cust">No HP</td>
                        <td class="td-child-cust">{{ $datum->no_hp }}</td>
                        <td class="td-parent-order">Delivery By</td>
                        <td class="td-child-order">{{ $datum->delivery_by }}</td>
                        <td class="td-parent-order">Pickup By</td>
                        <td class="td-child-order">{{ $datum->pickup_by }}</td>
                    </tr>
                    <tr class="align-middle">
                        <td class="td-parent-cust">Alamat</td>
                        <td class="td-child-cust">
                            {{ $datum->alamat }},
                            {{ $datum->kelurahan }},
                            {{ $datum->kecamatan }},
                            {{ $datum->kota }},
                            {{ $datum->negara }}
                            {{ $datum->kode_pos }}
                        </td>
                        <td class="td-parent-order">Pembayaran</td>
                        <td class="td-child-order">{{ $datum->total_harga }} ({{ $datum->payment_type }})</td>
                        <td class="td-parent-order">Bukti Bayar</td>
                        <td class="td-child-order">
                            <a href="">Bukti Bayar</a>
                        </td>
                        <td class="td-parent-pengerjaan">Estimasi Waktu</td>
                        <td class="td-child-pengerjaan">{{ $datum->estimasi_waktu }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection