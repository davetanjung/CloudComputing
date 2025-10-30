<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
</head>
<body style="background-color: #f3f4f6; font-family: sans-serif; margin: 0; padding: 0;">

<!-- Main Container Table (Full width container for background color and centering) -->
<table style="width: 100%; background-color: #f3f4f6;" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center" style="padding: 20px;">
            <!-- Content Card (Max width container) -->
            <table style="max-width: 600px; width: 100%; background-color: #ffffff; border-radius: 8px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);" cellpadding="0" cellspacing="0" role="presentation">
                
                <!-- Logo/Header -->
                <tr>
                    <td align="center" style="padding: 24px; border-bottom: 1px solid #e5e7eb;">
                        <h1 style="font-size: 24px; font-weight: 800; color: #2563eb; margin: 0;">Cloud Computing</h1>
                        <p style="font-size: 14px; color: #6b7280; padding-top: 4px; margin: 0;">Registration Confirmed</p>
                    </td>
                </tr>

                <!-- Greeting -->
                <tr>
                    <td style="padding: 24px;">
                        <p style="font-size: 18px; color: #1f2937; margin: 0;">
                            Hi <strong style="font-weight: 600;">{{ $name }}</strong>,
                        </p>
                    </td>
                </tr>
                
                <!-- Main Message -->
                <tr>
                    <td style="padding-left: 24px; padding-right: 24px; padding-bottom: 16px;">
                        <p style="font-size: 16px; color: #374151; line-height: 1.5; margin: 0;">
                            Thank you for successfully registering your account! You are one step closer to accessing our cloud platform. Here are your details:
                        </p>
                    </td>
                </tr>

                <!-- Details Section -->
                <tr>
                    <td style="padding-left: 24px; padding-right: 24px; padding-bottom: 24px;">
                        <table style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px;" cellpadding="12" cellspacing="0" role="presentation">
                            <!-- 1. Full Name Row -->
                            <tr>
                                <td style="font-size: 14px; font-weight: 600; color: #4b5563; background-color: #f9fafb; width: 33.333333%;">
                                    Full Name:
                                </td>
                                <td style="font-size: 16px; font-weight: 500; color: #1f2937; background-color: #ffffff; border-bottom: 1px solid #e5e7eb;">
                                    {{ $name }}
                                </td>
                            </tr>
                            <!-- 2. Email Row -->
                            <tr>
                                <td style="font-size: 14px; font-weight: 600; color: #4b5563; background-color: #f9fafb; width: 33.333333%;">
                                    Registered Email:
                                </td>
                                <td style="font-size: 16px; font-weight: 500; color: #1f2937; background-color: #ffffff; border-bottom: 1px solid #e5e7eb;">
                                    {{ $email }}
                                </td>
                            </tr>
                            <!-- 3. Birth Date Row -->
                            <tr>
                                <td style="font-size: 14px; font-weight: 600; color: #4b5563; background-color: #f9fafb; width: 33.333333%;">
                                    Birth Date:
                                </td>
                                <td style="font-size: 16px; font-weight: 500; color: #1f2937; background-color: #ffffff; border-bottom: 1px solid #e5e7eb;">
                                    {{ $birth_date }}
                                </td>
                            </tr>
                            <!-- 4. Course Row (New Static Entry) -->
                            <tr>
                                <td style="font-size: 14px; font-weight: 600; color: #4b5563; background-color: #f9fafb; width: 33.333333%;">
                                    Course:
                                </td>
                                <td style="font-size: 16px; font-weight: 500; color: #1f2937; background-color: #ffffff;">
                                    Cloud computing 2025
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Call to Action Button -->
                <tr>
                    <td align="center" style="padding: 24px; padding-top: 0;">
                        <a href="#" target="_blank" style="display: inline-block; background-color: #2563eb; color: #ffffff; font-weight: 700; padding: 12px 24px; border-radius: 8px; font-size: 16px; text-decoration: none; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.06);">
                            Confirm Registration
                        </a>
                    </td>
                </tr>
                
                <!-- Footer Text / Custom Message -->
                <tr>
                    <td style="padding-left: 24px; padding-right: 24px; padding-bottom: 24px; font-size: 14px; color: #4b5563; line-height: 1.5;">
                        <p style="margin: 0;">If you have any questions, please reply to this email.</p>
                    </td>
                </tr>

            </table>

            <!-- Copyright/Unsubscribe Footer (Outside Card) -->
            <table style="width: 100%; max-width: 600px;" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                    <td align="center" style="padding-top: 16px; font-size: 12px; color: #9ca3af;">
                        © {{ date('Y') }} Cloud Computing Platform. Designed by Dave. All rights reserved.
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>

</body>
</html>
