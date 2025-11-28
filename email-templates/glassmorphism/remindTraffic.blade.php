{{-- Glassmorphism Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage Warning</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #f5576c 75%, #4facfe 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.25); border-radius: 30px; overflow: hidden; border: 1px solid rgba(255,255,255,0.3); box-shadow: 0 25px 45px rgba(0,0,0,0.1);">
                    <!-- Glass Header -->
                    <tr>
                        <td style="background: rgba(255,255,255,0.2); padding: 50px 40px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.2);">
                            <div style="width: 80px; height: 80px; background: rgba(255,220,200,0.3); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 32px rgba(0,0,0,0.1);">
                                <span style="font-size: 40px;">📊</span>
                            </div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 600; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">Traffic Alert</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: rgba(255,255,255,0.9); font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <div style="background: rgba(255,220,200,0.3); padding: 25px; border-radius: 20px; margin: 25px 0; border: 1px solid rgba(255,255,255,0.3);">
                                <p style="color: #ffffff; font-size: 18px; font-weight: 600; margin: 0; text-align: center; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                    📈 You've flowed through <strong>80%</strong> of your crystal bandwidth!
                                </p>
                            </div>
                            <!-- Glass Progress Bar -->
                            <div style="margin: 35px 0;">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 20px; height: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,0.3);">
                                    <div style="background: linear-gradient(90deg, rgba(255,255,255,0.6), rgba(255,255,255,0.4)); width: 80%; height: 100%; border-radius: 20px;"></div>
                                </div>
                                <p style="color: rgba(255,255,255,0.7); font-size: 14px; text-align: center; margin: 15px 0 0;">80% crystallized • Handle with care 💎</p>
                            </div>
                            <div style="text-align: center; margin-top: 40px;">
                                <a href="{{$url}}" style="display: inline-block; background: rgba(255,255,255,0.3); color: #ffffff; text-decoration: none; padding: 18px 55px; border-radius: 50px; font-weight: 600; font-size: 16px; border: 1px solid rgba(255,255,255,0.4); box-shadow: 0 8px 32px rgba(0,0,0,0.1);">📈 View Details</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Glass Footer -->
                    <tr>
                        <td style="background: rgba(255,255,255,0.15); padding: 30px 40px; text-align: center; border-top: 1px solid rgba(255,255,255,0.2);">
                            <p style="margin: 0; color: rgba(255,255,255,0.7); font-size: 13px;">✨ {{$name}} • Crystal Clear © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
