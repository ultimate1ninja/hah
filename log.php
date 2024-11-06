<?php
// log.php - Page that shows all logged IPs from the ip_log.txt file

// Read the IP log file
$ip_log = file_get_contents('ip_log.txt');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Log</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .container {
            margin-top: 20px;
        }
        .log-display {
            font-size: 16px;
            color: #2d87f0;
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
            white-space: pre-wrap; /* Maintains formatting */
        }
        .back-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>IP Log</h1>
    <p>Here are the logged IP addresses of users who visited the website:</p>

    <div class="container">
        <div class="log-display">
            <?php
                // Display the contents of the IP log
                echo nl2br($ip_log);
            ?>
        </div>

        <a href="index.php" class="back-button">Back to Homepage</a>
    </div>

</body>
</html>
