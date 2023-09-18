<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
    </head>
   
    <body>
        <div class="container">
            <form action="<?= base_url('/user/store')?>"method="post">
            <form>
                <label>Nama</label><br>
                <input type="text" name="nama"><br>
                <label>Kelas</label><br>
                <input type="text" name="kelas"><br>
                <label>NPM</label><br>
                <input type="text" name="npm"><br>
                <button>Submit</button>
            </form>
            </form>
        </div>     
    </body>
</html>