{{-- Royal Purple Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage Warning</title>
</head>
<body style="margin: 0; padding: 0; font-family: Georgia, 'Times New Roman', serif; background: linear-gradient(180deg, #faf5ff 0%, #ffffff 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 580px; max-width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 4px; overflow: hidden; box-shadow: 0 15px 50px rgba(126,34,206,0.15); border: 2px solid #d4af37;">
                    <!-- Royal Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #7e22ce 0%, #581c87 100%); padding: 50px 40px; text-align: center;">
                            <div style="color: #d4af37; font-size: 14px; letter-spacing: 4px; margin-bottom: 15px;">✦ NOTICE ✦</div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 400; font-family: Georgia, serif;">📊 Traffic Alert</h1>
                        </td>
                    </tr>
                    <!-- Gold Accent -->
                    <tr>
                        <td style="height: 5px; background: linear-gradient(90deg, #d4af37, #f4e4bc, #d4af37);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: #44337a; font-size: 16px; line-height: 1.9; margin: 0 0 20px;">Dear Esteemed Customer,</p>
                            <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border: 2px solid #d4af37; padding: 20px; margin: 25px 0;">
                                <p style="color: #92400e; font-size: 16px; font-weight: 600; margin: 0; text-align: center;">
                                    👑 You have used <strong>80%</strong> of your royal traffic quota!
                                </p>
                            </div>
                            <!-- Royal Progress Bar -->
                            <div style="margin: 30px 0;">
                                <div style="background: #f3e8ff; border: 1px solid #d4af37; height: 16px; overflow: hidden;">
                                    <div style="background: linear-gradient(90deg, #d4af37, #f4e4bc); width: 80%; height: 100%;"></div>
                                </div>
                                <p style="color: #6b7280; font-size: 14px; text-align: center; margin: 12px 0 0;">80% consumed • Plan your kingdom wisely 👑</p>
                            </div>
                            <div style="text-align: center; margin-top: 40px;">
                                <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #d4af37 0%, #c9a227 100%); color: #581c87; text-decoration: none; padding: 16px 50px; font-weight: bold; font-size: 14px; letter-spacing: 1px; border-radius: 2px;">👑 VIEW DETAILS</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Royal Footer -->
                    <tr>
                        <td style="background: #581c87; padding: 25px 40px; text-align: center;">
                            <p style="margin: 0; color: #d4af37; font-size: 12px; letter-spacing: 2px;">👑 {{$name}} ROYAL © {{ date('Y') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
