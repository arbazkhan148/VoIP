<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Message</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">

    <table width="100%"
        style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">

        <!-- Header -->
        <tr>
            <td style="padding: 20px; text-align: center;">
                <h2 style="color: #333;">New Contact Inquiry</h2>
            </td>
        </tr>

        <!-- Body Content -->
        <tr>
            <td style="padding: 0 20px 20px 20px;">
                <p><strong>First Name:</strong> {{ $contactData['first_name'] }}</p>
                <p><strong>Last Name:</strong> {{ $contactData['last_name'] }}</p>
                <p><strong>Subject:</strong> {{ $contactData['subject'] }}</p>
                <p>{{ $contactData['message'] }}</p>
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
