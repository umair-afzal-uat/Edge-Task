<form id="register-form" method="POST">
    @csrf
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Password">
    <input type="password" name="password_confirmation" required placeholder="Confirm Password">
    <button type="submit">Register</button>
</form>
<script src="{{ asset('js/auth.js') }}"></script>