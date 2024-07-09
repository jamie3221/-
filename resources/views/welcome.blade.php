<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Housecare Connect</title>
    <!-- Link your custom CSS file for styling -->
    <style>
        /* styles.css */

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
    font-family: 'Roboto', Arial, sans-serif; /* Use a more fitting font */
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

.welcome-container {
    text-align: center;
    padding-top: 20%;
    color: #fff;
}

.buttons {
    margin-top: 30px;
    display: flex;
    justify-content: center;
}

.btn {
    display: inline-block;
    padding: 15px 30px; /* Increased button padding */
    margin: 0 10px;
    background-color: #4e54c8;
    color: #fff;
    text-decoration: none;
    font-size: 1.2rem; /* Increased font size */
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.btn:hover {
    background-color: #8f94fb;
    color: #fff;
}

.btn:active {
    background-color: #bdc4ff;
}

.container h1 {
    font-size: 3rem; /* Increased heading font size */
    color: #333;
}

.container p {
    font-size: 1.4rem; /* Increased paragraph font size */
    line-height: 1.6;
    color: #666;
}

    </style>
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
