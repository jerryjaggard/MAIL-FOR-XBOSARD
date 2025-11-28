{{-- Gradient Vibrant Template - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiry Reminder</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.2);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 50px 40px 30px; text-align: center;">
                            <h1 style="margin: 0; color: #ff6b6b; font-size: 28px; font-weight: 700;">⏰ Expiry Alert!</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 10px 40px 40px;">
                            <p style="color: #555555; font-size: 16px; line-height: 1.8; text-align: center; margin: 0 0 20px;">Dear Customer,</p>
                            <div style="background: linear-gradient(135deg, #fff5f5 0%, #fffbeb 100%); border-radius: 16px; padding: 25px; margin: 25px 0; text-align: center;">
                                <p style="color: #c53030; font-size: 18px; font-weight: 600; margin: 0;">
                                    ⚠️ Your subscription expires in <strong>24 hours</strong>!
                                </p>
                            </div>
                            <p style="color: #777777; font-size: 15px; text-align: center; margin: 0;">Renew now to keep your service running smoothly.</p>
                            <div style="text-align: center; margin-top: 35px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%); color: #ffffff; text-decoration: none; padding: 18px 55px; border-radius: 50px; font-weight: 700; font-size: 16px; box-shadow: 0 10px 30px rgba(255,107,107,0.5);">🔥 Renew Now</a>
                            </div>
                            <p style="color: #999999; font-size: 14px; text-align: center; margin: 25px 0 0;">Already renewed? You're all set!</p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #fafafa; padding: 25px; text-align: center;">
                            <p style="margin: 0; color: #999999; font-size: 13px;">Made with ❤️ by {{$name}} • {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
