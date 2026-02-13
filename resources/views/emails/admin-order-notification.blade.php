<!-- <h2>New Order Received</h2>

<p><strong>Order Number:</strong> {{ $order->order_number }}</p>
<p><strong>Customer:</strong> {{ $order->customer_name }}</p>
<p><strong>Email:</strong> {{ $order->customer_email }}</p>
<p><strong>Total:</strong> ₹{{ $order->total_amount }}</p>

<h3>Items</h3>
<ul>
@foreach($order->items as $item)
    <li>{{ $item->product_name }} × {{ $item->quantity }}</li>
@endforeach
</ul> -->

<h2>🛒 New Order Received</h2>

<hr>

<h3>👤 Customer Details</h3>
<p><strong>Name:</strong> {{ $order->customer_name }}</p>
<p><strong>Email:</strong> {{ $order->customer_email }}</p>
<p><strong>Phone:</strong> {{ $order->customer_phone }}</p>

<p><strong>📍 Address:</strong><br>
{{ $order->shipping_address }}
</p>

<hr>

<h3>📦 Order Details</h3>
<p><strong>Order Number:</strong> {{ $order->order_number }}</p>
<p><strong>Total Amount:</strong> ₹{{ $order->total_amount }}</p>

<hr>

<h3>🧾 Items Ordered</h3>
<ul>
@foreach($order->items as $item)
    <li>
        {{ $item->product_name }} × {{ $item->quantity }}
        (₹{{ $item->price }})
    </li>
@endforeach
</ul>

<hr>

<p style="color:#555;font-size:12px;">
This is an automated admin notification.
</p>

