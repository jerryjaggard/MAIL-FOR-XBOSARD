{{-- Minimal Simple Template - Clean Black & White --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #ffffff;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 60px 20px;">
                <table role="presentation" style="width: 560px; max-width: 100%; border-collapse: collapse;">
                    <!-- Logo -->
                    <tr>
                        <td style="padding-bottom: 40px; text-align: center;">
                            @if(isset($logo) && $logo)
                                <img src="{{ $logo }}" alt="Logo" style="max-height: 40px;">
                            @else
                                <div style="font-size: 24px; font-weight: 700; color: #000000;">{{ config('app.name', 'XBoard') }}</div>
                            @endif
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; padding: 40px 0;">
                            <h2 style="margin: 0 0 20px; color: #000000; font-size: 20px; font-weight: 600;">{{ $name ?? 'Hello' }}</h2>
                            <div style="color: #525252; font-size: 15px; line-height: 1.8;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <div style="margin-top: 30px;">
                                    <a href="{{ $url }}" style="display: inline-block; background: #000000; color: #ffffff; text-decoration: none; padding: 12px 32px; font-weight: 500; font-size: 14px;">Open Dashboard →</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="padding-top: 30px; text-align: center;">
                            <p style="margin: 0; color: #a3a3a3; font-size: 12px;">{{ config('app.name', 'XBoard') }} • {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
