{{-- Rose Gold Template - Magic Link Login --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #fff1f2 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 15px 50px rgba(244,63,94,0.12);">
                    <!-- Rose Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #fb7185 0%, #f43f5e 50%, #e11d48 100%); padding: 50px 40px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 500;">💕 Secure Login</h1>
                        </td>
                    </tr>
                    <!-- Rose Accent -->
                    <tr>
                        <td style="height: 3px; background: linear-gradient(90deg, #fda4af, #fecdd3, #fda4af);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: #64748b; font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Beautiful Customer,</p>
                            <p style="color: #64748b; font-size: 16px; line-height: 1.8; margin: 0 0 30px;">You're blooming into {{$name}}! Click below within 5 minutes.</p>
                            <div style="text-align: center; margin: 35px 0;">
                                <a href="{{$link}}" style="display: inline-block; background: linear-gradient(135deg, #fb7185 0%, #f43f5e 100%); color: #ffffff; text-decoration: none; padding: 18px 60px; border-radius: 50px; font-weight: 700; font-size: 18px; box-shadow: 0 10px 30px rgba(244,63,94,0.4);">💫 Login Now</a>
                            </div>
                            <div style="background: #fff1f2; padding: 15px 20px; border-radius: 16px; margin: 25px 0; border: 1px solid #fecdd3;">
                                <p style="color: #be123c; font-size: 12px; margin: 0 0 8px;">Or copy this beautiful link:</p>
                                <p style="color: #f43f5e; font-size: 11px; word-break: break-all; margin: 0;">{{$link}}</p>
                            </div>
                            <p style="color: #a1a1aa; font-size: 14px; text-align: center; margin: 20px 0 0;">Didn't request this? Just ignore it 💝</p>
                        </td>
                    </tr>
                    <!-- Rose Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, #fff1f2 0%, #ffe4e6 100%); padding: 28px 40px; text-align: center;">
                            <p style="margin: 0; color: #be123c; font-size: 13px;">🌸 With love from {{$name}} © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
