@extends('layout')

@section('head')
<title>Index Bro</title>
@endsection

@section('content')
<h1>TES INDEX</h1>
<ul>
    <li>
        <a href="{{ route('landing') }}">Landing Page</a>
    </li>
    <li>
        <a href="{{ route('login') }}">Login</a>
    </li>
    <li>
        <a href="{{ route('cekResi') }}">Cek Resi</a>
    </li>
</ul>
@endsection