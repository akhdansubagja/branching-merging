<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    background-color: #f8f9fa; 
    font-family: Arial, sans-serif; 
}

.container {
    margin-top: 50px;
    background-color: #ffffff; 
    padding: 30px; 
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); 
}

h1 {
    text-align: center; 
    color: #343a40; 
    margin-bottom: 30px; 
}

.btn-outline-primary {
    border-radius: 5px; 
    transition: background-color 0.3s, color 0.3s; 
}

.btn-outline-primary:hover {
    background-color: #007bff; 
    color: white; 
}

.form-label {
    font-weight: bold; 
    color: #495057; 
}

.form-control {
    border-radius: 5px; 
    transition: border-color 0.3s; 
}

.form-control:focus {
    border-color: #007bff; 
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
}

.btn-primary {
    border-radius: 5px; 
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3; 
}
    </style>
</head>
<body>

    <div class="container">
        <h1>Tambah Produk</h1>
        <div class="text-center mb-4">
            <a href="show.php" class="btn btn-outline-primary">Lihat Data Produk</a>
        </div>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input nama produk" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Input harga produk" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar</label>
                <input class="form-control" type="file" id="image" name="image" required>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
            </div>
        </form>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
