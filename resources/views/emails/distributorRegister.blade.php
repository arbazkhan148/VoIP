<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to Future Next - Distributor Registration Successful</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <table width="100%"
        style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">

        <!-- Header -->
        <tr>
            <td style="padding: 20px; text-align: center;">
                <h2 style="color: #333;">Welcome to <span style="color: #4CAF50;">Future Next</span>!</h2>
                <p style="color: #777;">Hello {{ $distributor->first_name }} {{ $distributor->last_name }},</p>
                <p style="color: #555;">Congratulations! Your distributor account has been successfully registered with
                    Future Next.</p>
            </td>
        </tr>

        <!-- Body Content -->
        <tr>
            <td style="padding: 0 20px 20px 20px;">
                <p style="color: #555;">You can now log in to your distributor dashboard to manage your profile, track
                    your team, and more!</p>
                <p style="color: #555;">If you need any assistance, our support team is always here to help you.</p>

                <!-- CTA Buttons Section -->
                <div style="text-align: center; margin-top: 30px;">
                    <!-- Login Button -->
                    <a href="{{ url('distributor/login') }}"
                        style="
                          background-color: #4CAF50;
                          color: white;
                          padding: 12px 24px;
                          text-decoration: none;
                          border-radius: 4px;
                          font-weight: bold;
                          margin-right: 10px;
                       ">
                        Login to Dashboard
                    </a>

                    <!-- Contact Support Button -->
                    <a href="{{ url('distributor/contact-support') }}"
                        style="
                          background-color: #007BFF;
                          color: white;
                          padding: 12px 24px;
                          text-decoration: none;
                          border-radius: 4px;
                          font-weight: bold;
                          margin-left: 10px;
                       ">
                        Contact Support
                    </a>
                </div>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="text-align: center; padding: 20px; font-size: 12px; color: #aaa;">
                &copy; {{ date('Y') }} Future Next. All rights reserved.
            </td>
        </tr>
    </table>

</body>

</html>
