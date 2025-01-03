<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmed</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .message-container {
            text-align: center;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }
        .message-container h1 {
            font-family: 'Kanit', sans-serif;
            font-size: 32px;
            font-weight: 400; /* Ensures the text is not bold */
            color: black;
            margin-bottom: 10px;
        }
        .message-container p {
            font-family: 'Kanit', sans-serif;
            font-size: 18px;
            color: black;
        }
        .highlighted-link {
            color: #007bff; /* Blue color for the link */
            text-decoration: underline; /* Underline to indicate it's clickable */
            cursor: pointer; /* Change cursor to pointer on hover */
        }
    </style>
</head>
<body>

    <div class="message-container">
        <h1>Payment Confirmed!</h1>
        <p>We sent your receipt to your email. Please check it <a href="javascript:void(0);" class="highlighted-link" onclick="window.location.href='{{ route('user.notif-two') }}'">here</a>.</p>
    </div>

</body>
</html>
