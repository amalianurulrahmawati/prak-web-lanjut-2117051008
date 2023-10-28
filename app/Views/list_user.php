<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Web Lanjut</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/kelas">Kelas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/user">User</a>
            </li>
        </div>
    </div>
    </nav>
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