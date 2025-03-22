<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoIP Cloud Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #aad4ff, #f0f8ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
            background-size: 400% 400%;
            animation: gradientAnimation 10s infinite alternate ease-in-out;
        }

        @keyframes gradientAnimation {
            0% {
                background: linear-gradient(135deg, #aad4ff, #f0f8ff);
            }
            50% {
                background: linear-gradient(135deg, #cce5ff, #ffffff);
            }
            100% {
                background: linear-gradient(135deg, #aad4ff, #f0f8ff);
            }
        }

        .login-wrapper {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            animation: slideIn 0.8s ease-in-out;
        }

        .login-header {
            font-size: 24px;
            font-weight: 600;
            color: #004080;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-in-out;
        }

        .login-field {
            margin-bottom: 15px;
            text-align: left;
            animation: fadeInUp 0.8s ease-in-out;
        }

        .login-field label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            font-weight: bold;
            color: #004080;
        }

        .login-field input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }

        .login-field input:focus {
            border-color: #004080;
            box-shadow: 0px 0px 8px rgba(0, 64, 128, 0.4);
            outline: none;
        }

        .login-button {
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
        }

        .login-button:hover {
            background: #002147;
            transform: scale(1.05);
        }

        .register-redirect {
            margin-top: 15px;
            font-size: 14px;
        }

        .register-redirect a {
            color: #004080;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .register-redirect a:hover {
            color: #002147;
            text-decoration: underline;
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

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <h2 class="login-header">User Login</h2>
        <form id="loginForm">
            <div class="login-field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="login-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
        <p class="register-redirect">Don't have an account? <a href="userreg.html">Register</a></p>
    </div>
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            event.preventDefault();
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;

            if (email === "" || password === "") {
                alert("Please fill in all fields.");
            } else {
                alert("Login successful!");
            }
        });
    </script>
</body>
</html>
