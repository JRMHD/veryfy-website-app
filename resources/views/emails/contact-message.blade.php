<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Contact Message - Expert Wager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .email-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .header {
            background-color: #073F62;
            color: white;
            text-align: center;
            padding: 15px;
            border-radius: 8px 8px 0 0;
        }

        .content {
            padding: 20px;
        }

        .label {
            color: #00A550;
            font-weight: bold;
        }

        .message {
            background-color: #f9f9f9;
            border-left: 4px solid #00A550;
            padding: 15px;
            margin: 15px 0;
        }

        .footer {
            text-align: center;
            color: #666;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h2>New Contact Message</h2>
        </div>
        <div class="content">
            <p>Hello Expert Wager,</p>
            <p>You have received a new message from your website:</p>

            <div class="message">
                <p><span class="label">Name:</span> {{ $details['name'] }}</p>
                <p><span class="label">Email:</span> {{ $details['email'] }}</p>
                @if (!empty($details['phone']))
                    <p><span class="label">Phone:</span> {{ $details['phone'] }}</p>
                @endif
                <p><span class="label">Message:</span></p>
                <p>{{ $details['message'] }}</p>
            </div>

            <p>Best regards,<br>Your Website</p>
        </div>
        <div class="footer">
            © Expert Wager | Transforming Challenges into Opportunities
        </div>
    </div>
</body>

</html>
