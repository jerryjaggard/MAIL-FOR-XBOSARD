{{-- Aurora Template - Magic Link Login --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.02) 100%); border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 25px 80px rgba(0,0,0,0.5), 0 0 100px rgba(99,102,241,0.2), 0 0 60px rgba(236,72,153,0.1);">
                    <!-- Aurora Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, rgba(99,102,241,0.3) 0%, rgba(139,92,246,0.3) 25%, rgba(236,72,153,0.3) 50%, rgba(34,211,238,0.3) 75%, rgba(16,185,129,0.3) 100%); padding: 50px 40px; text-align: center;">
                            <div style="font-size: 12px; color: rgba(255,255,255,0.6); letter-spacing: 4px; margin-bottom: 15px;">✧ AURORA BOREALIS ✧</div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 600; text-shadow: 0 0 30px rgba(139,92,246,0.8);">🔐 Secure Login</h1>
                        </td>
                    </tr>
                    <!-- Animated Aurora Bar -->
                    <tr>
                        <td style="height: 4px; background: linear-gradient(90deg, #6366f1, #8b5cf6, #ec4899, #22d3ee, #10b981, #6366f1);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: rgba(255,255,255,0.85); font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <p style="color: rgba(255,255,255,0.7); font-size: 16px; line-height: 1.8; margin: 0 0 30px;">The northern lights guide you to {{$name}}. Click below within 5 minutes!</p>
                            <div style="text-align: center; margin: 40px 0;">
                                <a href="{{$link}}" style="display: inline-block; background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%); color: #ffffff; text-decoration: none; padding: 22px 70px; border-radius: 16px; font-weight: 700; font-size: 20px; box-shadow: 0 15px 50px rgba(139,92,246,0.6), 0 0 30px rgba(236,72,153,0.4);">✨ Enter Portal</a>
                            </div>
                            <div style="background: rgba(255,255,255,0.05); padding: 20px; border-radius: 16px; margin: 30px 0; border: 1px solid rgba(255,255,255,0.1);">
                                <p style="color: rgba(255,255,255,0.5); font-size: 12px; margin: 0 0 10px;">Or follow this starlight path:</p>
                                <p style="color: #8b5cf6; font-size: 11px; word-break: break-all; margin: 0;">{{$link}}</p>
                            </div>
                            <p style="color: rgba(255,255,255,0.5); font-size: 14px; text-align: center; margin: 25px 0 0;">Not you? Let the lights pass ✨</p>
                        </td>
                    </tr>
                    <!-- Aurora Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, rgba(99,102,241,0.1) 0%, rgba(16,185,129,0.1) 100%); padding: 30px 40px; text-align: center; border-top: 1px solid rgba(255,255,255,0.1);">
                            <p style="margin: 0; color: rgba(255,255,255,0.5); font-size: 13px;">✧ {{$name}} • Dancing Lights © {{ date('Y') }} ✧</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
