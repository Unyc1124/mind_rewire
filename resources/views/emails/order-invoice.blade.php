<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Invoice</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f7f9fc; padding:20px;">

    <div style="max-width:600px; margin:auto; background:#ffffff; padding:24px; border-radius:8px;">

        <h2 style="color:#1D3D91;">Payment Successful 🎉</h2>

        <p>Hi {{ $order->customer_name }},</p>

        <p>Thank you for your purchase from <strong>Mind Rewire</strong>.</p>

        <hr>

        <h3>Order Details</h3>
        <p><strong>Order ID:</strong> {{ $order->order_number }}</p>
        <p><strong>Status:</strong> Paid</p>

        <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
            <thead>
                <tr style="background:#f1f5ff;">
                    <th align="left">Product</th>
                    <th align="center">Qty</th>
                    <th align="right">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->product_name }}</td>
                    <td align="center">{{ $item->quantity }}</td>
                    <td align="right">₹{{ number_format($item->total, 0) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <hr>

        <h3>Total Paid: ₹{{ number_format($order->total_amount, 0) }}</h3>

        <p style="margin-top:20px;">
            If you have any questions, reply to this email.
        </p>

        <p>— Mind Rewire Team</p>

    </div>

</body>
</html>
