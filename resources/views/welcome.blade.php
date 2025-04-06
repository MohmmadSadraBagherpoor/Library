@extends('layouts.master')
@auth
    {{ \Illuminate\Support\Facades\Auth::user()->name }}
@endauth
@section('content')
    <h1>Welcome</h1>
@endsection
