{{-- Ocean Blue Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage Warning</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #e0f2fe 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 10px 40px rgba(14,165,233,0.15);">
                    <!-- Wave Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); padding: 50px 40px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 600;">📊 Traffic Alert</h1>
                            <p style="margin: 10px 0 0; color: #bae6fd; font-size: 14px;">Usage update</p>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #475569; font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; padding: 20px; border-radius: 0 12px 12px 0; margin: 25px 0;">
                                <p style="color: #92400e; font-size: 16px; font-weight: 600; margin: 0;">
                                    📈 You've used <strong>80%</strong> of your monthly traffic!
                                </p>
                            </div>
                            <!-- Ocean Progress Bar -->
                            <div style="margin: 30px 0;">
                                <div style="background: #e0f2fe; border-radius: 12px; height: 20px; overflow: hidden;">
                                    <div style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); width: 80%; height: 100%; border-radius: 12px;"></div>
                                </div>
                                <p style="color: #64748b; font-size: 14px; text-align: center; margin: 12px 0 0;">80% used • Plan wisely 🎯</p>
                            </div>
                            <div style="text-align: center; margin-top: 35px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 12px; font-weight: 600; font-size: 16px; box-shadow: 0 6px 20px rgba(14,165,233,0.35);">📈 View Usage</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #f0f9ff; padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #64748b; font-size: 13px;">🌊 {{$name}} • {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
