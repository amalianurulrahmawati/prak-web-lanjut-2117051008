<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
   
    <body>
        <div class="container">
            <form action="<?= base_url('/user/store')?>"method="post">
            
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

                <!-- <label>NPM</label><br>
                <input type="text" name="npm"><br> -->
                

                <input type="" name="npm" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : '' ; ?>" id="npm">
                            <div class="invalid-feedback">
                                <?= $validation->getError('npm'); ?>
                </div>


                                <button type="submit">Submit</button>
                            
            </form>
            
        </div>     
    </body>
</html>