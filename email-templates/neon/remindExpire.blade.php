{{-- Neon Cyberpunk Template - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiry</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Courier New', Consolas, monospace; background: #0a0a0a; min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: linear-gradient(180deg, #0f0f0f 0%, #1a1a1a 100%); border-radius: 4px; overflow: hidden; border: 2px solid #ff3333; box-shadow: 0 0 30px rgba(255,51,51,0.3), 0 0 60px rgba(255,51,51,0.1), inset 0 0 30px rgba(255,51,51,0.05);">
                    <!-- Neon Header -->
                    <tr>
                        <td style="background: linear-gradient(90deg, rgba(255,51,51,0.2) 0%, rgba(255,0,255,0.1) 50%, rgba(255,51,51,0.2) 100%); padding: 40px; text-align: center; border-bottom: 2px solid #ff3333;">
                            <div style="font-size: 11px; color: #ff3333; letter-spacing: 6px; margin-bottom: 15px; font-family: 'Courier New', monospace;">[ CRITICAL.ALERT ]</div>
                            <h1 style="margin: 0; color: #ff3333; font-size: 28px; font-weight: 400; text-shadow: 0 0 10px #ff3333, 0 0 20px #ff3333, 0 0 40px #ff3333;">⚠ EXPIRY_WARNING</h1>
                        </td>
                    </tr>
                    <!-- Warning Line -->
                    <tr>
                        <td style="height: 3px; background: linear-gradient(90deg, transparent, #ff3333, #ff00ff, #ff3333, transparent);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: #ff3333; font-size: 14px; line-height: 1.8; margin: 0 0 20px; font-family: 'Courier New', monospace;">&gt; ALERT, USER_</p>
                            <div style="background: rgba(255,51,51,0.1); padding: 25px; margin: 25px 0; border-left: 4px solid #ff3333;">
                                <p style="color: #ff6666; font-size: 16px; margin: 0; font-family: 'Courier New', monospace;">
                                    &gt; WARNING: SUBSCRIPTION_EXPIRES_IN: <span style="color: #ff3333; text-shadow: 0 0 10px #ff3333;">24_HOURS</span><br>
                                    &gt; ACTION_REQUIRED: RENEW_NOW
                                </p>
                            </div>
                            <p style="color: #888888; font-size: 14px; line-height: 1.8; margin: 20px 0 0;">&gt; SYSTEM_OFFLINE IMMINENT<br>&gt; RENEW TO MAINTAIN_ACCESS</p>
                            <div style="text-align: center; margin-top: 40px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(90deg, rgba(255,51,51,0.3), rgba(255,0,255,0.2)); color: #ff3333; text-decoration: none; padding: 18px 55px; border: 2px solid #ff3333; font-weight: 400; font-size: 14px; letter-spacing: 3px; font-family: 'Courier New', monospace; text-shadow: 0 0 10px #ff3333; box-shadow: 0 0 25px rgba(255,51,51,0.4);">[ RENEW_SYSTEM ]</a>
                            </div>
                            <p style="color: #666666; font-size: 12px; text-align: center; margin: 30px 0 0;">&gt; ALREADY_RENEWED? STATUS: ACTIVE ✓</p>
                        </td>
                    </tr>
                    <!-- Neon Footer -->
                    <tr>
                        <td style="background: rgba(255,51,51,0.05); padding: 25px 40px; text-align: center; border-top: 1px solid rgba(255,51,51,0.3);">
                            <p style="margin: 0; color: #ff3333; font-size: 11px; letter-spacing: 2px; font-family: 'Courier New', monospace;">// {{$name}} © {{ date('Y') }} // NEON_GRID //</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
