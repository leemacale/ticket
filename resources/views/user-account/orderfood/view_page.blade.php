<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order View</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .back-button {
            font-size: 16px;
            text-decoration: none;
            color: #666;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .back-button:hover {
            color: #000;
        }

        .back-button::before {
            content: '\2190'; /* Left Arrow Unicode */
            margin-right: 8px;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: 20px auto;
        }

        .orders, .summary {
            padding: 10px;
        }

        .orders {
            flex: 2;
            padding-right: 20px;
        }

        .orders h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 0;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 5px;
        }

        .order-item span {
            display: flex;
            gap: 10px;
        }

        .order-item button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #666;
        }

        .order-item button:hover {
            color: #000;
        }

        .summary {
            flex: 1;
            border-left: 1px solid #e0e0e0;
            padding-left: 20px;
        }

        .summary p {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .checkout-btn {
            display: block;
            text-align: center;
            background-color: #888;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .checkout-btn:hover {
            background-color: #555;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                flex-direction: column; /* Stack elements vertically */
                padding: 10px;
            }

            .orders, .summary {
                flex: 1;
                border-left: none;
                padding: 10px;
            }

            .orders h2 {
                font-size: 18px;
            }

            .order-item strong, .order-item span {
                font-size: 14px;
            }

            .checkout-btn {
                font-size: 14px;
                padding: 8px;
            }

            .back-button {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 10px;
            }

            .orders h2 {
                font-size: 16px;
            }

            .order-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .order-item span {
                margin-top: 5px;
            }

            .checkout-btn {
                width: 100%; /* Full width for mobile */
            }

            .summary h3 {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
    <a href="javascript:history.back();" class="back-button">Back</a>    </div>

    <!-- Content -->
    <div class="content">
        <div class="orders">
            <h2>My Orders</h2>
            <!-- Order Items -->
            <div class="order-item">
                <strong>Yum Burger</strong>
                <span>
                    <span>40 php</span>
                    <button title="Edit">&#9998;</button> <!-- Edit Icon -->
                    <button title="Remove">&#128465;</button> <!-- Trash Icon -->
                </span>
            </div>
            <div class="order-item">
                <strong>Coke Float</strong>
                <span>
                    <span>45 php</span>
                    <button title="Edit">&#9998;</button> <!-- Edit Icon -->
                    <button title="Remove">&#128465;</button> <!-- Trash Icon -->
                </span>
            </div>
        </div>

        <!-- Summary -->
        <div class="summary">
            <p><strong>Total:</strong> <span>85 php</span></p>
            <button class="checkout-btn">Checkout</button>
        </div>
    </div>
</body>
</html>
