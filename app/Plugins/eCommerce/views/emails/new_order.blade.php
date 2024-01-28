<html>
<head>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-collapse: collapse;
        }
        .header {
            background-color: #3A386F;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }
        .header img {
            max-width: 100%; /* Ensure the image is responsive */
            height: auto; /* Maintain aspect ratio */
        }
        .email-table {
            width: 100%;
            border-collapse: collapse;
        }
        .email-table th,
        .email-table td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        .email-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .email-table tr:hover {
            background-color: #f1f1f1;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #888;
        }
        .total-row {
            font-weight: bold;
            background-color: #e9e9e9;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .align-right {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="header">
            <!-- Add your PHP code here to echo the image source -->
            <img src="<?php echo asset(config('settings.theme')) ?>/assets/img/preview/team/goldenlease-logo-2-3.png" alt="Company Logo">
            <h1 style="display: inline-block; vertical-align: middle; margin-left: 20px;">Order Confirmation</h1>
        </div>
        <table class="email-table">
            <tr>
                <td>Order id</td>
                <td>{{$orderId ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{$request->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$request->email}}</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>{{$request->message ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{$request->phone ?? 'N/A'}}</td>
            </tr>
            <tr>
                <td>Payment options</td>
                <td>{{$request->payment}}</td>
            </tr>
            <tr class="total-row">
                <td><b>Extras</b></td>
                <td class="align-right">
                    @if($ecommerce_cart['names']['extras'] ?? false)
                        @foreach($ecommerce_cart['names']['extras'] as $item)
                            {{$item['name']}}: {{formatted_price($item['price'])}}<br>
                        @endforeach
                    @endif
                </td>
            </tr>
            <tr class="total-row">
                <td><b>Total</b></td>
                <td class="align-right">{{ formatted_price($ecommerce_cart['total_price'])}}</td>
            </tr>
        </table>
        <div class="footer">
            <p>Thank you for your purchase!</p>
            <a href="#" class="button">View Your Order</a>
        </div>
    </div>
</body>
</html>
