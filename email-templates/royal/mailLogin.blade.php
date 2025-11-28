{{-- Royal Purple Template - Magic Link Login --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Login</title>
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
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 400; font-family: Georgia, serif;">🔐 Royal Access</h1>
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
                            <p style="color: #44337a; font-size: 16px; line-height: 1.9; margin: 0 0 30px;">A royal login request has been initiated for your {{$name}} account. Click below within 5 minutes to proceed.</p>
                            <div style="text-align: center; margin: 35px 0;">
                                <a href="{{$link}}" style="display: inline-block; background: linear-gradient(135deg, #d4af37 0%, #c9a227 100%); color: #581c87; text-decoration: none; padding: 18px 55px; font-weight: bold; font-size: 16px; letter-spacing: 1px; border-radius: 2px; box-shadow: 0 6px 20px rgba(212,175,55,0.4);">👑 AUTHENTICATE</a>
                            </div>
                            <div style="background: #faf5ff; border: 1px solid #d4af37; padding: 15px 20px; margin: 25px 0;">
                                <p style="color: #6b7280; font-size: 12px; margin: 0 0 8px;">Or copy this royal link:</p>
                                <p style="color: #7e22ce; font-size: 11px; word-break: break-all; margin: 0;">{{$link}}</p>
                            </div>
                            <p style="color: #9ca3af; font-size: 14px; text-align: center; margin: 20px 0 0;">If this wasn't you, please ignore.</p>
                        </td>
                    </tr>
                    <!-- Royal Footer -->
                    <tr>
                        <td style="background: #581c87; padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #d4af37; font-size: 12px; letter-spacing: 2px;">👑 {{$name}} ROYAL © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
