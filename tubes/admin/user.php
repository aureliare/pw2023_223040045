<?php
require '../config.php';

$users = query("SELECT * FROM users");

?>

<?php require 'partials/head.php'; ?>

<main class="mt-5 pt-3">
    <div class="container-fluid">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['password'] ?></td>
                        <td><?= $user['level'] ?></td>
                        <td>
                            <a href="ubah_user.php?id=<?= $user['id']; ?>"><i class="fa-solid fa-pen-to-square" style="color: #0f131a;"></i></a>|
                            <a href="hapus_user.php?id=<?= $user['id']; ?>"><i class="fa-sharp fa-solid fa-trash" style="color: #0a0c10;"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php require('partials/footer.php'); ?>