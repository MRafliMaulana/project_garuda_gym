<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="/css/styleLogin.css">
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        @if($errors->any())
            <p style="color: red;">{{ $errors->first() }}</p>
        @endif
        <form action="{{ route('login.authenticate') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>

        </form>
        <a href="{{ route('register') }}">Belum Punya Akun?</a>
    </div>
    
</body>
</html>
