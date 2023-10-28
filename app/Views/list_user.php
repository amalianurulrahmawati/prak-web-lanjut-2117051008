<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<body>
    <center>
    <br>
    <h3>Tugas Praktikum Web Lanjut</h3>
    <br>
    </center>
    <a href="<?= base_url('user/create')?>" class="btn btn-primary">Tambah Data</a>
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
                    <td>
                        <a href="<?= base_url('user/' . $user['id']) ?>" >Detail</a>
                        <a href="<?= base_url('/user/'. $user['id'] . '/edit') ?>" type="button" class="btn btn-info">Edit</a>
                        <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
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