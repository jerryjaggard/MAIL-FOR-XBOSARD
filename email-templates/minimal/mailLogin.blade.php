{{-- Minimal Simple Template - Magic Link Login --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to {{$name}}</title>
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
                            <h2 style="margin: 0 0 20px; color: #000000; font-size: 20px; font-weight: 600;">Secure Login</h2>
                            <p style="color: #525252; font-size: 15px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <p style="color: #525252; font-size: 15px; line-height: 1.8; margin: 0 0 30px;">You are attempting to log in to {{$name}}. Click the button below within 5 minutes to complete your login.</p>
                            <div style="margin: 30px 0;">
                                <a href="{{$link}}" style="display: inline-block; background: #000000; color: #ffffff; text-decoration: none; padding: 16px 40px; font-weight: 600; font-size: 16px;">Login Now →</a>
                            </div>
                            <p style="color: #a3a3a3; font-size: 12px; line-height: 1.6; margin: 30px 0 0;">Or copy this link:</p>
                            <p style="color: #525252; font-size: 11px; word-break: break-all; background: #f5f5f5; padding: 12px; margin: 10px 0 0;">{{$link}}</p>
                            <p style="color: #a3a3a3; font-size: 13px; line-height: 1.8; margin: 20px 0 0;">If you did not authorize this request, please ignore this email.</p>
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
