{{-- Premium Luxury Gold Template - Email Verification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
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
                                <div style="font-size: 11px; color: #c9a227; letter-spacing: 6px; margin-bottom: 20px;">★ PREMIUM MEMBERSHIP ★</div>
                                <h1 style="margin: 0; color: #c9a227; font-size: 32px; font-weight: 400; font-family: 'Palatino Linotype', serif;">✉ Email Verification</h1>
                            </div>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px;">
                            <p style="color: #c9a227; font-size: 16px; line-height: 1.9; margin: 0 0 20px; font-family: 'Palatino Linotype', serif;">Esteemed Member,</p>
                            <p style="color: #999999; font-size: 16px; line-height: 1.9; margin: 0 0 35px;">Your exclusive verification code awaits. It remains valid for 5 distinguished minutes.</p>
                            <div style="text-align: center; margin: 45px 0; padding: 40px; background: linear-gradient(135deg, rgba(201,162,39,0.1) 0%, rgba(244,228,188,0.1) 100%); border: 2px solid #c9a227;">
                                <div style="font-size: 11px; color: #c9a227; letter-spacing: 4px; margin-bottom: 20px;">VERIFICATION CODE</div>
                                <span style="color: #c9a227; font-size: 46px; font-weight: 400; letter-spacing: 14px; font-family: 'Palatino Linotype', serif; text-shadow: 0 0 20px rgba(201,162,39,0.5);">{{$code}}</span>
                            </div>
                            <p style="color: #666666; font-size: 14px; text-align: center; margin: 35px 0 0;">If this request was not initiated by you, kindly disregard.</p>
                            <div style="text-align: center; margin-top: 45px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #c9a227 0%, #f4e4bc 50%, #c9a227 100%); color: #0f0f0f; text-decoration: none; padding: 18px 55px; font-weight: 600; font-size: 14px; letter-spacing: 2px; font-family: 'Palatino Linotype', serif; box-shadow: 0 10px 30px rgba(201,162,39,0.4);">ENTER PORTAL</a>
                            </div>
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
