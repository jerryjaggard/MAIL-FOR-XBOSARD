{{-- Neon Cyberpunk Template - Notification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Courier New', Consolas, monospace; background: #0a0a0a; min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: linear-gradient(180deg, #0f0f0f 0%, #1a1a1a 100%); border-radius: 4px; overflow: hidden; border: 2px solid #ff00ff; box-shadow: 0 0 30px rgba(255,0,255,0.3), 0 0 60px rgba(255,0,255,0.1), inset 0 0 30px rgba(255,0,255,0.05);">
                    <!-- Neon Header -->
                    <tr>
                        <td style="background: linear-gradient(90deg, rgba(255,0,255,0.1) 0%, rgba(0,255,255,0.1) 50%, rgba(0,255,136,0.1) 100%); padding: 40px; text-align: center; border-bottom: 2px solid #ff00ff;">
                            <div style="font-size: 11px; color: #ff00ff; letter-spacing: 6px; margin-bottom: 15px; font-family: 'Courier New', monospace;">[ SYSTEM.NOTIFY ]</div>
                            <h1 style="margin: 0; color: #ff00ff; font-size: 28px; font-weight: 400; text-shadow: 0 0 10px #ff00ff, 0 0 20px #ff00ff, 0 0 40px #ff00ff;">{{ $name ?? 'TRANSMISSION' }}</h1>
                        </td>
                    </tr>
                    <!-- Scan Line -->
                    <tr>
                        <td style="height: 2px; background: linear-gradient(90deg, transparent, #ff00ff, #00ffff, #00ff88, #ff00ff, transparent);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: #ff00ff; font-size: 14px; line-height: 1.8; margin: 0 0 20px; font-family: 'Courier New', monospace;">&gt; GREETINGS, USER_</p>
                            <div style="color: #888888; font-size: 14px; line-height: 1.8; font-family: 'Courier New', monospace;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <div style="text-align: center; margin-top: 40px;">
                                    <a href="{{ $url }}" style="display: inline-block; background: transparent; color: #ff00ff; text-decoration: none; padding: 16px 50px; border: 2px solid #ff00ff; font-weight: 400; font-size: 14px; letter-spacing: 3px; font-family: 'Courier New', monospace; text-shadow: 0 0 10px #ff00ff; box-shadow: 0 0 20px rgba(255,0,255,0.3);">[ ACCESS_GRID ]</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Neon Footer -->
                    <tr>
                        <td style="background: rgba(255,0,255,0.05); padding: 25px 40px; text-align: center; border-top: 1px solid rgba(255,0,255,0.3);">
                            <p style="margin: 0; color: #ff00ff; font-size: 11px; letter-spacing: 2px; font-family: 'Courier New', monospace;">// {{ $name ?? config('app.name', 'XBoard') }} © {{ date('Y') }} // NEON_GRID //</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
