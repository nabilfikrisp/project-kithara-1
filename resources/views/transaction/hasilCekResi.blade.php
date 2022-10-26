@extends('layout')

@section('head')
    <title>Cek Resi</title>
    <link rel="stylesheet" href="{{ asset('/css/loginPageStyle.css') }}">
@endsection

@section('content')

    <body>
        <div class="vh-100 w-100 d-flex align-items-center justify-content-center" id="mainBgn">
            <table class="table table-striped table-bordered table-primary" style="width: 60vw">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Resi</th>
                    <th scope="col">Service</th>
                    <th scope="col">Status</th>
                </tr>
                @foreach ($orders as $order)
                <tr>
                  <td scope="row">{{  $loop->iteration }}</td>
                  <td>{{ $order->no_resi }}</td>
                  <td>{{ $order->services->service_name }}</td>
                  <td>{{ $order->status }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
@endsection
