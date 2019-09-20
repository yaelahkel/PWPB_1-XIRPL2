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
  <h1 class="display-4" style="font-family: forte;">FORMULIR PENDAFTARAN</h1>
  
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <!-- PROFILE 1 -->
      <div class="card mb-4 shadow-sm">
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <div class="tentang_user">
                <d>
                <span>DATA IDENTITAS PESERTA DIDIK BARU <br> TAHUN AJARAN 2019/2020</span><br><br>
                 <form action="" method="POST" name="myform">
                    <b>Nama lengkap:</b> 
                    <br>
                     <input type="text" name="nmlngkp" size="25" >
                   <br>
                  <b>Nama Panggilan :</b>
                  <br>
                   <input type="text"  name="nmpangg" size="25">
                   <br><br>  
                  <b>Jenis Kelamin  :</b>
                  <br>
                   <input type="radio" name="jkel" size="25">laki-laki

                                   <input type="radio" name="jkel" size="25">Wanita
                                   <br><br>
                  <b>NISN           :</b> 
                  <br>
                  <input type="number"name="nisn"size="25">
                  <br><br>  
                  <b>NIK            :</b>
                   <br>
                   <input type="number"name="nik" size="25">
                   <br><br>  
                  <b>Tempat Tanggal akhir :</b> 
                  <br><input type="text" name="ttl" size="25">           
                             <input type="date" name="ttl" size="25">
                             <br><br> 

                  <b>Asal Sekolah   : </b>
                  <br>
                  <input type="text"  name="aslsklh"  size="25">
                  <br><br>  
                  <b>No SKHUN        : </b>
                  <br>
                  <input type="number"  name="skhun" size="25">
                  <br><br>  
                  <b>Tanggal di Terima Di sekolah ini :</b>
                  <br> <input type="date"  name="tglsekolah" size="25">
                  <br><br>  
                  <b>Jika Pindahan Sebutkan Alasan Pindah ke sekolah ini : </b>
                  <br>
                  <textarea name="alasan" size="50" rows="5" cols="25"> </textarea><br><br> 
                  <b> Agama  :</b>
                  <br><input type="radio"  name="agama" size="25">Islam  
                           <input type="radio"  name="agama" size="25">Budha 
                           <input type="radio"  name="agama" size="25">Kristen  
                           <input type="radio"  name="agama" size="25">Katolik  
                           <input type="radio"  name="agama" size="25">konghucu 
                           <br><br>  
                  <b>Alamat : </b>
                  <br><textarea name="Al" size="50" rows="5" cols="25"></textarea> 
                  <br><br>  
                  <b>Tinggal Bersama :</b>
                  <br> <input type="radio"  name="tb" size="25">Orang tua   
                                    <input type="radio"  name="tb" size="25">Saudara   
                                    <input type="radio"  name="tb" size="25">Nenek Kakek   
                                    <input type="radio"  name="tb" size="25">Sendiri
                                     <br><br>  
                 <b>Transfortasi Ke sekolah :</b> 
                 <br><input type="radio"  name="transport" size="25">Motor  
                                                  <input type="radio"  name="transport" size="25">Mobil  
                                                  <input type="radio"  name="transport" size="25">Angkutan umum
                                                  <br><br>
                  <b>No Telepon Rumah :</b>
                  <br> <input type="number"  name="normh" size="25">
                  <br><br>  
                  <b>No Telepon hp :</b>
                  <br> <input type="number"  name="nohp" size="25">
                  <br><br>  
                  <b>No Kps (nomer perlindungan sosial) bagi yang memiliki :</b> 
                  <br><input type="number"  name="nokps" size="25">
                  <br><br><br>
                  <span>Data Ayah Kandung</span> <br><br>
                  <b>Nama:</b>
                  <br> <input type="text"  name="nmayah" size="25">
                  <br><br>  
                  <b>Tahun Lahir:</b>
                  <br> <input type="number"  name="thn" size="25">
                  <br><br>  
                  <b>Pendidikan :</b>
                  <br> <input type="text"  name="ppk" size="25">
                  <br><br>  
                  <b>Pekerjaan  :</b>
                  <br> <input type="text" name="pk" size="25">
                  <br><br>
                  <b>Penghasilan Perbulan  :</b>
                  <br><input type="select" name="gajiayah" size="25">
                  <select>
                    <option value="value" selected="Pilih Disini">---Pilih Disini---</option>
                    <option>Rp.100.000 = <=Rp.1.000.000</option>
                    <option>Rp.1.000.000 = <=3.000.000</option>
                    <option>Rp.3.000.000 = <=5.000.000</option>
                    <option>Rp.5.000.000 = <=10.000.000</option>
                    <option> >Rp.10.000.000</option>
                  </select>
                  <br><br>
                  <span>Data Ibu Kandung</span> <br><br>
                  <b>Nama :</b> 
                  <br><iput type="text" name="nmibu" size="25">
                  <br><br>
                  <b>Tahun Lahir :</b>
                  <br> <input type ="number" name="thn" size="25">
                  <br><br>
                  <b>Pendidikan :</b>
                  <br> <input type ="text" name="ppk" size="25">
                  <br><br>
                  <b>Pekerjaan :</b>
                  <br><input type ="text" name="pk" size="25">
                  <br><br>
                  <b>Penghasilan Perbulan :</b>
                  <br><input type="select" name="gajiibu" size="25">
                  <select>
                    <option value="value" selected="Pilih Disini" >---Pilih Disini---</option>
                    <option>Rp.100.000 = <=Rp.1.000.000</option>
                    <option>Rp.1.000.000 = <=3.000.000</option>
                    <option>Rp.3.000.000 = <=5.000.000</option>
                    <option>Rp.5.000.000 = <=10.000.000</option>
                    <option> >Rp.10.000.000</option>
                  </select>
                  <br>
                  <br>
                  <input id=="tombol" type="submit" name="submit" values="Kirim Datamu!">
                </form>
              </div>
            </center>
            <br>
            <br>

            <?php
              if (isset($_POST['submit'])) {
                echo "Informasi Tentang ". $_POST['nmlngkp'];
                echo "<br> Nama Lengkap Anda Adalah :".$_POST['nmlngkp'];
                echo "<br> Nama Panggilan Anda :".$_POST['nmpangg'];
                echo "<br> jenis kelamin anda :".$_POST['jkel'];
                echo "<br> NISN anda adalah :".$_POST['nisn'];
                echo "<br> NIK anda Adalah :".$_POST['nik'];
                echo "<br> Tempat Tanggal Lahir :".$_POST['ttl'];
                echo "<br> Asal sekolah anda dari :".$_POST['aslsklh'];
                echo "<br> Nomor SKHUN anda adalah :".$_POST['skhun'];
                echo "<br> Anda di terima disekolah ini pada tangal :".$_POST['tglsekolah'];
                echo "<br> Alasan mengapa anda pindah kesekolah ini adalah :".$_POST['alasan'];
                echo "<br> Agama anda adalah:".$_POST['agama'];
                echo "<br> Alamat rumah anda di :".$_POST['Al'];
                echo "<br> Anda tinggal bersama  :".$_POST['tb'];
                echo "<br> Transportasi yang anda naiki ke sekolah :".$_POST['transport'];
                echo "<br> Nomor telepone rumah anda :".$_POST['normh'];
                echo "<br> Nomor telepone hp anda  :".$_POST['nohp'];
                echo "<br> Nomor KPS anda  :".$_POST['nokps'];
                
                echo "<br>  informasi orang tua dari anda ".$_POST['nmayah'];
                echo "<br> nama ayah anda  :".$_POST['nmayah'];
                echo "<br> tahun lahir ayah anda  :".$_POST['thn'];
                echo "<br> pendidikan ayah anda  :".$_POST['ppk'];
                echo "<br> pekerjaan ayah anda  :".$_POST['pk'];
                echo "<br> penghasilan ayah perbulan  :".$_POST['gajiayah'];
                
                echo "<br>  informasi orang tua dari anda ".$_POST['nmibu'];
                echo "<br> nama ibu anda  :".$_POST['nmibu'];
                echo "<br> tahun lahir ibu anda  :".$_POST['thn'];
                echo "<br> pendidikan ibu anda  :".$_POST['ppk'];
                echo "<br> pekerjaan ibu anda  :".$_POST['pk'];
                echo "<br> penghasilan ibu perbulan  :".$_POST['gajiibu'];
                }  
               ?> 



                 </div>
            </ul>
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
  </div>
</body>
</html>
