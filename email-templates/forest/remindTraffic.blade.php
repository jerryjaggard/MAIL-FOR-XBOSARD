{{-- Forest Green Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage Warning</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(180deg, #ecfdf5 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 12px 40px rgba(16,185,129,0.12);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); padding: 45px 40px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 26px; font-weight: 600;">📊 Traffic Alert</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #374151; font-size: 16px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; padding: 20px; border-radius: 0 16px 16px 0; margin: 25px 0;">
                                <p style="color: #92400e; font-size: 16px; font-weight: 600; margin: 0;">
                                    🌿 You've used <strong>80%</strong> of your monthly traffic!
                                </p>
                            </div>
                            <!-- Forest Progress Bar -->
                            <div style="margin: 30px 0;">
                                <div style="background: #dcfce7; border-radius: 16px; height: 20px; overflow: hidden;">
                                    <div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); width: 80%; height: 100%; border-radius: 16px;"></div>
                                </div>
                                <p style="color: #6b7280; font-size: 14px; text-align: center; margin: 12px 0 0;">80% consumed • Use wisely 🌲</p>
                            </div>
                            <div style="text-align: center; margin-top: 35px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 12px; font-weight: 600; font-size: 16px; box-shadow: 0 6px 20px rgba(16,185,129,0.3);">📈 View Details</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Nature Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, #f0fdf4 0%, #dcfce7 100%); padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #166534; font-size: 13px;">🍃 {{$name}} • Eco-friendly © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
