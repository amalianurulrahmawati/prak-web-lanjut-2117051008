<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css');?>">
</head>
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
<body>
<center>
<table>
    <center>
    <img src="<?=base_url("assets/img/amalia.jpg")?>" alt="" width="200px">
            <tr>
                <!-- <td>Nama</td>
                <td>:</td> -->
                <td>Nama : <?=$nama ?></td>
            </tr>
            <tr>
                <!-- <td>Kelas</td>
                <td>:</td> -->
                <td>Kelas : <?=$kelas ?></td>
            </tr>        
            <tr>
                <!-- <td>NPM</td>
                <td>:</td> -->
                <td>Npm : <?=$npm ?></td>
            </tr>
        <center>
    </table>
</center>

</body>
</html>