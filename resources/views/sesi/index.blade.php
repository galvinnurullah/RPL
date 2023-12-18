@extends('layout/aplikasi')

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <center><h1>Login</h1></center>
        <center><img src="assets/img/favicon.jpg" alt="" weight="150px" height="150px"></center>
        <form action="/sesi/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email')}}"name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        <center><p> Don't have account? <a href="/sesi/register"> Register Here </a></p></center>
    </div>

@endsection