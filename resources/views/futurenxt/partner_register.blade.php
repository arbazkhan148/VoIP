<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Registration</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3f8ff, #e1effe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
            animation: backgroundAnimation 10s infinite alternate;
        }

        @keyframes backgroundAnimation {
            0% {
                background: linear-gradient(135deg, #f3f8ff, #e1effe);
            }

            50% {
                background: linear-gradient(135deg, #e6f7ff, #e0f2ff);
            }

            100% {
                background: linear-gradient(135deg, #e1effe, #d0ecff);
            }
        }

        .registration-wrapper {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
            animation: slideIn 0.8s ease-in-out;
        }

        .registration-header {
            font-size: 24px;
            font-weight: 600;
            color: #004080;
            margin-bottom: 20px;
        }

        .registration-field {
            margin-bottom: 15px;
            text-align: left;
        }

        .registration-field label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
            color: #004080;
        }

        .registration-field input,
        .registration-field select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }

        .registration-field input:focus,
        .registration-field select:focus {
            border-color: #004080;
            box-shadow: 0px 0px 8px rgba(0, 64, 128, 0.4);
            outline: none;
        }

        .register-button,
        .home-button {
            background: #004080;
            color: #ffffff;
            padding: 12px;
            border: none;
            border-radius: 6px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
            margin-top: 10px;
        }

        .register-button:hover,
        .home-button:hover {
            background: #002147;
            transform: scale(1.05);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="registration-wrapper">
        <h2 class="registration-header">Partner Registration</h2>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form method="POST" action="{{ url('distributor/registerPost') }}">
            @csrf
            <div class="registration-field">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name">
                @error('first_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="registration-field">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name">
                @error('last_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="registration-field">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="registration-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="registration-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="registration-field">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password">
                @error('confirm-password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="register-button">Register</button>
        </form>
        <button onclick="location.href='{{ url('/') }}'" class="home-button">Go to Home</button>
        <p>Already have an account? <a href="{{ url('distributor/login') }}">Login</a></p>
    </div>

</body>

</html>
