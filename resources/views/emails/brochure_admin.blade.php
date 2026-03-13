<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 30px auto; background: #fff; border-radius: 10px; overflow: hidden; }
        .header { background: linear-gradient(135deg, #1D3D91, #142b6b); padding: 24px 30px; }
        .header h1 { color: #fff; margin: 0; font-size: 20px; }
        .body { padding: 30px; }
        .field { margin-bottom: 16px; }
        .label { font-size: 12px; color: #888; text-transform: uppercase; letter-spacing: 0.05em; }
        .value { font-size: 16px; color: #222; font-weight: 600; margin-top: 2px; }
        .footer { background: #f9f9f9; padding: 16px 30px; text-align: center; font-size: 12px; color: #999; border-top: 1px solid #eee; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔔 New Brochure Request</h1>
        </div>
        <div class="body">
            <div class="field">
                <div class="label">Name</div>
                <div class="value">{{ $lead->name }}</div>
            </div>
            <div class="field">
                <div class="label">Email</div>
                <div class="value">{{ $lead->email }}</div>
            </div>
            <div class="field">
                <div class="label">Phone</div>
                <div class="value">{{ $lead->phone }}</div>
            </div>
            <div class="field">
                <div class="label">Submitted At</div>
                <div class="value">{{ $lead->created_at->format('d M Y, h:i A') }}</div>
            </div>
        </div>
        <div class="footer">
            Mind Rewire Admin Notification
        </div>
    </div>
</body>
</html>