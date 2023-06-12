@extends("layouts.app")

@section('content')
<div class="container-fluid">
    <h1 class="h1">Welcome To Absensi Siswa Muhammadiyah 1 Sukoharjo</h1>
    <div class="box-login">
        <a class="a-login" href="{{ url('session') }}">Log In</a>
        <a class="a-login-1" href="{{ url('session/signup') }}">Sign Up</a>
    </div>
</div>
@endsection