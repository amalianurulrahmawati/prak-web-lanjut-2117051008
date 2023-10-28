<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
    <body>
        <div class="container">
        <form action="<?= base_url('/user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT">
        <img src="<?= $user['foto'] ?? '<default-foto>' ?>" class="rounded" width="200px">
        <div>
            <input type="file" name="foto" id="foto">
        </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="nama"  id="nama" type="text" placeholder="nama" value="<?= $user['nama'] ?>" />
                <label for="nama" >Nama</label>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" name="npm" id="npm" type="number" placeholder="npm" value="<?= $user['npm'] ?>" />
                <label for="npm">NPM</label>
            </div>
            <select class="form-select" name="kelas" id="kelas" >
            <label for="kelas">Kelas</label>
                <?php
                foreach ($kelas as $item){
                    ?>
                    <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                        <?= $item['nama_kelas'] ?>
                    </option>
                <?php
                }
                ?>
            </select>
            <br><br>

            <!-- <label>NPM</label><br> -->
            <!-- <input type="text" name="npm"><br> -->
            
            <!-- <label class="input-group-text"  for="foto">Upload</label>
                <input type="file" class="form-control" name='foto' id="foto"> -->
                <button type="submit">Submit</button>              
        </form>
            
        </div>     
    </body>
</div>
<?= $this->endSection() ?>