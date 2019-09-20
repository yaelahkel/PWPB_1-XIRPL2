<?php 
  $nama_Damar = "Haikal Damar";
  $umur_Damar = 16;
  $hobi_Damar = "Bermusik, Nonton Youtube, gaming";
  $tinggi_Damar = 169;
  $cita2_Damar = "programer handal , Musisi";
  
  $nama_Fera = "Fera Dwi Lestari";
  $umur_Fera = 16;
  $hobi_Fera = "Baca novel ,masak";
  $tinggi_Fera = 162;
  $cita2_Fera = "Designer , Chef";

  $nama_Lusi = "Lusiana Amanah";
  $umur_Lusi = 16;
  $hobi_Lusi = "Denger Musik, Baca Novel";
  $tinggi_Lusi = 160;
  $cita2_Lusi = "Penulis , Penerbit buku";

  $rata_rata = ($tinggi_Damar + $tinggi_Fera + $tinggi_Lusi) / 3;

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
           <a class="p-2 text-light" href="tugas_ketiga.php">Tugas ketiga</a>
           <a class="p-2 text-light" href="#">Tugas keempat</a>
        </nav>
            <a class="btn btn-outline-light" href="index.php">Home</a>
    </div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4" style="font-family: forte;">Profile</h1>
  <p class="lead">dibawah ini adalah biodata anggota Kelompok 7</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <!-- PROFILE 1 -->
      <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <!-- GAMBAR LO -->
            <img class="user" src="img/Damar.png">
            <ul class="list-unstyled mt-3 mb-4">
              <div class="tentang_user">
                <span>Haikal Damar</span> <p>
                 <h6>umur : <?= $umur_Damar ?> tahun <br>
                     hobi : <?= $hobi_Damar ?><br>
                     Cita cita : <?= $cita2_Damar ?>
                     Tinggi badan : <?= $tinggi_Damar ?> cm</h6></p>
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
            <img class="user" src="img/Fera.jpg">
            <ul class="list-unstyled mt-3 mb-4">
              <div class="tentang_user">
               <span>Fera Dwi Lestari</span> <p>
                 <h6>umur : <?= $umur_Fera ?> tahun <br>
                     hobi : <?= $hobi_Fera ?><br>
                     Cita cita : <?= $cita2_Fera ?><br>
                     Tinggi badan : <?= $tinggi_Fera ?> cm</h6></p>
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
            <img class="user" src="img/Lusi.jpg">
            <ul class="list-unstyled mt-3 mb-4">
              <!-- TENTANG USER -->
              <div class="tentang_user">
                <span>Lusiana Amanah</span> <p>
                  <h6>umur : <?= $umur_Lusi ?> tahun <br>
                      hobi : <?= $hobi_Lusi ?><br>
                      Cita cita : <?= $cita2_Lusi ?><br>
                      Tinggi badan : <?= $tinggi_Lusi ?> cm</h6></p>
              </div>
              <!-- END OF TENTANG USER -->
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Lebih lanjut</button>
          </div>
      </div>
    <!-- END PROFILE 3 -->
  </div>
  <div class="pricing-header px-2 py-2 pt-md-2 pb-md-2 mx-auto text-center">
    <p class="lead">Rata-rata tinggi kami = <?php echo $rata_rata ?> cm</p>
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
