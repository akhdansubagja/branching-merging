<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: lavender;
            font-family: 'Arial', sans-serif;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 100px;
        }


        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }

    
        .form-control {
            border-radius: 30px;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ddd;
        }

        
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 30px;
            padding: 12px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        
        .btn-custom:hover {
            background-color: #0056b3;
            color: #fff;
        }

        
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="form-container">
        <h1>Register</h1>
        <form action="./backend/register.php" method="post">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm" class="form-control" placeholder="Masukkan konfirmasi password Anda" required>
            </div>
            <button type="submit" name="submit" class="btn btn-custom btn-block">Register</button>
        </form>
        <div class="form-footer">
            <p>Sudah punya akun? <a href="index.php">Login di sini</a></p>
        </div>
    </div>

    <!-- Link ke Bootstrap JS dan dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
