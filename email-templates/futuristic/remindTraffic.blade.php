{{-- Futuristic Tech Template - Traffic Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Trebuchet MS', Arial, sans-serif; background: linear-gradient(135deg, #0a192f 0%, #112240 50%, #0a192f 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 620px; max-width: 100%; border-collapse: collapse; background: linear-gradient(180deg, rgba(17,34,64,0.95) 0%, rgba(10,25,47,0.95) 100%); border-radius: 20px; overflow: hidden; border: 1px solid rgba(251,191,36,0.4); box-shadow: 0 25px 50px rgba(0,0,0,0.5), 0 0 80px rgba(251,191,36,0.1);">
                    <!-- Alert Header -->
                    <tr>
                        <td style="background: linear-gradient(90deg, rgba(251,191,36,0.1) 0%, rgba(251,191,36,0.2) 50%, rgba(251,191,36,0.1) 100%); padding: 50px 40px; text-align: center; border-bottom: 1px solid rgba(251,191,36,0.3);">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, rgba(251,191,36,0.2), rgba(251,191,36,0.1)); border-radius: 50%; margin: 0 auto 25px; border: 2px solid rgba(251,191,36,0.4); display: flex; align-items: center; justify-content: center;">
                                <span style="font-size: 50px;">📡</span>
                            </div>
                            <div style="font-size: 11px; color: #fbbf24; letter-spacing: 5px; margin-bottom: 15px;">◈ BANDWIDTH MONITOR ◈</div>
                            <h1 style="margin: 0; color: #ccd6f6; font-size: 30px; font-weight: 300;">Traffic Alert</h1>
                        </td>
                    </tr>
                    <!-- Alert Lines -->
                    <tr>
                        <td style="height: 3px; background: linear-gradient(90deg, transparent 0%, #fbbf24 20%, #64ffda 50%, #fbbf24 80%, transparent 100%);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px;">
                            <p style="color: #64ffda; font-size: 16px; line-height: 1.8; margin: 0 0 20px;">// SYSTEM REPORT</p>
                            <div style="background: linear-gradient(135deg, rgba(251,191,36,0.1) 0%, rgba(251,191,36,0.15) 100%); padding: 30px; border-radius: 12px; margin: 30px 0; border: 1px solid rgba(251,191,36,0.3);">
                                <p style="color: #fbbf24; font-size: 18px; font-weight: 500; margin: 0; text-align: center;">
                                    📊 BANDWIDTH USAGE: <span style="text-shadow: 0 0 15px rgba(251,191,36,0.8);">80%</span><br>
                                    <span style="font-size: 14px; color: #8892b0;">// Resource allocation threshold reached</span>
                                </p>
                            </div>
                            <!-- Futuristic Progress Bar -->
                            <div style="margin: 40px 0;">
                                <div style="background: rgba(100,255,218,0.1); border: 1px solid rgba(100,255,218,0.3); border-radius: 25px; height: 24px; overflow: hidden;">
                                    <div style="background: linear-gradient(90deg, #64ffda, #fbbf24); width: 80%; height: 100%; border-radius: 25px; box-shadow: 0 0 20px rgba(100,255,218,0.5);"></div>
                                </div>
                                <p style="color: #8892b0; font-size: 14px; text-align: center; margin: 15px 0 0;">// 80% consumed • Optimize resource allocation</p>
                            </div>
                            <div style="text-align: center; margin-top: 45px;">
                                <a href="{{$url}}" style="display: inline-block; background: transparent; color: #64ffda; text-decoration: none; padding: 18px 60px; border: 2px solid #64ffda; border-radius: 50px; font-weight: 500; font-size: 15px; letter-spacing: 2px; text-shadow: 0 0 10px rgba(100,255,218,0.5); box-shadow: 0 0 30px rgba(100,255,218,0.2);">◈ VIEW METRICS ◈</a>
                            </div>
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
