<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reset style */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, rgba(17, 203, 250, 0.879), rgba(6, 67, 221, 0.967)), 
                        url('public/Up/assets/img/img-01.jpg') no-repeat center center / cover;
            color: #fff;
        }

        .login-container {
            background: rgba(255, 255, 255, 0);
            padding: 30px;
            padding-top: 11%;
            border-radius: 10px;
            width: 30%;
            text-align: center;
        }

        .login-container img {
            width: 125px;
            margin-bottom: -1rem;
        }

        h2 {
            margin-top: 0;
            font-weight: 800;
            margin-bottom: 30px;
            font-size: 24px;
            color: #ffffff;
        }

        .input-group {
            position: relative;
            margin-bottom: 10px;
        }

        .input-group input {
            width: 100%;
            padding: 16px 10px 16px 40px;
            border-radius: 25px;
            border: 1px solid #ddd;
            outline: none;
            font-weight: 800;
        }

        .input-group .icon {
            position: absolute;
            top: 17px;
            left: 20px;
            color: #666;
        }

        .login-button {
            display: block;
            width: 100%;
            padding: 20px;
            background-color: #333;
            border: none;
            border-radius: 25px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background: linear-gradient(to left, rgba(17, 203, 250, 0.879), rgba(6, 67, 221, 0.967))
        }
    </style>
</head>
<body>

<div class="login-container">
    <img src="{{ url('public/focus/images/logo.png') }}" alt="Logo">
    <h2>Login Admin</h2>
    <form action="{{ url('login') }}" method="POST">
        @csrf
        <div class="input-group">
            <i class="fas fa-user icon"></i>
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
            <i class="fas fa-lock icon"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="login-button">Login</button>
    </form>
</div>

</body>
</html>
