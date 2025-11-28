{{-- Gradient Vibrant Template - Email Verification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.2);">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 50px 40px 30px; text-align: center;">
                            <h1 style="margin: 0; color: #ff6b6b; font-size: 28px; font-weight: 700;">✉️ Verify Your Email</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 10px 40px 40px;">
                            <p style="color: #555555; font-size: 16px; line-height: 1.8; text-align: center; margin: 0 0 20px;">Dear Customer,</p>
                            <p style="color: #555555; font-size: 16px; line-height: 1.8; text-align: center; margin: 0 0 30px;">Here's your verification code. It expires in 5 minutes.</p>
                            <div style="text-align: center; margin: 30px 0;">
                                <div style="display: inline-block; background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%); padding: 25px 60px; border-radius: 16px; box-shadow: 0 8px 20px rgba(255,107,107,0.4);">
                                    <span style="color: #ffffff; font-size: 40px; font-weight: bold; letter-spacing: 10px;">{{$code}}</span>
                                </div>
                            </div>
                            <p style="color: #999999; font-size: 14px; text-align: center; margin: 30px 0 0;">Didn't request this? Just ignore this email.</p>
                            <div style="text-align: center; margin-top: 35px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #ff6b6b 0%, #feca57 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 50px; font-weight: 600; font-size: 16px; box-shadow: 0 8px 20px rgba(255,107,107,0.4);">Visit {{$name}}</a>
                            </div>
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
