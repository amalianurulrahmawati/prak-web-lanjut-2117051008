<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
    <body>
        <div class="container">
        <form action="<?= base_url('/kelas/store') ?>" method="POST" enctype="multipart/form-data">
        <label for="floatingInput">Nama Kelas</label>

                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" name="nama_kelas" id="floatingInput" placeholder="Nama Kelas"">
                                
                
                <!-- <label class="input-group-text"  for="foto">Upload</label> -->
                    
                    <button type="submit">Submit</button>
                            
            </form>
            
        </div>     
    </body>
</div>
<?= $this->endSection() ?>