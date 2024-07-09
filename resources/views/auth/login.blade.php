<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Housecare Connect</title>
    <style>
        body {
    background-color: #8e9eab;
    background-image: radial-gradient(circle, #ff8a00, #e52d27, #5f72be, #00b5c0, #00b5c0);
    background-size: 400% 400%;
    animation: gradientAnimation 15s linear infinite;
    min-height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
}

@keyframes gradientAnimation {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 100% 50%;
    }
}

.container {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-box {
    width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.login-switch {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.switch-btn {
    padding: 10px 20px;
    background-color: #00b5c0;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.switch-btn.active {
    background-color: #5f72be;
}

.login-form {
    display: none;
}

.login-form.active {
    display: block;
}

.login-form h2 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    color: #333;
}

.login-form form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.login-form input[type="email"],
.login-form input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn {
    padding: 12px 24px;
    background-color: #00b5c0;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.btn:hover {
    background-color: #5f72be;
}

.btn:active {
    background-color: #8f94fb;
}

.register-link {
    margin-top: 20px;
    text-align: center;
    color: #666;
}

.register-link a {
    color: #00b5c0;
    text-decoration: none;
    transition: color 0.3s;
}

.register-link a:hover {
    color: #5f72be;
}

.admin-login-link {
    position: absolute;
    bottom: 10px;
    left: 10px;
    text-align: center;
    color: #666;
}

.admin-login-link a {
    color: #00b5c0;
    text-decoration: none;
    transition: color 0.3s;
}

.admin-login-link a:hover {
    color: #5f72be;
}
    </style>
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
