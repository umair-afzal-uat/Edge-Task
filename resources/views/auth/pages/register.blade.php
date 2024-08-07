@extends('auth.layouts')

@section('title', 'Register')

@section('content')
<div class="wrapper">
    <div class="login-form">
        <div class="form-header">Register</div>
        <div class="form-content">
            <form id="register-form" method="POST">
                @csrf
                <input type="email" name="email" required placeholder="Email">
                <input type="password" name="password" required placeholder="Password">
                <input type="password" name="password_confirmation" required placeholder="Confirm Password">
                <button type="submit">Register</button>
            </form>
            <a href="/login">Log In</a>
        </div>
    </div>
</div>
@endsection