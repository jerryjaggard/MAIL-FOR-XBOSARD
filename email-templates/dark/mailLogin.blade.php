{{-- Dark Mode Template - Magic Link Login --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #0f0f0f;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #1a1a2e; border-radius: 16px; overflow: hidden; border: 1px solid #2d2d44;">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 40px 25px; text-align: center; border-bottom: 1px solid #2d2d44;">
                            <h1 style="margin: 0; color: #a855f7; font-size: 24px; font-weight: 600;">🔐 Secure Login</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #d1d5db; font-size: 15px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <p style="color: #d1d5db; font-size: 15px; line-height: 1.8; margin: 0 0 30px;">You are attempting to log in to {{$name}}. Click the button below within 5 minutes to complete your secure login.</p>
                            <div style="text-align: center; margin: 35px 0;">
                                <a href="{{$link}}" style="display: inline-block; background: linear-gradient(135deg, #a855f7 0%, #6366f1 100%); color: #ffffff; text-decoration: none; padding: 18px 55px; border-radius: 12px; font-weight: 700; font-size: 18px; box-shadow: 0 0 30px rgba(168,85,247,0.4);">🚀 Login Now</a>
                            </div>
                            <div style="background: #16162a; padding: 15px 20px; border-radius: 10px; margin: 25px 0; border: 1px solid #2d2d44;">
                                <p style="color: #9ca3af; font-size: 12px; margin: 0 0 8px;">Or copy this link:</p>
                                <p style="color: #a855f7; font-size: 11px; word-break: break-all; margin: 0;">{{$link}}</p>
                            </div>
                            <p style="color: #6b7280; font-size: 14px; line-height: 1.7; margin: 20px 0 0; text-align: center;">If you didn't request this login, please ignore this email.</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #16162a; padding: 25px 40px; text-align: center; border-top: 1px solid #2d2d44;">
                            <p style="margin: 0; color: #6b7280; font-size: 13px;">© {{ date('Y') }} {{$name}} • Dark Mode</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
