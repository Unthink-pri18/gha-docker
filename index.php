<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instance Private IP Display</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            margin-bottom: 0.5em;
        }
        p {
            font-size: 1.2em;
            margin-top: 0;
        }
        .ip-address {
            font-weight: bold;
            font-size: 1.5em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Instance Information, TASK BY PRIYANSHU BHATT</h1>
        <p>Private IP:
            <span class="ip-address"><?php echo getenv('INSTANCE_PRIVATE_IP') ?: 'Not available'; ?></span>
        </p>
    </div>
</body>
</html>
