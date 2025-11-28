{{-- Royal Purple Template - Elegant Purple Gold --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: Georgia, 'Times New Roman', serif; background: linear-gradient(180deg, #faf5ff 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 4px; overflow: hidden; box-shadow: 0 15px 50px rgba(126,34,206,0.15); border: 2px solid #d4af37;">
                    <!-- Royal Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #7e22ce 0%, #581c87 100%); padding: 50px 40px; text-align: center;">
                            <div style="color: #d4af37; font-size: 14px; letter-spacing: 4px; margin-bottom: 15px;">✦ PREMIUM ✦</div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 400; font-family: Georgia, serif;">{{ $name ?? 'Greetings' }}</h1>
                        </td>
                    </tr>
                    <!-- Gold Accent -->
                    <tr>
                        <td style="height: 5px; background: linear-gradient(90deg, #d4af37, #f4e4bc, #d4af37);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: #44337a; font-size: 16px; line-height: 1.9; margin: 0 0 20px;">Dear Esteemed Customer,</p>
                            <div style="color: #44337a; font-size: 16px; line-height: 1.9;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <div style="text-align: center; margin-top: 40px;">
                                    <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #d4af37 0%, #c9a227 100%); color: #581c87; text-decoration: none; padding: 16px 50px; font-weight: bold; font-size: 14px; letter-spacing: 1px; border-radius: 2px;">👑 ENTER</a>
                                </div>
                            @endif
                        </td>
                    </tr>
                    <!-- Royal Footer -->
                    <tr>
                        <td style="background: #581c87; padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #d4af37; font-size: 12px; letter-spacing: 2px;">👑 {{ $name ?? config('app.name', 'XBoard') }} ROYAL © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
