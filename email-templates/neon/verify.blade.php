{{-- Neon Cyberpunk Template - Email Verification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Courier New', Consolas, monospace; background: #0a0a0a; min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: linear-gradient(180deg, #0f0f0f 0%, #1a1a1a 100%); border-radius: 4px; overflow: hidden; border: 2px solid #00ff88; box-shadow: 0 0 30px rgba(0,255,136,0.3), 0 0 60px rgba(0,255,136,0.1), inset 0 0 30px rgba(0,255,136,0.05);">
                    <!-- Neon Header -->
                    <tr>
                        <td style="background: linear-gradient(90deg, rgba(0,255,136,0.1) 0%, rgba(0,255,255,0.1) 50%, rgba(255,0,255,0.1) 100%); padding: 40px; text-align: center; border-bottom: 2px solid #00ff88;">
                            <div style="font-size: 11px; color: #00ff88; letter-spacing: 6px; margin-bottom: 15px; font-family: 'Courier New', monospace;">[ SYSTEM.VERIFY ]</div>
                            <h1 style="margin: 0; color: #00ff88; font-size: 28px; font-weight: 400; text-shadow: 0 0 10px #00ff88, 0 0 20px #00ff88, 0 0 40px #00ff88;">✉ EMAIL_VERIFY</h1>
                        </td>
                    </tr>
                    <!-- Scan Line -->
                    <tr>
                        <td style="height: 2px; background: linear-gradient(90deg, transparent, #00ff88, #00ffff, #ff00ff, #00ff88, transparent);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: #00ff88; font-size: 14px; line-height: 1.8; margin: 0 0 20px; font-family: 'Courier New', monospace;">&gt; GREETINGS, USER_</p>
                            <p style="color: #888888; font-size: 14px; line-height: 1.8; margin: 0 0 30px;">&gt; VERIFICATION_CODE TRANSMITTED<br>&gt; EXPIRES_IN: 300_SECONDS</p>
                            <div style="text-align: center; margin: 40px 0; padding: 30px; background: rgba(0,255,136,0.05); border: 1px solid rgba(0,255,136,0.3);">
                                <div style="font-size: 10px; color: #00ffff; letter-spacing: 4px; margin-bottom: 15px;">ACCESS_CODE:</div>
                                <span style="color: #00ff88; font-size: 42px; font-weight: bold; letter-spacing: 15px; text-shadow: 0 0 10px #00ff88, 0 0 20px #00ff88; font-family: 'Courier New', monospace;">{{$code}}</span>
                            </div>
                            <p style="color: #666666; font-size: 12px; text-align: center; margin: 30px 0 0;">&gt; IF_NOT_REQUESTED: IGNORE_TRANSMISSION</p>
                            <div style="text-align: center; margin-top: 40px;">
                                <a href="{{$url}}" style="display: inline-block; background: transparent; color: #00ff88; text-decoration: none; padding: 16px 50px; border: 2px solid #00ff88; font-weight: 400; font-size: 14px; letter-spacing: 3px; font-family: 'Courier New', monospace; text-shadow: 0 0 10px #00ff88; box-shadow: 0 0 20px rgba(0,255,136,0.3);">[ ENTER_SYSTEM ]</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Neon Footer -->
                    <tr>
                        <td style="background: rgba(0,255,136,0.05); padding: 25px 40px; text-align: center; border-top: 1px solid rgba(0,255,136,0.3);">
                            <p style="margin: 0; color: #00ff88; font-size: 11px; letter-spacing: 2px; font-family: 'Courier New', monospace;">// {{$name}} © {{ date('Y') }} // NEON_GRID //</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
