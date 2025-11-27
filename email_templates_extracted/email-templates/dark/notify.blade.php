{{-- Dark Mode Template - Dark with Purple Accents --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #0f0f0f;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #1a1a2e; border-radius: 16px; overflow: hidden; border: 1px solid #2d2d44;">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 40px 25px; text-align: center; border-bottom: 1px solid #2d2d44;">
                            @if(isset($logo) && $logo)
                                <img src="{{ $logo }}" alt="Logo" style="max-height: 50px; margin-bottom: 15px;">
                            @endif
                            <h1 style="margin: 0; color: #a855f7; font-size: 24px; font-weight: 600;">{{ $name ?? 'Hello' }}</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <div style="color: #d1d5db; font-size: 15px; line-height: 1.8;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <div style="text-align: center; margin-top: 35px;">
                                    <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #a855f7 0%, #6366f1 100%); color: #ffffff; text-decoration: none; padding: 14px 45px; border-radius: 10px; font-weight: 600; font-size: 15px;">Open Dashboard</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #16162a; padding: 25px 40px; text-align: center; border-top: 1px solid #2d2d44;">
                            <p style="margin: 0; color: #6b7280; font-size: 13px;">© {{ date('Y') }} {{ config('app.name', 'XBoard') }} • Dark Mode</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
