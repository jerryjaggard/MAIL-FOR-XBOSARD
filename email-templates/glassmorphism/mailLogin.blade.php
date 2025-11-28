{{-- Glassmorphism Template - Magic Link Login --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #f5576c 75%, #4facfe 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.25); border-radius: 30px; overflow: hidden; border: 1px solid rgba(255,255,255,0.3); box-shadow: 0 25px 45px rgba(0,0,0,0.1);">
                    <!-- Glass Header -->
                    <tr>
                        <td style="background: rgba(255,255,255,0.2); padding: 50px 40px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.2);">
                            <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.3); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 32px rgba(0,0,0,0.1);">
                                <span style="font-size: 40px;">🔐</span>
                            </div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 600; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">Secure Login</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: rgba(255,255,255,0.9); font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <p style="color: rgba(255,255,255,0.8); font-size: 16px; line-height: 1.8; margin: 0 0 30px;">Step through the glass portal to {{$name}}. This window closes in 5 minutes!</p>
                            <div style="text-align: center; margin: 40px 0;">
                                <a href="{{$link}}" style="display: inline-block; background: rgba(255,255,255,0.4); color: #ffffff; text-decoration: none; padding: 22px 70px; border-radius: 50px; font-weight: 700; font-size: 20px; border: 1px solid rgba(255,255,255,0.5); box-shadow: 0 12px 40px rgba(0,0,0,0.15); text-shadow: 0 2px 4px rgba(0,0,0,0.1);">✨ Enter Portal</a>
                            </div>
                            <div style="background: rgba(255,255,255,0.15); padding: 20px; border-radius: 16px; margin: 30px 0; border: 1px solid rgba(255,255,255,0.2);">
                                <p style="color: rgba(255,255,255,0.7); font-size: 12px; margin: 0 0 10px;">Or copy this crystal link:</p>
                                <p style="color: rgba(255,255,255,0.9); font-size: 11px; word-break: break-all; margin: 0;">{{$link}}</p>
                            </div>
                            <p style="color: rgba(255,255,255,0.6); font-size: 14px; text-align: center; margin: 25px 0 0;">Not you? Let it melt away 🌟</p>
                        </td>
                    </tr>
                    <!-- Glass Footer -->
                    <tr>
                        <td style="background: rgba(255,255,255,0.15); padding: 30px 40px; text-align: center; border-top: 1px solid rgba(255,255,255,0.2);">
                            <p style="margin: 0; color: rgba(255,255,255,0.7); font-size: 13px;">✨ {{$name}} • Crystal Clear © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
