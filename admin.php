<?php 
session_start();
if ($_SESSION['role'] = 'admin') {
    
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrator</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
    background-color: #f8f9fa; 
    font-family: Arial, sans-serif; 
}

.container {
    margin-top: 50px; 
    background-color: #ffffff; 
    padding: 20px; 
    border-radius: 8px; 
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
}

h1 {
    color: #343a40; 
    margin-bottom: 30px; 
}

.btn-tambah-produk, .btn-logout {
    display: inline-block; 
    padding: 10px 20px; 
    margin-right: 10px; 
    border: none; 
    border-radius: 5px; 
    font-size: 16px; 
    text-decoration: none; 
}

.btn-tambah-produk {
    background-color: #28a745; 
    color: white; 
    transition: background-color 0.3s; 
}

.btn-logout {
    background-color: #dc3545; 
    color: white; 
    transition: background-color 0.3s;
}

.btn-tambah-produk:hover {
    background-color: #218838; 
}

.btn-logout:hover {
    background-color: #c82333;
}
    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat datang Administrator, <?php echo $_SESSION['name']; ?></h1>

        <!-- Tombol Tambah Produk -->
        <a href="create.php" class="btn-tambah-produk">Tambah Produk</a>

        <!-- Tombol Logout -->
        <a href="./backend/logout.php" class="btn-logout">Logout</a>
    </div>

    <!-- Link ke Bootstrap JS dan dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
