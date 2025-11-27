{{-- Gradient Vibrant Template - Red to Yellow --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.2);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 50px 40px 30px; text-align: center;">
                            @if(isset($logo) && $logo)
                                <img src="{{ $logo }}" alt="Logo" style="max-height: 55px; margin-bottom: 20px;">
                            @endif
                            <h1 style="margin: 0; background: linear-gradient(135deg, #ff6b6b, #feca57); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-size: 28px; font-weight: 700;">{{ $name ?? 'Hello!' }}</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 10px 40px 40px;">
                            <div style="color: #555555; font-size: 16px; line-height: 1.8; text-align: center;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <div style="text-align: center; margin-top: 35px;">
                                    <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 50px; font-weight: 600; font-size: 16px; box-shadow: 0 8px 20px rgba(255,107,107,0.4);">Get Started</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #fafafa; padding: 25px; text-align: center;">
                            <p style="margin: 0; color: #999999; font-size: 13px;">Made with ❤️ by {{ config('app.name', 'XBoard') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
