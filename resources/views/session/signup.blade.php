@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @if ($message = Session::get('success1'))
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>
        @endif

        @if ($message = Session::get('Error1'))
        <div class="alert alert-danger" role="alert">
          {{ $message }}
        </div>
        @endif
        <div class="col-md-4">
            <div class="banner-side" id="sidebar">
                <h2>Sign In</h2>
                <form action="/session/create" method="POST">
                    @csrf
                    <label>Username</label>
                    <input type="text" name="name">
                    <br>
                    <label for="">Email</label>
                    <br>
                    <input type="email" name="email">
                    <label>Password</label>
                    <input type="password"  name="password">
                    <br>
                    <button type="submit">Sign In</button>
                    <hr>
                    <p>Have an account?</p>
                    <h3>Log In</h3>
                    <a class="a-login" href="{{ url('/session') }}">Log In</a>
                </form>

                
            </div>
        </div>
        <div class="col-md-12">
            <h2 class="title">Welcome</h2>
            <p class="title-2">Login Dashboard</p>
            <p class="title-2">Absensi Siswa</p>
            <div class="box-login">
                <a class="a-login-1" href="{{ url('/session') }}">Log In</a>
                <a class="a-login-1" href="{{ url('/session/signup') }}">Sign Up</a>
            </div>
        </div>
    </div>
</div>
@endsection