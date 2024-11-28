<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
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

.table {
    border-radius: 10px; 
    overflow: hidden; 
}

.table th {
    background-color: #007bff; 
    color: white; 
}

.table td {
    vertical-align: middle; 
}

.btn-success {
    border-radius: 5px; 
}

.btn-primary, .btn-warning, .btn-danger {
    border-radius: 5px; 
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3; 
}

.btn-warning:hover {
    background-color: #e0a800; 
}

.btn-danger:hover {
    background-color: #c82333;
}

.text-end {
    margin-bottom: 20px; 
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Produk</h1>
        <div class="text-end mb-3">
            <a href="create.php" class="btn btn-success">Tambah Produk</a>
        </div>
        <table class="table table-bordered table-striped text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar Produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require './config/db.php';

                    $products = mysqli_query($db_connect, "SELECT * FROM products");
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($products)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['name']); ?></td>
                    <td>Rp <?= number_format($row['price'], 0, ',', '.'); ?></td>
                    <td>
                        <a href="./upload/<?= htmlspecialchars($row['image']); ?>" target="_blank" class="btn btn-primary btn-sm">Unduh</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
