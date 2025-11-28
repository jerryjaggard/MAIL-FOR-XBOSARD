{{-- Corporate Business Template - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiry Notice</title>
</head>
<body style="margin: 0; padding: 0; font-family: Georgia, 'Times New Roman', serif; background-color: #f0f2f5;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 40px 20px;">
                <table role="presentation" style="width: 620px; max-width: 100%; border-collapse: collapse; background: #ffffff; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                    <!-- Header -->
                    <tr>
                        <td style="background: #1a365d; padding: 30px 40px;">
                            <table role="presentation" style="width: 100%;">
                                <tr>
                                    <td>
                                        <span style="color: #ffffff; font-size: 22px; font-weight: bold;">{{$name}}</span>
                                    </td>
                                    <td style="text-align: right; color: #90cdf4; font-size: 12px;">
                                        {{ date('F j, Y') }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Title Bar -->
                    <tr>
                        <td style="background: #c53030; padding: 15px 40px;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 18px; font-weight: normal; letter-spacing: 1px;">⚠️ SUBSCRIPTION EXPIRY NOTICE</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #2d3748; font-size: 15px; line-height: 1.9; margin: 0 0 20px;">Dear Valued Customer,</p>
                            <div style="background: #fff5f5; border-left: 4px solid #c53030; padding: 20px; margin: 25px 0;">
                                <p style="color: #c53030; font-size: 16px; font-weight: bold; margin: 0;">
                                    IMPORTANT: Your subscription will expire within 24 hours.
                                </p>
                            </div>
                            <p style="color: #2d3748; font-size: 15px; line-height: 1.9; margin: 0 0 20px;">To ensure uninterrupted access to our services, we recommend renewing your subscription at your earliest convenience.</p>
                            <p style="color: #718096; font-size: 14px; line-height: 1.7; margin: 0;">If you have already renewed your subscription, please disregard this notice.</p>
                            <div style="margin-top: 35px; padding-top: 25px; border-top: 2px solid #e2e8f0;">
                                <a href="{{$url}}" style="display: inline-block; background: #2c5282; color: #ffffff; text-decoration: none; padding: 14px 35px; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; letter-spacing: 0.5px;">RENEW SUBSCRIPTION</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #1a365d; padding: 25px 40px;">
                            <table role="presentation" style="width: 100%;">
                                <tr>
                                    <td style="color: #90cdf4; font-size: 12px;">
                                        © {{ date('Y') }} {{$name}}
                                    </td>
                                    <td style="text-align: right; color: #90cdf4; font-size: 12px;">
                                        Professional Services
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
