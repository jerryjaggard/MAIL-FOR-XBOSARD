{{-- Corporate Business Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage Report</title>
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
                        <td style="background: #dd6b20; padding: 15px 40px;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 18px; font-weight: normal; letter-spacing: 1px;">📊 TRAFFIC USAGE ALERT</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <p style="color: #2d3748; font-size: 15px; line-height: 1.9; margin: 0 0 20px;">Dear Valued Customer,</p>
                            <div style="background: #fffbeb; border-left: 4px solid #dd6b20; padding: 20px; margin: 25px 0;">
                                <p style="color: #c05621; font-size: 16px; font-weight: bold; margin: 0;">
                                    NOTICE: You have consumed 80% of your monthly traffic allocation.
                                </p>
                            </div>
                            <!-- Progress Indicator -->
                            <div style="margin: 30px 0;">
                                <table role="presentation" style="width: 100%; border-collapse: collapse;">
                                    <tr>
                                        <td style="background: #e2e8f0; height: 12px; border-radius: 6px;">
                                            <div style="background: linear-gradient(90deg, #2c5282, #dd6b20); width: 80%; height: 12px; border-radius: 6px;"></div>
                                        </td>
                                    </tr>
                                </table>
                                <p style="color: #4a5568; font-size: 14px; text-align: right; margin: 10px 0 0;">80% Utilized</p>
                            </div>
                            <p style="color: #2d3748; font-size: 15px; line-height: 1.9; margin: 0;">We recommend monitoring your usage to avoid any service interruption before your next billing cycle.</p>
                            <div style="margin-top: 35px; padding-top: 25px; border-top: 2px solid #e2e8f0;">
                                <a href="{{$url}}" style="display: inline-block; background: #2c5282; color: #ffffff; text-decoration: none; padding: 14px 35px; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; letter-spacing: 0.5px;">VIEW USAGE DETAILS</a>
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
