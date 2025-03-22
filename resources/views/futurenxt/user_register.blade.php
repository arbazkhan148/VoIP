{{-- @extends('layouts.futurenxt')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Next</title>
     <link rel="shortcut icon" href="{{asset('images/favicon.jpg')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('images/styles.css')}}">
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
            animation: backgroundAnimation 10s infinite alternate;
        }

        @keyframes backgroundAnimation {
            0% { background: linear-gradient(135deg, #f3f8ff, #e1effe); }
            50% { background: linear-gradient(135deg, #e6f7ff, #e0f2ff); }
            100% { background: linear-gradient(135deg, #e1effe, #d0ecff); }
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

        .registration-field input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .register-button, .home-button {
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

        .register-button:hover, .home-button:hover {
            background: #002147;
            transform: scale(1.05);
        }

        .login-redirect {
            margin-top: 15px;
            font-size: 14px;
        }

        .login-redirect a {
            color: #004080;
            text-decoration: none;
            font-weight: bold;
        }

        .login-redirect a:hover {
            color: #002147;
            text-decoration: underline;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="registration-wrapper">
        <h2 class="registration-header">User Register</h2>
        <form  action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="registration-field">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="registration-field">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="registration-field">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="registration-field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="registration-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="registration-field">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" class="register-button">Register</button>
            <button type="button" class="home-button" onclick="location.href='index.html'">Go to Home</button>
        </form>
        <p class="login-redirect">Already have an account? <a href="userlogin.html">Login</a></p>
    </div>
    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            event.preventDefault();
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirm-password").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
            } else {

                var form = $("#registrationForm");
                var actionUrl = form.attr('action');
                console.log(form);
                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data)
                    {
                        if(data==0){
                            alert("Already registered!");
                        }else{
                            alert("Registration successful!");
                        }
                        location.href='userlogin';
                    }
                });


            }
        });
    </script>
</body>
</html>
{{-- @endsection --}}


