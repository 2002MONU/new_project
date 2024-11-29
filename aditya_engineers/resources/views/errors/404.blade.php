<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page Not Found</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url({{asset('dash_assets/images/login-bg.jpg')}}); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            height: 100vh;
            margin: 0;
        }
        .not-found-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
            backdrop-filter: blur(5px);
            background-color: rgba(0, 0, 0, 0.5); /* Optional overlay for better text readability */
        }
        .not-found-content {
            max-width: 600px;
        }
        a.btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        a.btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="container not-found-container">
        <div class="not-found-content">
            <h1 class="display-4">Page Not Found</h1>
            <p class="lead">The page you are looking for does not exist.</p>
            <p><i class="fas fa-exclamation-triangle fa-3x"></i></p>
            <a href="{{route('website.index')}}" class="btn btn-primary btn-lg mt-3">Go Back to Home</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
