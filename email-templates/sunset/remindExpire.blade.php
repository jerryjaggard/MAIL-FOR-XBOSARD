{{-- Sunset Orange Template - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiry Reminder</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #fff7ed 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 50px rgba(249,115,22,0.15);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #f97316 0%, #ea580c 50%, #dc2626 100%); padding: 45px 40px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 600; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">⏰ Expiry Reminder</h1>
                        </td>
                    </tr>
                    <!-- Decorative line -->
                    <tr>
                        <td style="height: 4px; background: linear-gradient(90deg, #f97316, #fbbf24, #f97316);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #57534e; font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #dc2626; padding: 20px; border-radius: 0 16px 16px 0; margin: 25px 0;">
                                <p style="color: #92400e; font-size: 16px; font-weight: 600; margin: 0;">
                                    ⚠️ Your subscription expires in <strong>24 hours</strong>!
                                </p>
                            </div>
                            <p style="color: #78716c; font-size: 15px; line-height: 1.8; margin: 20px 0 0;">Renew now to keep enjoying our services.</p>
                            <div style="text-align: center; margin-top: 35px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #f97316 0%, #ea580c 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 50px; font-weight: 600; font-size: 16px; box-shadow: 0 8px 25px rgba(249,115,22,0.4);">🔥 Renew Now</a>
                            </div>
                            <p style="color: #a8a29e; font-size: 14px; text-align: center; margin: 25px 0 0;">Already renewed? You're all set!</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, #fffbeb 0%, #fef3c7 100%); padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #92400e; font-size: 13px;">🌅 {{$name}} © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
