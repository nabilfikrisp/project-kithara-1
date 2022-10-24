@extends('admin.adminLayout')

@section('head')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col d-flex justify-content-center">
            <ul>
                <li>
                    <a href="{{ route('adminUser') }}">Data Users</a>
                </li>
                <li>
                    <a href="{{ route('adminService') }}">Data Services</a>
                </li>
                <li>
                    <a href="{{ route('adminOrder') }}">Data Orders</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection