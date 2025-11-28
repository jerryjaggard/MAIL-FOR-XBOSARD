{{-- Neon Cyberpunk Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Warning</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Courier New', Consolas, monospace; background: #0a0a0a; min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: linear-gradient(180deg, #0f0f0f 0%, #1a1a1a 100%); border-radius: 4px; overflow: hidden; border: 2px solid #ffaa00; box-shadow: 0 0 30px rgba(255,170,0,0.3), 0 0 60px rgba(255,170,0,0.1), inset 0 0 30px rgba(255,170,0,0.05);">
                    <!-- Neon Header -->
                    <tr>
                        <td style="background: linear-gradient(90deg, rgba(255,170,0,0.1) 0%, rgba(255,0,255,0.1) 50%, rgba(0,255,255,0.1) 100%); padding: 40px; text-align: center; border-bottom: 2px solid #ffaa00;">
                            <div style="font-size: 11px; color: #ffaa00; letter-spacing: 6px; margin-bottom: 15px; font-family: 'Courier New', monospace;">[ SYSTEM.MONITOR ]</div>
                            <h1 style="margin: 0; color: #ffaa00; font-size: 28px; font-weight: 400; text-shadow: 0 0 10px #ffaa00, 0 0 20px #ffaa00, 0 0 40px #ffaa00;">📊 BANDWIDTH_ALERT</h1>
                        </td>
                    </tr>
                    <!-- Alert Line -->
                    <tr>
                        <td style="height: 2px; background: linear-gradient(90deg, transparent, #ffaa00, #ff00ff, #00ffff, #ffaa00, transparent);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: #ffaa00; font-size: 14px; line-height: 1.8; margin: 0 0 20px; font-family: 'Courier New', monospace;">&gt; GREETINGS, USER_</p>
                            <div style="background: rgba(255,170,0,0.1); padding: 25px; margin: 25px 0; border-left: 4px solid #ffaa00;">
                                <p style="color: #ffcc66; font-size: 16px; margin: 0; font-family: 'Courier New', monospace;">
                                    &gt; BANDWIDTH_USAGE: <span style="color: #ffaa00; text-shadow: 0 0 10px #ffaa00;">80%</span> CONSUMED<br>
                                    &gt; STATUS: HIGH_USAGE_DETECTED
                                </p>
                            </div>
                            <!-- Neon Progress Bar -->
                            <div style="margin: 35px 0;">
                                <div style="background: rgba(255,170,0,0.1); border: 1px solid rgba(255,170,0,0.3); height: 20px; overflow: hidden;">
                                    <div style="background: linear-gradient(90deg, #00ff88, #00ffff, #ff00ff, #ffaa00); width: 80%; height: 100%; box-shadow: 0 0 20px rgba(255,170,0,0.5);"></div>
                                </div>
                                <p style="color: #888888; font-size: 12px; text-align: center; margin: 12px 0 0; font-family: 'Courier New', monospace;">&gt; [████████░░] 80% UTILIZED</p>
                            </div>
                            <div style="text-align: center; margin-top: 40px;">
                                <a href="{{$url}}" style="display: inline-block; background: transparent; color: #ffaa00; text-decoration: none; padding: 16px 50px; border: 2px solid #ffaa00; font-weight: 400; font-size: 14px; letter-spacing: 3px; font-family: 'Courier New', monospace; text-shadow: 0 0 10px #ffaa00; box-shadow: 0 0 20px rgba(255,170,0,0.3);">[ VIEW_STATS ]</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Neon Footer -->
                    <tr>
                        <td style="background: rgba(255,170,0,0.05); padding: 25px 40px; text-align: center; border-top: 1px solid rgba(255,170,0,0.3);">
                            <p style="margin: 0; color: #ffaa00; font-size: 11px; letter-spacing: 2px; font-family: 'Courier New', monospace;">// {{$name}} © {{ date('Y') }} // NEON_GRID //</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
