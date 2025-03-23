<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to Future Next!</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">

    <table width="100%" style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <tr>
            <td style="padding: 20px; text-align: center;">
                <h2 style="color: #333;">Welcome to <span style="color: #4CAF50;">Future Next</span>, {{ $consumer->first_name }}!</h2>
                <p style="color: #555;">Your account has been successfully created.</p>

                <p style="color: #555;">You can now log in and start exploring your dashboard, buy plans, and enjoy our services.</p>

                <!-- CTA Button -->
                <a href="{{ url('consumer/login') }}"
                   style="
                      background-color: #4CAF50;
                      color: white;
                      padding: 12px 24px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      border-radius: 4px;
                      font-weight: bold;
                      margin-top: 20px;
                      display: inline-block;
                   ">
                   Login to Your Account
                </a>

                <p style="color: #999; font-size: 12px; margin-top: 30px;">If you did not register on Future Next, please ignore this email.</p>
            </td>
        </tr>

        <tr>
            <td style="text-align: center; padding: 10px; font-size: 12px; color: #aaa;">
                &copy; {{ date('Y') }} Future Next. All rights reserved.
            </td>
        </tr>
    </table>

</body>
</html>
