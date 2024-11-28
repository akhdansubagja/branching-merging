<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Background Gradien dengan transisi halus */
        body {
            background: linear-gradient(135deg, #74ebd5, #9face6);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        /* Container untuk form login */
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        /* Efek hover pada container */
        .login-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3);
        }

        /* Judul Login */
        h1 {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            color: #4e54c8;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Form input */
        .form-control {
            border-radius: 30px;
            padding: 15px;
            font-size: 1rem;
            box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, border 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 5px #6a11cb;
            border-color: #6a11cb;
        }

        /* Tombol Login */
        .btn-primary {
            border-radius: 30px;
            padding: 12px 20px;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            border: none;
            font-size: 1rem;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
            width: 100%;
        }

        /* Efek hover pada tombol */
        .btn-primary:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb);
            transform: scale(1.05);
        }

        /* Form group spacing */
        .form-group {
            margin-bottom: 20px;
        }

        /* Teks footer dengan link */
        .form-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #555;
        }

        .form-footer a {
            color: #2575fc;
            text-decoration: none;
            font-weight: bold;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
            }

            h1 {
                font-size: 1.8rem;
            }

            .form-control {
                font-size: 0.9rem;
                padding: 12px;
            }

            .btn-primary {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login</h1>
        <form action="./backend/login.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name="submit" class="btn btn-primary">
            </div>
        </form>

        <!-- Tautan footer -->
        <div class="form-footer">
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </div>

    <!-- Link ke Bootstrap JS dan dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
