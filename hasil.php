<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kapal Ferry</title>
    <style>
        .cover{
            background-image: url(bgrbr.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 80%;
        }
        body{
            background-image: url(bgrbr.png);
            background-size: 1350px;
            background-repeat: no-repeat;
            background-position: top;
            background-attachment: scroll;
            padding: 25px;
        }
        .title{
            text-align: center;
            font-size: 2.5em;
            margin-top:400px;
            color: #000;
        }
        .form{
            background-image: url(kapal.png);
            background-size: 1000px;
            color: #000;
            font-family: verdana;
            text-align: left;
            font-size: 1em;
            width: 50%;
            margin:auto;
            padding: 150px;
            spacing: 20px;
        }
        .button{
            text-align: center;
            width: 50%;
            margin:auto;
            padding: 25px;
            spacing: 5px;
            font-size: 2.5em;
            color: #000;
        }
         
    </style>
<body>
  <h1 class="title">
       TIKET PEMESANAN KAPAL FERRY
  </h1>
  <h1 class="form">
    <table>
      <tbody>
      <tr>
            <td>Nama</td>
            <td>:<?php echo '&nbsp'.$nama = $_POST['nama']; ?></td>
      </tr>
      <tr>
            <td>Alamat Email</td>
            <td>:<?php echo '&nbsp'.$email = $_POST['email']; ?></td>
      </tr>
      </tbody>

      <tbody>
      <tr><td>Dermaga Keberangkatan</td><td>:<?php 
      $dermagab = $_POST['dermagab'];
      if ($dermagab == ' ')
          {
          echo ' Mohon memilih Dermaga Keberangkatan';
          }
      else if ($dermagab == 'g')
          {
          echo ' Gilimanuk, Bali';
          }
      else if ($dermagab =='k')
          {
          echo ' Ketapang, Jawa Timur';
          }
      ?>
      </td></tr>
      </tbody>


      <tbody>
      <tr><td>Dermaga Tujuan</td><td>:<?php 
      $dermagab = $_POST['dermagab'];
      if ($dermagab == 'g')
          {
          echo ' Ketapang, Jawa Timur';
          }
      else if ($dermagab =='k')
          {
          echo ' Gilimanuk, Bali';
          }
      ?>
      </td></tr>
      </tbody>

    
      <tbody>
      <tr><td>Tanggal Penyebrangan</td><td>:<?php 
      $tanggal = $_POST['tanggal'];
        echo '&nbsp'.$tanggal;
      ?>
      </td></tr>
      </tbody>

    
      <tbody>
      <tr><td>Waktu Penyebrangan</td><td>:<?php 
      $waktu = $_POST['waktu'];
        echo '&nbsp'.$waktu;
      ?>
      </td></tr>
      </tbody>

    <?php

	  class Transportasi{
    public $jalankaki;
    public $gol1;
    public $gol2;
    public $gol3;
    public $gol4a;
    public $gol4b;
    public $gol5a;
    public $gol5b;
    public $gol6a;
    public $gol6b;
    public $gol7;
    public $gol8;
    public $gol9;

    public function setjalankaki($jalankaki){
      $this->jalankaki = $jalankaki;
    }

    public function getjalankaki(){
      return $this->jalankaki;
    }

    public function setgol1($gol1){
      $this->gol1 = $gol1;
    }

    public function getgol1(){
      return $this->gol1;
    }

    public function setgol2($gol2){
      $this->gol2 = $gol2;
    }

    public function getgol2(){
      return $this->gol2;
    }

    public function setgol3($gol3){
      $this->gol3 = $gol3;
    }

    public function getgol3(){
      return $this->gol3;
    }

    public function setgol4a($gol4a){
      $this->gol4a = $gol4a;
    }

    public function getgol4a(){
      return $this->gol4a;
    }

    public function setgol4b($gol4b){
      $this->gol4b = $gol4b;
    }

    public function getgol4b(){
      return $this->gol4b;
    }

    public function setgol5a($gol5a){
      $this->gol5a = $gol5a;
    }

    public function getgol5a(){
      return $this->gol5a;
    }

    public function setgol5b($gol5b){
      $this->gol5b = $gol5b;
    }

    public function getgol5b(){
      return $this->gol5b;
    }

    public function setgol6a($gol6a){
      $this->gol6a = $gol6a;
    }
  
    public function getgol6a(){
      return $this->gol6a;
    }
    
    public function setgol6b($gol6b){
      $this->gol6b = $gol6b;
    }
  
    public function getgol6b(){
      return $this->gol6b;
    }

    public function setgol7($gol7){
      $this->gol7 = $gol7;
    }
  
    public function getgol7(){
      return $this->gol7;
    }

    public function setgol8($gol8){
      $this->gol8 = $gol8;
    }
  
    public function getgol8(){
      return $this->gol8;
    }

    public function setgol9($gol9){
      $this->gol9 = $gol9;
    }
  
    public function getgol9(){
      return $this->gol9;
    }
    }

    class Penumpang{
    public $dewasa;
    public $bayi;

    public function setdewasa($dewasa){
      $this->dewasa = $dewasa;
    }

    public function getdewasa(){
      return $this->dewasa;
    }

    public function setbayi($bayi){
      $this->bayi = $bayi;
    }

    public function getbayi(){
      return $this->bayi;
    }
    }

    $penumpang = new Penumpang();
 
    $penumpang->setdewasa($_POST['dewasa']);
    $penumpang->setbayi($_POST['bayi']);

    $transport = new Transportasi();
 
   $transport->setjalankaki($penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol1(8000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol2(24000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol3(37000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol4a(146000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol4b(131000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol5a(277000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol5b(223000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol6a(461000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol6b(368000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol7(485000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol8(733000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);
   $transport->setgol9(1087000 + $penumpang->getdewasa()*7000 + $penumpang->getbayi()*5000);

  
    ?>

    
      <tbody>
      <tr><td>Total Biaya</td><td>:<?php 
      $jenisp = $_POST['jenisp'];
      if ($jenisp == 'j')
          {
          echo ' Rp ' . number_format($transport->getjalankaki(), 2, ",", ".");
          }
      else if ($jenisp =='t1')
          {
          echo " Rp " . number_format($transport->getgol1(), 2, ",", ".");
          }
      else if ($jenisp =='t2')
          {
          echo " Rp " . number_format($transport->getgol2(), 2, ",", ".");
          }
      else if ($jenisp =='t3')
          {
          echo " Rp " . number_format($transport->getgol3(), 2, ",", ".");
          }
      else if ($jenisp =='t4')
          {
          echo " Rp " . number_format($transport->getgol4a(), 2, ",", ".");
          }
      else if ($jenisp =='t5')
          {
          echo " Rp " . number_format($transport->getgol4b(), 2, ",", ".");
          }
      else if ($jenisp =='t6')
          {
          echo " Rp " . number_format($transport->getgol5a(), 2, ",", ".");
          }
      else if ($jenisp =='t7')
          {
          echo " Rp " . number_format($transport->getgol5b(), 2, ",", ".");
          }
      else if ($jenisp =='t8')
          {
          echo " Rp " . number_format($transport->getgol6a(), 2, ",", ".");
          }
      else if ($jenisp =='t9')
          {
          echo " Rp " . number_format($transport->getgol6b(), 2, ",", ".");
          }
      else if ($jenisp =='t10')
          {
          echo " Rp " . number_format($transport->getgol7(), 2, ",", ".");
          }
      else if ($jenisp =='t11')
          {
          echo " Rp " . number_format($transport->getgol8(), 2, ",", ".");
          }
      else if ($jenisp =='t12')
          {
          echo " Rp " . number_format($transport->getgol9(), 2, ",", ".");
          }
      ?>
      </td></tr>
      </tbody>

      </tr>
    </table>
  </h1>      
</body>

<h1 class="button">
<form action="login.php" method="post">
               <button type="submit" name="submit">Pesan sekarang</button>
<form>
</h1>
</html>