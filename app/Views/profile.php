<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>

</head> -->
<!-- <body>
    <div class="container">

        <div class="card" data-tilt>
        <table>
            <img src="img/amalia.jpg">
            <center>
                <tr>
                    <td>Nama : Amalia Nurul Rahmawati</td>
                </tr>
        
                <tr>
                    <td>Kelas : AB</td>
                </tr>
               
                <tr>
                    <td>NPM : 2117051008</td>
                </tr> 
            </center>   
        </table>
        </div>
    </div>
</body> -->

<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<body>
<center>
<table>
    <center>
        <div class="container">
            <div class="w-100 d-grid border gap-2" style="height: 100vh; place-content: center;">
                <div class="w-50 text-center border mx-auto">
                    <img src="<?= $user['foto'] ?? '<default-foto>' ?>"  alt="">
                </div>
                <center><div class="..."><?= $user['nama'] ?></div>
                <center><div class="..."><?= $user['npm'] ?></div>
                <center><div class="..."><?= $user['nama_kelas'] ?></div>
            </div>
        </div>
    <center>
</table>
</center>

</body>

<?= $this->endSection()?>