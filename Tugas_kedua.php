<?php 
  $balok = "Balok";
  $luas_balok  = "L=2 x(p.l+p.t+l.t)";
  $volume_balok= "V= p x l x t";
  $gambar_1 ="img/gif/balok.gif";
  
  $kerucut= "Kerucut";
  $Luas_kerucut  = "π·r2 + π·r·s" ;
  $volume_kerucut= "1/3 x Luas Alas x Tinggi ";
  $gambar_2="img/gif/kerucut.gif";

  $kubus= "Kubus";
  $Luas_kubus   = "6 x s²" ;
  $volume_kubus = "s x s x s ";
  $gambar_3="img/gif/kubus.gif";

  $limas= "Limas Segiempat";
  $Luas_limas   = "½ × a × t" ;
  $volume_limas = "1/3 × luas alas × tinggi ";
  $gambar_4="img/gif/Limas.gif";

  $Prisma= "Prisma";
  $Luas_prisma= " 2 x Luas Alas + Luas Selimut" ;
  $volume_prisma = "V= ½ x panjang x lebar x tinggi";
  $gambar_5="img/gif/prisma.gif";

  $tabung= "tabung";
  $Luas_tabung = "La = π × r × r" ;
  $volume_tabung= "V = π × r × r × t ";
  $gambar_6="img/gif/Tabung.gif";

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Tugas PWPB</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

      <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">

    <!-- LOGO AS -->
    <link rel="icon" href="img/logo.png">
    <style>


    .footer {
  width:100%;
  margin-top:80px;
  background-color: rgb(66,181,73);
  float:left;
  border-radius:30px 30px 0px 0px;
  bottom: 10px;

}

.footer p {
  color:#fff;
  text-align:center;
  float:center;
  margin: 15px;
}

.footer a{
  text-decoration:none;
  color:#fff;
}

.footer a:hover{
  color:#1565c0;
  font-size:12pt;
}

      .user{
        width: 150px;
        height: 150px;
        border-radius: 10%;
        object-fit: cover;
      }

      .tentang_user span{
        font-weight: 600;
        font-size: 24px;
      }
      .tentang_user p{
        font-weight: 300;
        font-size: 16px;
        letter-spacing: 1.5px;
      }
      .card-body{
        box-shadow: 2px 5px 10px rgba(0,0,0,0.1);
        border-radius: 10px;
      }
      .card{
        border-radius: 10px
      }

      nav a:hover{
        background: green;
        text-decoration: none;
        line-height: 100%;
        border-radius: 20px 20px 20px 20px;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 navbar-light border-bottom shadow-sm" style="background-color: rgb(66,181,73);">
        <h5 class="my-0 mr-md-auto font-weight-normal text-light" style="font-family: forte; font-size: 32px; margin: 40px;">Kelompok 7</h5>
        <nav class="my-2 my-md-0 mr-md-3">
           <a class="p-2 text-light" href="tugas_pertama.php">Tugas pertama</a>
           <a class="p-2 text-light" href="tugas_kedua.php">Tugas kedua</a>
           <a class="p-2 text-light" href="#">Tugas ketiga</a>
           <a class="p-2 text-light" href="#">Tugas keempat</a>
        </nav>
            <a class="btn btn-outline-light" href="index.php">Home</a>
    </div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4" style="font-family: forte;">Bangun Ruang</h1>
  <p class="lead">dibawah ini adalah kumpulan bangun ruang beserta rumus nya</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <!-- PROFILE 1 -->
      <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <!-- GAMBAR LO -->
            <img class="user" src=" <?= $gambar_1 ?>">
            <ul class="list-unstyled mt-3 mb-4">
              <div class="tentang_user">
                <span><?= $balok ?></span> <p>
                 <h6>Luas   : <?= $luas_balok ?>  <br><br>
                     Volume : <?= $volume_balok ?><br><br><br><br>
              </div>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lebih lanjut</button>
          </div>
      </div>
    <!-- END PROFILE 1 -->

    <!-- PROFILE 2 -->
      <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <!-- GAMBAR LO -->
            <img class="user" src="<?= $gambar_2 ?>">
            <ul class="list-unstyled mt-3 mb-4">
              <div class="tentang_user">
               <span><?=$kerucut ?></span> <p>
                 <h6>Luas : <?= $Luas_kerucut ?><br><br>
                     Volume : <?= $volume_kerucut ?><br><br><br></br>
              </div>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lebih lanjut</button>
          </div>
      </div>
    <!-- END PROFILE 2 -->

   <!-- PROFILE 3 -->
      <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <!-- GAMBAR LO -->
            <img class="user" src="<?= $gambar_3 ?>">
            <ul class="list-unstyled mt-3 mb-4">
              <!-- TENTANG USER -->
              <div class="tentang_user">
                <span><?=$kubus ?></span> <p>
                  <h6>Luas : <?= $Luas_kubus ?>  <br><br>
                      Volume : <?= $volume_kubus?><br><br><br><br>
              </div>
              </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lebih lanjut</button>
          </div>
      </div>

      </div>
      <div class="container">
      <div class="card-deck mb-3 text-center">


         <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <!-- GAMBAR LO -->
            <img class="user" src="<?= $gambar_4 ?>">
            <ul class="list-unstyled mt-3 mb-4">
              <!-- TENTANG USER -->
              <div class="tentang_user">
                <span><?=$limas ?></span> <p>
                  <h6>Luas : <?= $Luas_limas ?><br><br>
                      Volume : <?= $volume_limas ?><br><br><br><br>
              </div>      
              <!-- END OF TENTANG USER -->
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lebih lanjut</button>
          </div>
      </div>
    <!-- END PROFILE 3 -->
    <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <!-- GAMBAR LO -->
            <img class="user" src="<?= $gambar_5 ?>">
            <ul class="list-unstyled mt-3 mb-4">
              <!-- TENTANG USER -->
              <div class="tentang_user">
                <span><?= $Prisma ?></span> <p>
                  <h6>Luas : <?= $Luas_prisma ?><br><br>
                      Volume : <?= $volume_prisma ?><br><br><br><br>
              </div>      
              <!-- END OF TENTANG USER -->
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lebih lanjut</button>
          </div>
      </div>

      <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <!-- GAMBAR LO -->
            <img class="user" src="<?= $gambar_6 ?>">
            <ul class="list-unstyled mt-3 mb-4">
              <!-- TENTANG USER -->
              <div class="tentang_user">
                <span><?= $tabung ?></span> <p>
                  <h6>Luas : <?= $Luas_tabung ?><br><br>
                      Volume : <?= $volume_tabung ?><br><br><br><br>
              </div>      
              <!-- END OF TENTANG USER -->
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lebih lanjut</button>
          </div>
      </div>
  </div>
 <div class="footer">
      <p>
        Copyright &copy; 2019 <a href="index.php">PWPB || Kelompok 7</a>
      </p>
    </div>

        
      </div>
    </div>
  </footer>
</div>
</body>
</html>
