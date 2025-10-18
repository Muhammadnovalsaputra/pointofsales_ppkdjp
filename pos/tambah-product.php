<?php
require_once "config/koneksi.php";

// Ambil data kategori dari database
$selectCategory = mysqli_query($koneksi, "SELECT id, category_name FROM categories");
$categories = mysqli_fetch_all($selectCategory, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Product</title>
</head>

<body>
    <h1>Tambah Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Category Name</label><br>
        <select name="category_id" required>
            <option value="">--Pilih Kategori--</option>
            <?php foreach ($categories as $c): ?>
                <option value="<?php echo $c['id']; ?>">
                    <?php echo htmlspecialchars($c['category_name']); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <label for="">Nama Produk</label><br>
        <input type="text" name="product_name" placeholder="Masukkan nama produk" required><br><br>

        <label for="">Harga</label><br>
        <input type="number" name="price" placeholder="Masukkan harga" required><br><br>

        <label for="">Upload Gambar</label><br>
        <input type="file" name="image" accept="image/*" required><br><br>

        <button type="submit" name="submit">Simpan Produk</button>
    </form>
</body>

</html>