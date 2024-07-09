<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Housecare Connect</title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Housecare Connect</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">
    <div class="login-box">
        <div class="login-switch">
            <button class="switch-btn active" data-type="customer">Login as Customer</button>
            <button class="switch-btn" data-type="provider">Login as Service Provider</button>
        </div>
        <div id="customer-login" class="login-form active">
            <h2>Login as Customer</h2>
            <form action="{{ route('customer.login.submit') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="password" name="password" placeholder="Your Password" required>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        <div id="provider-login" class="login-form">
            <h2>Login as Service Provider</h2>
            <form action="{{ route('provider.login.submit') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="password" name="password" placeholder="Your Password" required>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Register for free!</a></p>
        </div>
    </div>
</div>

<div class="admin-login-link">
    <p>Admin? <a href="{{ route('admin.login') }}">Admin Login</a></p>
</div>

</body>
</html>

</head>
<body>

<div class="container">
    <div class="login-box">
        <div class="login-switch">
            <button class="switch-btn active" data-type="customer">Login as Customer</button>
            <button class="switch-btn" data-type="provider">Login as Service Provider</button>
        </div>
        <div id="customer-login" class="login-form active">
            <h2>Login as Customer</h2>
            <form action="{{ route('customer.login.submit') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="password" name="password" placeholder="Your Password" required>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        <div id="provider-login" class="login-form">
            <h2>Login as Service Provider</h2>
            <form action="{{ route('provider.login.submit') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="password" name="password" placeholder="Your Password" required>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
        <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}">Register for free!</a></p>
        </div>
    </div>
</div>

<div class="admin-login-link">
    <p>Admin? <a href="{{ route('admin.login') }}">Admin Login</a></p>
</div>

</body>
</html>
