<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .error-container {
            text-align: center;
        }

        .error-code {
            font-size: 72px;
            font-weight: bold;
            color: #333;
        }

        .error-message {
            font-size: 24px;
            color: #555;
        }

        .back-home {
            margin-top: 20px;
            text-decoration: none;
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="error-container">
    <div class="error-code">404</div>
    <div class="error-message">Oops! Page not found.</div>
    <a href="{{ url('/') }}" class="back-home m-t-20">Back to Home</a>
</div>

</body>
</html>
