{{-- Futuristic Tech Template - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiry</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Trebuchet MS', Arial, sans-serif; background: linear-gradient(135deg, #0a192f 0%, #112240 50%, #0a192f 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 620px; max-width: 100%; border-collapse: collapse; background: linear-gradient(180deg, rgba(17,34,64,0.95) 0%, rgba(10,25,47,0.95) 100%); border-radius: 20px; overflow: hidden; border: 1px solid rgba(255,107,107,0.4); box-shadow: 0 25px 50px rgba(0,0,0,0.5), 0 0 80px rgba(255,107,107,0.1);">
                    <!-- Warning Header -->
                    <tr>
                        <td style="background: linear-gradient(90deg, rgba(255,107,107,0.1) 0%, rgba(255,107,107,0.2) 50%, rgba(255,107,107,0.1) 100%); padding: 50px 40px; text-align: center; border-bottom: 1px solid rgba(255,107,107,0.3);">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(255,107,107,0.2), rgba(255,107,107,0.1)); border-radius: 50%; margin: 0 auto 25px; border: 2px solid rgba(255,107,107,0.4); display: flex; align-items: center; justify-content: center;">
                                <span style="font-size: 50px;">⚡</span>
                            </div>
                            <div style="font-size: 11px; color: #ff6b6b; letter-spacing: 5px; margin-bottom: 15px;">◈ CRITICAL ALERT ◈</div>
                            <h1 style="margin: 0; color: #ccd6f6; font-size: 30px; font-weight: 300;">Expiry Warning</h1>
                        </td>
                    </tr>
                    <!-- Warning Lines -->
                    <tr>
                        <td style="height: 3px; background: linear-gradient(90deg, transparent 0%, #ff6b6b 20%, #64ffda 50%, #ff6b6b 80%, transparent 100%);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px;">
                            <p style="color: #64ffda; font-size: 16px; line-height: 1.8; margin: 0 0 20px;">// URGENT TRANSMISSION</p>
                            <div style="background: linear-gradient(135deg, rgba(255,107,107,0.1) 0%, rgba(255,107,107,0.15) 100%); padding: 30px; border-radius: 12px; margin: 30px 0; border: 1px solid rgba(255,107,107,0.3);">
                                <p style="color: #ff6b6b; font-size: 18px; font-weight: 500; margin: 0; text-align: center;">
                                    ⚠ SYSTEM SHUTDOWN IN: <span style="text-shadow: 0 0 15px rgba(255,107,107,0.8);">24 HOURS</span><br>
                                    <span style="font-size: 14px; color: #8892b0;">// Renew subscription to maintain access</span>
                                </p>
                            </div>
                            <p style="color: #8892b0; font-size: 16px; line-height: 1.8; margin: 25px 0 0;">Your access credentials will expire. Initiate renewal protocol to maintain system access.</p>
                            <div style="text-align: center; margin-top: 45px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(90deg, rgba(100,255,218,0.2), rgba(100,255,218,0.3)); color: #64ffda; text-decoration: none; padding: 18px 60px; border: 2px solid #64ffda; border-radius: 50px; font-weight: 500; font-size: 15px; letter-spacing: 2px; text-shadow: 0 0 10px rgba(100,255,218,0.5); box-shadow: 0 0 30px rgba(100,255,218,0.2);">◈ RENEW ACCESS ◈</a>
                            </div>
                            <p style="color: #4a5568; font-size: 14px; text-align: center; margin: 35px 0 0;">// Already renewed? System status: ACTIVE ✓</p>
                        </td>
                    </tr>
                    <!-- Futuristic Footer -->
                    <tr>
                        <td style="background: linear-gradient(90deg, rgba(100,255,218,0.05) 0%, rgba(100,255,218,0.1) 50%, rgba(100,255,218,0.05) 100%); padding: 30px 40px; text-align: center; border-top: 1px solid rgba(100,255,218,0.2);">
                            <p style="margin: 0; color: #64ffda; font-size: 12px; letter-spacing: 2px;">◈ {{$name}} • YEAR.{{ date('Y') }} ◈</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
