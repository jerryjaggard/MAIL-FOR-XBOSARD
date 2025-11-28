{{-- Modern Clean Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage Warning</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f7;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 40px 0;">
                <table role="presentation" style="width: 600px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px 40px 30px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 24px; font-weight: 600;">📊 Traffic Alert</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #4a5568; font-size: 16px; line-height: 1.7; margin: 0 0 20px;">Dear Customer,</p>
                            <div style="background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%); border-left: 4px solid #ef4444; padding: 20px; border-radius: 0 12px 12px 0; margin: 20px 0;">
                                <p style="color: #991b1b; font-size: 16px; line-height: 1.7; margin: 0;">
                                    <strong>📈 Alert:</strong> You have used <strong>80%</strong> of your monthly traffic quota. Please plan your usage accordingly to avoid running out before the reset date.
                                </p>
                            </div>
                            <!-- Progress Bar -->
                            <div style="margin: 30px 0;">
                                <div style="background: #e2e8f0; border-radius: 10px; height: 20px; overflow: hidden;">
                                    <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); width: 80%; height: 100%; border-radius: 10px;"></div>
                                </div>
                                <p style="color: #718096; font-size: 14px; text-align: center; margin: 10px 0 0;">80% Used</p>
                            </div>
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #ffffff; text-decoration: none; padding: 14px 40px; border-radius: 8px; font-weight: 600; font-size: 16px;">View Usage</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #f8fafc; padding: 25px 40px; text-align: center; border-top: 1px solid #e2e8f0;">
                            <p style="margin: 0; color: #a0aec0; font-size: 13px;">© {{ date('Y') }} {{$name}}. All rights reserved.</p>
                            <p style="margin: 10px 0 0; color: #a0aec0; font-size: 12px;">This is an automated message, please do not reply directly.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
