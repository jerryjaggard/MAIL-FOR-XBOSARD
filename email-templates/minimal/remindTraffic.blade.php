{{-- Minimal Simple Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage Warning</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #ffffff;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 60px 20px;">
                <table role="presentation" style="width: 560px; max-width: 100%; border-collapse: collapse;">
                    <!-- Logo -->
                    <tr>
                        <td style="padding-bottom: 40px; text-align: center;">
                            <div style="font-size: 24px; font-weight: 700; color: #000000;">{{$name}}</div>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5; padding: 40px 0;">
                            <h2 style="margin: 0 0 20px; color: #000000; font-size: 20px; font-weight: 600;">📊 Traffic Alert</h2>
                            <p style="color: #525252; font-size: 15px; line-height: 1.8; margin: 0 0 20px;">Dear Customer,</p>
                            <div style="background: #fafafa; border-left: 3px solid #000000; padding: 20px; margin: 20px 0;">
                                <p style="color: #262626; font-size: 15px; line-height: 1.8; margin: 0;">
                                    You have used <strong>80%</strong> of your monthly traffic quota. Please plan your usage accordingly.
                                </p>
                            </div>
                            <!-- Progress Bar -->
                            <div style="margin: 30px 0;">
                                <div style="background: #e5e5e5; height: 8px; border-radius: 4px; overflow: hidden;">
                                    <div style="background: #000000; width: 80%; height: 100%;"></div>
                                </div>
                                <p style="color: #525252; font-size: 13px; text-align: right; margin: 8px 0 0;">80% used</p>
                            </div>
                            <div style="margin-top: 30px;">
                                <a href="{{$url}}" style="display: inline-block; background: #000000; color: #ffffff; text-decoration: none; padding: 12px 32px; font-weight: 500; font-size: 14px;">View Usage →</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="padding-top: 30px; text-align: center;">
                            <p style="margin: 0; color: #a3a3a3; font-size: 12px;">{{$name}} • {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
