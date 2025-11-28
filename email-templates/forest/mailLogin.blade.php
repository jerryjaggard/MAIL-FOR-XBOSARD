{{-- Forest Green Template - Magic Link Login --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #ecfdf5 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 12px 40px rgba(16,185,129,0.12);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); padding: 45px 40px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 600;">🔐 Secure Login</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #374151; font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <p style="color: #374151; font-size: 16px; line-height: 1.8; margin: 0 0 30px;">You're logging in to {{$name}}. Click below within 5 minutes.</p>
                            <div style="text-align: center; margin: 35px 0;">
                                <a href="{{$link}}" style="display: inline-block; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; text-decoration: none; padding: 18px 55px; border-radius: 14px; font-weight: 700; font-size: 18px; box-shadow: 0 8px 25px rgba(16,185,129,0.4);">🚀 Login Now</a>
                            </div>
                            <div style="background: #f0fdf4; padding: 15px 20px; border-radius: 12px; margin: 25px 0; border: 1px solid #86efac;">
                                <p style="color: #166534; font-size: 12px; margin: 0 0 8px;">Or copy this link:</p>
                                <p style="color: #059669; font-size: 11px; word-break: break-all; margin: 0;">{{$link}}</p>
                            </div>
                            <p style="color: #9ca3af; font-size: 14px; text-align: center; margin: 20px 0 0;">Didn't request this? Just ignore it.</p>
                        </td>
                    </tr>
                    <!-- Nature Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, #f0fdf4 0%, #dcfce7 100%); padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #166534; font-size: 13px;">🍃 {{$name}} • Eco-friendly © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
