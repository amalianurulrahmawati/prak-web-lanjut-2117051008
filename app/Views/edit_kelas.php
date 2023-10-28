<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
    <body>
        <div class="container">
        <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input type="hidden" name="_method" value="PUT">
            <div class="form-floating mb-3">
                <input class="form-control" name="nama_kelas"  id="nama_kelas" type="text" placeholder="Nama Kelas" value="<?= $kelas['nama_kelas'] ?>" />
                <label for="nama_kelas" >Nama Kelas</label>
            </div>
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