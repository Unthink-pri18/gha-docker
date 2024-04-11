<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Number Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .number {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
      <h1>> Priyanshu Bhatt <h1>
        <?php
        $randomNumber = rand(); // Generate a random integer
        echo '<div class="number">Random Number: ' . $randomNumber . '</div>';
        ?>
    </div>
</body>
</html>
