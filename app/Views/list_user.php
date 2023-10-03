<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<body>
    <center>
    <br>
    <h3>Tugas Praktikum Web Lanjut</h3>
    <br>
    </center>
    <table class="table table-bordered">
        <thead>
            <tr class="table-primary" align="center">
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $user){
                ?>
                <tr class="table-secondary" align="center">
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td><button type="button" class="btn btn-info">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
        
</body>
</div>

<?= $this->endSection() ?>