{{-- Rose Gold Template - Elegant Pink Rose Style --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #fff1f2 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 15px 50px rgba(244,63,94,0.12);">
                    <!-- Rose Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #fb7185 0%, #f43f5e 50%, #e11d48 100%); padding: 50px 40px; text-align: center;">
                            @if(isset($logo) && $logo)
                                <img src="{{ $logo }}" alt="Logo" style="max-height: 50px; margin-bottom: 20px;">
                            @endif
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 500;">💕 {{ $name ?? 'Hello Beautiful!' }}</h1>
                        </td>
                    </tr>
                    <!-- Rose Accent -->
                    <tr>
                        <td style="height: 3px; background: linear-gradient(90deg, #fda4af, #fecdd3, #fda4af);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <div style="color: #64748b; font-size: 16px; line-height: 1.8;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <div style="text-align: center; margin-top: 40px;">
                                    <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #fb7185 0%, #f43f5e 100%); color: #ffffff; text-decoration: none; padding: 16px 55px; border-radius: 50px; font-weight: 600; font-size: 16px; box-shadow: 0 8px 25px rgba(244,63,94,0.35);">🌹 Open Now</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Rose Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, #fff1f2 0%, #ffe4e6 100%); padding: 28px 40px; text-align: center;">
                            <p style="margin: 0; color: #be123c; font-size: 13px;">🌸 With love from {{ config('app.name', 'XBoard') }} © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
