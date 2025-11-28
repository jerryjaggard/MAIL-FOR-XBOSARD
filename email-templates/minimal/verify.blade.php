{{-- Minimal Simple Template - Email Verification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #ffffff;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 60px 20px;">
                <table role="presentation" style="width: 560px; max-width: 100%; border-collapse: collapse;">
                    <!-- Logo -->
                    <tr>
                        <td style="padding-bottom: 40px; text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #000000;">{{$name}}</div>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; padding: 40px 0;">
                            <h2 style="margin: 0 0 20px; color: #000000; font-size: 20px; font-weight: 600;">Email Verification</h2>
                            <p style="color: #525252; font-size: 15px; line-height: 1.8; margin: 0 0 30px;">Dear Customer,</p>
                            <p style="color: #525252; font-size: 15px; line-height: 1.8; margin: 0 0 30px;">Please use the following code to verify your email address. This code expires in 5 minutes.</p>
                            <div style="text-align: center; margin: 30px 0;">
                                <span style="display: inline-block; background: #000000; color: #ffffff; font-size: 32px; font-weight: bold; letter-spacing: 8px; padding: 20px 40px;">{{$code}}</span>
                            </div>
                            <p style="color: #a3a3a3; font-size: 13px; line-height: 1.8; margin: 30px 0 0;">If you didn't request this code, please ignore this email.</p>
                            <div style="margin-top: 30px;">
                                <a href="{{$url}}" style="display: inline-block; background: #000000; color: #ffffff; text-decoration: none; padding: 12px 32px; font-weight: 500; font-size: 14px;">Visit {{$name}} →</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="padding-top: 30px; text-align: center;">
                            <p style="margin: 0; color: #a3a3a3; font-size: 12px;">{{$name}} • {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
