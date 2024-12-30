<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="/css/styleLogin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <div class="login-container">
        <h1>Log into my account</h1>
        @if($errors->any())
            <p style="color: red;">{{ $errors->first() }}</p>
        @endif
        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>

        </form>
        <a href="{{ route('register') }}">Don't have an account?</a> | <a href="{{ route('password.request') }}">Forgot password?</a>
        <p><a href="#">Log in with SSO</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
</body>
</html>
