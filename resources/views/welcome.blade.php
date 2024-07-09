<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href={{asset ('css/app.css')}}>
    <link rel="stylesheet" href={{asset ('css/bg_style.css')}}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Housecare Connect</title>
    <!-- Link your custom CSS file for styling -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <div class="welcome-container">
        <h1>WELCOME TO HOUSECARE CONNECT</h1>
        <div class="buttons">
            <a href="{{ route('login') }}" class="btn">Login</a>
            <a href="{{ route('register') }}" class="btn">Register</a>
        </div>
    </div>
</body>
</html>
