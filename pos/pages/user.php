<?php
require_once 'config/koneksi.php';

$query = mysqli_query($koneksi, "SELECT r.name AS role_name,u.*
FROM users u LEFT JOIN roles r ON r.id = u.role_id WHERE deleted_at IS NULL ORDER BY u.id DESC");

$users = mysqli_fetch_all($query, MYSQLI_ASSOC);

// disini parameter delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "UPDATE users SET deleted_at=now() WHERE id=$id");
    // redirect
    header("location:user.php?hapus=berhasil");
}

?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Data User</h3>
                <div class="mb-3" align="right">
                    <a href="?page=tambah-user" class="btn btn-primary">
                        <i class="bi bi-plus-circle p-2"> Add User</i>
                    </a>
                </div>
                <table class="table table-bordered table-striped">
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
                                <a class="btn btn-success btm-sm" href="tambah-user.php?edit=<?php echo $value['id'] ?>"> <i class="bi bi-pencil"></i> </a>
                                <a class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus data ini?')"
                                    href="user.php?delete=<?php echo $value['id'] ?>">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbbody>
                </table>
            </div>
        </div>
    </div>
</div>