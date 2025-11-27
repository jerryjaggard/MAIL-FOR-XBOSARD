{{-- Corporate Business Template - Navy Blue Professional --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: Georgia, 'Times New Roman', serif; background-color: #f0f2f5;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table role="presentation" style="width: 620px; max-width: 100%; border-collapse: collapse; background: #ffffff; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                    <!-- Header -->
                    <tr>
                        <td style="background: #1a365d; padding: 30px 40px;">
                            <table role="presentation" style="width: 100%;">
                                <tr>
                                    <td>
                                        @if(isset($logo) && $logo)
                                            <img src="{{ $logo }}" alt="Logo" style="max-height: 45px;">
                                        @else
                                            <span style="color: #ffffff; font-size: 22px; font-weight: bold;">{{ config('app.name', 'XBoard') }}</span>
                                        @endif
                                    </td>
                                    <td style="text-align: right; color: #90cdf4; font-size: 12px;">
                                        {{ date('F j, Y') }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Title Bar -->
                    <tr>
                        <td style="background: #2c5282; padding: 15px 40px;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 18px; font-weight: normal; letter-spacing: 1px;">{{ $name ?? 'NOTIFICATION' }}</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <div style="color: #2d3748; font-size: 15px; line-height: 1.9;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <div style="margin-top: 35px; padding-top: 25px; border-top: 2px solid #e2e8f0;">
                                    <a href="{{ $url }}" style="display: inline-block; background: #2c5282; color: #ffffff; text-decoration: none; padding: 14px 35px; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; letter-spacing: 0.5px;">ACCESS PORTAL</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #1a365d; padding: 25px 40px;">
                            <table role="presentation" style="width: 100%;">
                                <tr>
                                    <td style="color: #90cdf4; font-size: 12px;">
                                        © {{ date('Y') }} {{ config('app.name', 'XBoard') }}
                                    </td>
                                    <td style="text-align: right; color: #90cdf4; font-size: 12px;">
                                        Professional Services
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
