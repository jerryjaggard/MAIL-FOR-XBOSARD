{{-- Rose Gold Template - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiry Reminder</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #fff1f2 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 15px 50px rgba(244,63,94,0.12);">
                    <!-- Rose Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #fb7185 0%, #f43f5e 50%, #e11d48 100%); padding: 50px 40px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 500;">⏰ Expiry Reminder</h1>
                        </td>
                    </tr>
                    <!-- Rose Accent -->
                    <tr>
                        <td style="height: 3px; background: linear-gradient(90deg, #fda4af, #fecdd3, #fda4af);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: #64748b; font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Beautiful Customer,</p>
                            <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f43f5e; padding: 20px; border-radius: 0 16px 16px 0; margin: 25px 0;">
                                <p style="color: #92400e; font-size: 16px; font-weight: 600; margin: 0;">
                                    🌺 Your lovely subscription wilts in <strong>24 hours</strong>!
                                </p>
                            </div>
                            <p style="color: #71717a; font-size: 15px; line-height: 1.8; margin: 20px 0 0;">Renew now to keep your garden blooming!</p>
                            <div style="text-align: center; margin-top: 40px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #fb7185 0%, #f43f5e 100%); color: #ffffff; text-decoration: none; padding: 16px 55px; border-radius: 50px; font-weight: 600; font-size: 16px; box-shadow: 0 8px 25px rgba(244,63,94,0.35);">💐 Renew Now</a>
                            </div>
                            <p style="color: #a1a1aa; font-size: 14px; text-align: center; margin: 25px 0 0;">Already renewed? Your petals are safe! 🌹</p>
                        </td>
                    </tr>
                    <!-- Rose Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, #fff1f2 0%, #ffe4e6 100%); padding: 28px 40px; text-align: center;">
                            <p style="margin: 0; color: #be123c; font-size: 13px;">🌸 With love from {{$name}} © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
