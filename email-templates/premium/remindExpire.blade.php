{{-- Premium Luxury Gold Template - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiry</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 620px; max-width: 100%; border-collapse: collapse; background: linear-gradient(180deg, #1c1c1c 0%, #0f0f0f 100%); border-radius: 4px; overflow: hidden; border: 3px solid #c9a227; box-shadow: 0 30px 60px rgba(0,0,0,0.5), 0 0 100px rgba(201,162,39,0.15);">
                    <!-- Premium Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #c9a227 0%, #f4e4bc 25%, #c9a227 50%, #f4e4bc 75%, #c9a227 100%); padding: 8px;">
                            <div style="background: linear-gradient(180deg, #1c1c1c 0%, #0f0f0f 100%); padding: 50px 40px; text-align: center;">
                                <div style="font-size: 11px; color: #b22222; letter-spacing: 6px; margin-bottom: 20px;">★ URGENT NOTICE ★</div>
                                <h1 style="margin: 0; color: #c9a227; font-size: 32px; font-weight: 400; font-family: 'Palatino Linotype', serif;">⏰ Expiry Notice</h1>
                            </div>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px;">
                            <p style="color: #c9a227; font-size: 16px; line-height: 1.9; margin: 0 0 20px; font-family: 'Palatino Linotype', serif;">Esteemed Member,</p>
                            <div style="background: linear-gradient(135deg, rgba(178,34,34,0.2) 0%, rgba(201,162,39,0.1) 100%); padding: 30px; border: 2px solid #c9a227; margin: 30px 0;">
                                <p style="color: #c9a227; font-size: 18px; font-weight: 600; margin: 0; text-align: center; font-family: 'Palatino Linotype', serif;">
                                    ⚠ Your Premium membership concludes in <span style="color: #b22222;">24 hours</span>
                                </p>
                            </div>
                            <p style="color: #999999; font-size: 16px; line-height: 1.9; margin: 25px 0 0;">Continue your distinguished experience by renewing your membership today.</p>
                            <div style="text-align: center; margin-top: 45px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #c9a227 0%, #f4e4bc 50%, #c9a227 100%); color: #0f0f0f; text-decoration: none; padding: 18px 55px; font-weight: 600; font-size: 14px; letter-spacing: 2px; font-family: 'Palatino Linotype', serif; box-shadow: 0 10px 30px rgba(201,162,39,0.4);">RENEW MEMBERSHIP</a>
                            </div>
                            <p style="color: #666666; font-size: 14px; text-align: center; margin: 35px 0 0;">Already renewed? Your golden status remains intact.</p>
                        </td>
                    </tr>
                    <!-- Premium Footer -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #c9a227 0%, #f4e4bc 25%, #c9a227 50%, #f4e4bc 75%, #c9a227 100%); padding: 3px;">
                            <div style="background: #0f0f0f; padding: 30px 40px; text-align: center;">
                                <p style="margin: 0; color: #c9a227; font-size: 12px; letter-spacing: 3px; font-family: 'Palatino Linotype', serif;">★ {{$name}} PREMIUM © {{ date('Y') }} ★</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
