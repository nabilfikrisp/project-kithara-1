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
        <a href="">Landing Page 2</a>
    </li>
</ul>
@endsection