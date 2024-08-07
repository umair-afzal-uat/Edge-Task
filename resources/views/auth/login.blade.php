<form id="login-form" method="POST">
    @csrf
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Password">
    <button type="submit">Login</button>
</form>
<script src="{{ asset('js/auth.js') }}"></script>