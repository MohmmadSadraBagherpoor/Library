@extends('layouts.master')
@auth
    {{ \Illuminate\Support\Facades\Auth::user()->name }}
    <a href="{{ route('members.show', Auth::user()->id) }}">User Panel</a>
@endauth
@guest
    <a href="{{ route('register.form') }}">Register</a>
    <a href="{{ route('login.form') }}">Login</a>
@endguest
@section('content')
    <h1>Welcome</h1>
@endsection
