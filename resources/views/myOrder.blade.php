@extends('layout')

@section('head')
    <link href="{{ asset('css/loginPageStyle.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="w-100 d-flex align-items-center">
        <div class="formContainer">
            <div class="text-center mb-2">
                <img src="/image/logo/logo.png" alt="Logo Kitharra" style="width:12rem">
            </div>
            <div class="text-center mb-4">
                <h1 style="color:white">Order Saya</h1>
            </div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No Resi</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <th scope="row">{{ $order->no_resi }}</th>
                            <td>{{ $order->total_harga }}</td>
                            <td>
                                <form action="/cek-resi" method="POST">
                                    @csrf
                                    <input type="hidden" name="no_resi" value="{{ $order->no_resi }}">
                                    <button class="btn btn-primary" type="submit">Detail</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
