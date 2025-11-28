{{-- Ocean Blue Template - Magic Link Login --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #e0f2fe 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(14,165,233,0.15);">
                    <!-- Wave Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); padding: 50px 40px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 600;">🔐 Secure Login</h1>
                            <p style="margin: 10px 0 0; color: #bae6fd; font-size: 14px;">One-click authentication</p>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #475569; font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <p style="color: #475569; font-size: 16px; line-height: 1.8; margin: 0 0 30px;">You're attempting to log in to {{$name}}. Click the button below within 5 minutes to continue.</p>
                            <div style="text-align: center; margin: 35px 0;">
                                <a href="{{$link}}" style="display: inline-block; background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: #ffffff; text-decoration: none; padding: 18px 55px; border-radius: 14px; font-weight: 700; font-size: 18px; box-shadow: 0 8px 25px rgba(14,165,233,0.4);">🚀 Login Now</a>
                            </div>
                            <div style="background: #f0f9ff; padding: 15px 20px; border-radius: 12px; margin: 25px 0; border: 1px solid #bae6fd;">
                                <p style="color: #64748b; font-size: 12px; margin: 0 0 8px;">Or copy this link:</p>
                                <p style="color: #0284c7; font-size: 11px; word-break: break-all; margin: 0;">{{$link}}</p>
                            </div>
                            <p style="color: #94a3b8; font-size: 14px; text-align: center; margin: 20px 0 0;">Didn't request this? Just ignore it.</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #f0f9ff; padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #64748b; font-size: 13px;">🌊 {{$name}} • {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
