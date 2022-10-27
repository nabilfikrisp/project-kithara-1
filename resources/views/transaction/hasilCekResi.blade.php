@extends('layout')

@section('head')
<title>Cek Resi</title>
<link rel="stylesheet" href="{{ asset('/css/loginPageStyle.css') }}">
<link rel="stylesheet" href="{{ asset('/css/cekResiPageStyle.css') }}">
@endsection

@section('content')

<body>
    <div class="w-100 d-flex align-items-center" id="mainBgn">
        <div class="formContainer mt-2 mb-5">
            <div class="text-center mb-2">
                <img src="/image/logo/logo.png" alt="Logo Kitharra" style="width:12rem">
            </div>
            <!-- <div class="text-center mb-4">
                <h1 style="color:white">Cek Resi : {{ $orders[0]->no_resi }}</h1>
            </div> -->
            <div class="row d-flex justify-content-center">
                <div class="col justify-content-center" align="center">
                    <div class="card text-start card-resi w-50 mt-2 mb-2 p-2">
                        <h6 class="card-head-resi">Nomor Resi : {{ $orders[0]->no_resi }}</h6>
                        <p class="card-head-text">Info Customer</p>
                        <table>
                            <tr>
                                <td class="card-desc-text">Nama</td>
                                <td class="card-desc-text">: {{ $orders[0]->buyers->name }}</td>
                            </tr>
                            <tr>
                                <td class="card-desc-text">Email</td>
                                <td class="card-desc-text">: {{ $orders[0]->buyers->email }}</td>
                            </tr>
                            <tr>
                                <td class="card-desc-text">Nomor HP</td>
                                <td class="card-desc-text">: {{ $orders[0]->buyers->no_hp }}</td>
                            </tr>
                            <tr>
                                <td class="card-desc-text">Tanggal Order</td>
                                <td class="card-desc-text">: {{  date('d-m-Y', strtotime($orders[0]->created_at)) }}</td>
                            </tr>
                            <tr>
                                <td class="card-desc-text">Estimasi Waktu</td>
                                <td class="card-desc-text">: {{ $estimasiWaktu }} hari</td>
                            </tr>
                            <tr>
                                <td class="card-desc-text">Merek Gitar</td>
                                <td class="card-desc-text">: {{ $orders[0]->merk_gitar }}</td>
                            </tr>
                            <tr>
                                <td class="card-desc-text">Tipe Gitar</td>
                                <td class="card-desc-text">: {{ $orders[0]->tipe_gitar }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card text-start card-resi w-50 mt-2 mb-2 p-2">
                        <p class="card-head-text">Jenis Reparasi</p>
                        <ul>
                            @foreach ($orders as $order)
                            <li>
                                <p class="card-desc-text">{{ $order->services->service_name }}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card text-start card-resi w-50 mt-2 mb-2 p-2">
                        <p class="card-head-text">Progress Reparasi</p>
                        <ul>
                            @foreach ($statusLogs as $statusLog)
                            <li>
                                <p class="card-desc-text"><span style="font-weight:bold">{{  date('d-m-Y', strtotime($statusLog->created_at)) }}</span> : {{ $statusLog->status}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <button type="button" class="btn btn-primary mt-2" onclick="window.history.back();">Back</button>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection