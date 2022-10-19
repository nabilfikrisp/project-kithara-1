@extends('layout')

@section('head')
    <title>Index Bro</title>
@endsection

@section('content')
    <h1>TES INDEX</h1>
    @if (Auth::user())
        <p>Hi {{ Auth::user()->name }}, welcome back!</p>
    @endif
    <ul>
        <li>
            <a href="{{ route('landing') }}">Landing Page</a>
        </li>
        @guest
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
        @endauth
        @if (Auth::user())
            <li>
                <a href="{{ route('logout') }}">Logout</a>
            </li>
        @endif
        <li>
            <a href="{{ route('cekResi') }}">Cek Resi</a>
        </li>
    </ul>
@endsection
