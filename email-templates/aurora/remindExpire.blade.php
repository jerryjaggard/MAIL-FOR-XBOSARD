{{-- Aurora Template - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiry Reminder</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.02) 100%); border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 25px 80px rgba(0,0,0,0.5), 0 0 100px rgba(99,102,241,0.2), 0 0 60px rgba(236,72,153,0.1);">
                    <!-- Aurora Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, rgba(239,68,68,0.3) 0%, rgba(236,72,153,0.3) 50%, rgba(139,92,246,0.3) 100%); padding: 50px 40px; text-align: center;">
                            <div style="font-size: 12px; color: rgba(255,255,255,0.6); letter-spacing: 4px; margin-bottom: 15px;">✧ URGENT NOTICE ✧</div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 600; text-shadow: 0 0 30px rgba(239,68,68,0.8);">⏰ Expiry Reminder</h1>
                        </td>
                    </tr>
                    <!-- Warning Bar -->
                    <tr>
                        <td style="height: 4px; background: linear-gradient(90deg, #ef4444, #ec4899, #8b5cf6, #ec4899, #ef4444);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: rgba(255,255,255,0.85); font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <div style="background: linear-gradient(135deg, rgba(239,68,68,0.2) 0%, rgba(236,72,153,0.2) 100%); border-left: 4px solid #ef4444; padding: 25px; border-radius: 0 16px 16px 0; margin: 25px 0;">
                                <p style="color: #fca5a5; font-size: 18px; font-weight: 600; margin: 0;">
                                    ⚡ The aurora fades in <strong>24 hours</strong>! Renew to keep the lights dancing!
                                </p>
                            </div>
                            <p style="color: rgba(255,255,255,0.6); font-size: 15px; line-height: 1.8; margin: 20px 0 0;">Don't let the magic disappear. Renew your journey under the northern lights.</p>
                            <div style="text-align: center; margin-top: 40px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%); color: #ffffff; text-decoration: none; padding: 18px 55px; border-radius: 14px; font-weight: 600; font-size: 16px; box-shadow: 0 10px 40px rgba(139,92,246,0.5), 0 0 20px rgba(236,72,153,0.3);">✨ Renew Now</a>
                            </div>
                            <p style="color: rgba(255,255,255,0.5); font-size: 14px; text-align: center; margin: 30px 0 0;">Already renewed? Your aurora awaits! 🌌</p>
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
