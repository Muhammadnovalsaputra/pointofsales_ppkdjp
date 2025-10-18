<!-- jika form menggunakan POST -->
<?php

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id' ");
$rowEdit = mysqli_fetch_assoc($queryEdit);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($password) {
        $query = mysqli_query($koneksi, "UPDATE users 
        SET name ='$name',email='$email',password='$password' WHERE id='$id' ");
    } else {
        $query = mysqli_query($koneksi, "UPDATE users 
        SET name ='$name',email='$email' WHERE id='$id'");
    }

    if ($query) {
        header("location:user.php?ubah=berhasil");
    }
}

if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "INSERT INTO users (name , email , password) VALUES ('$name','$email','$password')");

    if ($query) {
        header("location:user.php?tambah=berhasil");
    }
};





?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">
                    <?php echo isset($_GET['edit']) ? 'Edit' : 'Add' ?>User
                </h3>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Name *</label>
                        <input type="text" class="form-control"
                            name="name" id="" placeholder="Enter Your Name" required value="<?php echo $rowEdit['name'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Email *</label>
                        <input type="email" class="form-control"
                            name="email" id="" placeholder="Enter Your email" required value="<?php echo $rowEdit['email'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Password *<small>Kosongkan jika tidak ingin mengubah</small></label>

                        <input type="password" class="form-control" name="password" id="" placeholder="Enter Your password">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" name="<?php echo ($id) ? 'update' : 'simpan' ?>">
                            <?php echo ($id) ? 'simpan perubahan' : 'simpan' ?> </button>
                        <a href="?pager=user" class="text-muted btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>