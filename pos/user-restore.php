<?php
require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT r.name AS role_name, u.* FROM users u LEFT JOIN roles AS r ON r.id = u.role_id WHERE u.deleted_at IS NOT NULL ORDER BY u.id DESC");

$users = mysqli_fetch_all($query, MYSQLI_ASSOC);

// disini parameter delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM users WHERE id=$id");
    // redirect
    header("location:user.php?hapus=berhasil");
}

if (isset($_GET['restore'])) {
    $id = $_GET['restore'];
    $restore = mysqli_query($koneksi, "UPDATE users SET deleted_at=null WHERE id=$id");
    header("location:user.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>

<body>
    <h1 style="text-align: center; color: rebeccapurple; margin: 5px;">Restore data user</h1>
    <div class="right">
        <a href="user.php">Back</a>
        <a href="user-restore.php">Restore</a>
        <br>
    </div>
    <table class="table" border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbbody>
        </tbbody>
        <?php
        foreach ($users as $key => $value): ?>

            <tr>
                <td><?php echo $key += 1 ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['role_name'] ?></td>
                <td>
                    <a href="user-restore.php?restore=<?php echo $value['id'] ?>"
                        onclick="return confirm('apakah anda yakin akan merestore data ini?')"> RESTORE DATA |</a>
                    <a onclick="return confirm('apakah anda yakin akan menghapus data ini?')"
                        href="user-restore.php?delete=<?php echo $value['id'] ?>">
                        HAPUS
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbbody>
    </table>

</body>

</html>