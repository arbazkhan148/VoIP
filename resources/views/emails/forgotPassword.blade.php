<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Password Reset Request - Future Next</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <table width="100%"
        style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">

        <!-- Header -->
        <tr>
            <td style="padding: 20px; text-align: center;">
                <h2 style="color: #333;">Password Reset Request</h2>
                <p style="color: #777;">Hello {{ $user->first_name }} {{ $user->last_name }},</p>
            </td>
        </tr>

        <!-- Body Content -->
        <tr>
            <td style="padding: 0 20px 20px 20px;">
                <p style="color: #555;">We received a request to reset your password for your Future Next account.</p>
                <p style="color: #555;">Click the button below to reset your password. If you did not request this,
                    please ignore this email and your password will remain unchanged.</p>

                <!-- CTA Button -->
                <div style="text-align: center; margin: 30px 0;">
                    <a href="{{ $resetLink }}"
                        style="
                          background-color: #4CAF50;
                          color: white;
                          padding: 14px 24px;
                          text-decoration: none;
                          border-radius: 4px;
                          font-weight: bold;
                       ">
                        Reset Password
                    </a>
                </div>

                <p style="color: #999; font-size: 12px;">This link will expire in 60 minutes for your security.</p>
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
