<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
    <body>
        <div class="container">
        <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
            
                <label>Nama</label><br>
                <input type="text" name="nama"><br>
                <label>Kelas</label><br>
                <select type="text" name="kelas">
                    <?php
                    foreach ($kelas as $item){
                    ?>
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
                <br><br>

                <label>NPM</label><br>
                <!-- <input type="text" name="npm"><br> -->
                

                <input type="" name="npm" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : '' ; ?>" id="npm">
                    <div class="invalid-feedback">
                        <?= $validation->getError('npm'); ?>
                </div>
                <!-- <label class="input-group-text"  for="foto">Upload</label> -->
                    <input type="file" class="form-control" name='foto' id="foto">
                    <button type="submit">Submit</button>
                            
            </form>
            
        </div>     
    </body>
</div>
<?= $this->endSection() ?>