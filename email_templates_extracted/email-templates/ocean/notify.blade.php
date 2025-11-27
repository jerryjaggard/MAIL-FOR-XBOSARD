{{-- Ocean Blue Template - Fresh Blue Tones --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #e0f2fe 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(14,165,233,0.15);">
                    <!-- Wave Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); padding: 50px 40px 60px; text-align: center; position: relative;">
                            @if(isset($logo) && $logo)
                                <img src="{{ $logo }}" alt="Logo" style="max-height: 50px; margin-bottom: 20px;">
                            @endif
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 600;">{{ $name ?? 'Hello!' }}</h1>
                            <p style="margin: 10px 0 0; color: #bae6fd; font-size: 14px;">Welcome to our service</p>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <div style="color: #475569; font-size: 16px; line-height: 1.8;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <div style="text-align: center; margin-top: 35px;">
                                    <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 12px; font-weight: 600; font-size: 16px; box-shadow: 0 6px 20px rgba(14,165,233,0.35);">🌊 Dive In</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #f0f9ff; padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #64748b; font-size: 13px;">🌊 {{ config('app.name', 'XBoard') }} • {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
