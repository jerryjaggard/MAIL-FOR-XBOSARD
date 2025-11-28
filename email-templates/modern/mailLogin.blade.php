{{-- Modern Clean Template - Magic Link Login --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to {{$name}}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f7;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 40px 0;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px 40px 30px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 24px; font-weight: 600;">🔐 Secure Login</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #4a5568; font-size: 16px; line-height: 1.7; margin: 0 0 20px;">Dear Customer,</p>
                            <p style="color: #4a5568; font-size: 16px; line-height: 1.7; margin: 0 0 30px;">You are attempting to log in to {{$name}}. Please click the button below within 5 minutes to complete your login. If you did not authorize this login request, please ignore this email.</p>
                            <div style="text-align: center; margin: 30px 0;">
                                <a href="{{$link}}" style="display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #ffffff; text-decoration: none; padding: 18px 50px; border-radius: 10px; font-weight: 600; font-size: 18px; box-shadow: 0 4px 15px rgba(102,126,234,0.4);">🚀 Login Now</a>
                            </div>
                            <p style="color: #718096; font-size: 14px; line-height: 1.7; margin: 30px 0 0;">Or copy and paste this link into your browser:</p>
                            <p style="color: #667eea; font-size: 12px; word-break: break-all; background: #f7fafc; padding: 15px; border-radius: 8px; margin: 10px 0 0;">{{$link}}</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #f8fafc; padding: 25px 40px; text-align: center; border-top: 1px solid #e2e8f0;">
                            <p style="margin: 0; color: #a0aec0; font-size: 13px;">© {{ date('Y') }} {{$name}}. All rights reserved.</p>
                            <p style="margin: 10px 0 0; color: #a0aec0; font-size: 12px;">This is an automated message, please do not reply directly.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
