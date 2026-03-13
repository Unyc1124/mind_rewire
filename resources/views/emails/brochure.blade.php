<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 30px auto; background: #fff; border-radius: 10px; overflow: hidden; }
        .header { background: linear-gradient(135deg, #1D3D91, #142b6b); padding: 30px; text-align: center; }
        .header h1 { color: #fff; margin: 0; font-size: 22px; }
        .header p { color: rgba(255,255,255,0.85); margin: 8px 0 0; font-size: 14px; }
        .body { padding: 30px; color: #333; }
        .body p { line-height: 1.7; font-size: 15px; }
        .highlight { color: #1D3D91; font-weight: bold; }
        .footer { background: #f9f9f9; padding: 20px 30px; text-align: center; font-size: 12px; color: #999; border-top: 1px solid #eee; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Mind Rewire</h1>
            <p>Clinical Psychology Internship</p>
        </div>
        <div class="body">
            <p>Dear <span class="highlight">{{ $lead->name }}</span>,</p>
            <p>Thank you for your interest in the <strong>Mind Rewire Clinical Psychology Internship</strong>!</p>
            <p>Please find the internship brochure attached to this email. It contains all the details about our program levels, eligibility, fees, and what you'll gain from this experience.</p>
            <p>If you have any questions, feel free to reach out to us at <a href="mailto:team.mindrewire@gmail.com" style="color:#1D3D91;">team.mindrewire@gmail.com</a></p>
            <p>We look forward to hearing from you!</p>
            <p>Warm regards,<br><strong>Team Mind Rewire</strong></p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} Mind Rewire. All rights reserved.
        </div>
    </div>
</body>
</html>