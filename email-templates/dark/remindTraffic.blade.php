{{-- Dark Mode Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage Warning</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #0f0f0f;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #1a1a2e; border-radius: 16px; overflow: hidden; border: 1px solid #2d2d44;">
                    <!-- Header -->
                    <tr>
                        <td style="padding: 40px 40px 25px; text-align: center; border-bottom: 1px solid #2d2d44;">
                            <h1 style="margin: 0; color: #fbbf24; font-size: 24px; font-weight: 600;">📊 Traffic Alert</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #d1d5db; font-size: 15px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <div style="background: linear-gradient(135deg, #78350f 0%, #451a03 100%); border-left: 4px solid #fbbf24; padding: 20px; border-radius: 0 10px 10px 0; margin: 25px 0;">
                                <p style="color: #fef3c7; font-size: 16px; font-weight: 600; margin: 0;">
                                    📈 You have used <strong>80%</strong> of your monthly traffic quota!
                                </p>
                            </div>
                            <!-- Dark Mode Progress Bar -->
                            <div style="margin: 30px 0;">
                                <div style="background: #2d2d44; border-radius: 12px; height: 20px; overflow: hidden; box-shadow: inset 0 2px 4px rgba(0,0,0,0.3);">
                                    <div style="background: linear-gradient(135deg, #a855f7 0%, #6366f1 100%); width: 80%; height: 100%; border-radius: 12px; box-shadow: 0 0 20px rgba(168,85,247,0.5);"></div>
                                </div>
                                <p style="color: #9ca3af; font-size: 14px; text-align: center; margin: 12px 0 0;">80% consumed • Plan wisely!</p>
                            </div>
                            <div style="text-align: center; margin-top: 35px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #a855f7 0%, #6366f1 100%); color: #ffffff; text-decoration: none; padding: 14px 45px; border-radius: 10px; font-weight: 600; font-size: 15px;">View Details</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #16162a; padding: 25px 40px; text-align: center; border-top: 1px solid #2d2d44;">
                            <p style="margin: 0; color: #6b7280; font-size: 13px;">© {{ date('Y') }} {{$name}} • Dark Mode</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
