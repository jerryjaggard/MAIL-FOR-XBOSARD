{{-- Forest Green Template - Nature Green Tones --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #ecfdf5 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 12px 40px rgba(16,185,129,0.12);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); padding: 45px 40px; text-align: center;">
                            @if(isset($logo) && $logo)
                                <img src="{{ $logo }}" alt="Logo" style="max-height: 50px; margin-bottom: 15px;">
                            @endif
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 600;">🌿 {{ $name ?? 'Hello!' }}</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <div style="color: #374151; font-size: 16px; line-height: 1.8;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <div style="text-align: center; margin-top: 35px;">
                                    <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 12px; font-weight: 600; font-size: 16px; box-shadow: 0 6px 20px rgba(16,185,129,0.3);">🌲 Explore</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Nature Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, #f0fdf4 0%, #dcfce7 100%); padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #166534; font-size: 13px;">🍃 {{ config('app.name', 'XBoard') }} • Eco-friendly © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
