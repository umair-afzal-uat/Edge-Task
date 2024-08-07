@extends('auth.layouts')

@section('title', 'Login')

@section('content')
<div class="wrapper">
    <div class="login-form">
        <div class="form-header">Login</div>
        <div class="form-content">
            <form id="login-form" method="POST">
                @csrf
                <input type="email" name="email" required placeholder="Email">
                <input type="password" name="password" required placeholder="Password">
                <button type="submit">Login</button>
            </form>
            <a href="/register">Register</a>
        </div>
    </div>
</div>
@endsection