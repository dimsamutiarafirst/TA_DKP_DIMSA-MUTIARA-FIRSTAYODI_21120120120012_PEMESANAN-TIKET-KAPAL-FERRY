<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kapal Ferry</title>
    <style>
        body{
            background-image: url(bgrbr.png);
            background-size: 1355px;
            background-repeat: no-repeat;
            background-position: top;
            background-attachment: scroll;
            padding: 25px;
        }
        .title{
            text-align: center;
            font-family: Verdana;
            font-size: 2.5em;
            margin-top:400px;
            color: #000;
        }
        .form{
            border-style:solid;
	        border-width: 5px;
            color: #000;
            font-family: sans-serif;
            text-align: left;
            font-size: 1em;
            margin-left: 150px;
            margin-right: 150px;
            padding: 50px;
        }
        .ket{
            background-image: url(ket.png);
            background-size: 1355px;
            background-position: center;
            color: #000;
            font-family: sans-serif;
            text-align: left;
            font-size: 1em;
            padding: 15px;
        }

    </style>
</head>
<body>
   <h1 class="title">
       CARI TIKET ANDA!
   </h1>
   <h1 class="form">
   <form action="hasil.php" method="post">
               <label for="nama">Nama</label><br></br>
               <input type="text" name="nama" size="20" onkeypress="return event.charCode < 48|| event.charCode >57" >
               </br></br>
               <label for="email">Alamat Email</label><br></br>
               <input name="email">
               </br></br>

       <label for="dermagab">Dermaga Keberangkatan</label></td><br></br>
               <Select name="dermagab" id="dermagab">
               <option hidden>Pilih Dermaga Keberangkatan</option>
               <option value='g'>Gilimanuk, Bali</option>
               <option value='k'>Ketapang, Jawa Timur</option>
               </Select>
               </br></br>
        
        <label for="tanggal">Tanggal Booking</label></td><br></br>
                <td><input type="date" name="tanggal"></td>
                </br></br>

        <label for="waktu">Waktu Penyebrangan</label></td><br></br>
               <Select name="waktu" id="waktu">
               <option hidden>Pilih Waktu Penyebrangan</option>
               <option value='00:00 - 01.00 WITA'>00:00 - 01.00 WITA</option>
               <option value='03:00 - 04:00 WITA'>03:00 - 04:00 WITA</option>
               <option value='06:00 - 07:00 WITA'>06:00 - 07:00 WITA</option>
               <option value='09:00 - 10:00 WITA'>09:00 - 10:00 WITA</option>
               <option value='12:00 - 13:00 WITA'>12:00 - 13:00 WITA</option>
               <option value='15:00 - 16:00 WITA'>15:00 - 16:00 WITA</option>
               <option value='18:00 - 19:00 WITA'>18:00 - 19:00 WITA</option>
               <option value='20:00 - 21:00 WITA'>20:00 - 21:00 WITA</option>
               </Select>
               </br></br>

        <label for="jenisp">Jenis Pengguna*</label></td><br></br>
               <Select name="jenisp" id="jenisp">
               <option hidden>Pilih Jasa Pengguna</option>
               <option value='j'>Pejalan Kaki</option>
               <option value='t1'>Kendaraan GOL I</option>
               <option value='t2'>Kendaraan GOL II</option>
               <option value='t3'>Kendaraan GOL III</option>
               <option value='t4'>Kendaraan GOL IV A</option>
               <option value='t5'>Kendaraan GOL IV B</option>
               <option value='t6'>Kendaraan GOL V A</option>
               <option value='t7'>Kendaraan GOL V B</option>
               <option value='t8'>Kendaraan GOL VI A</option>
               <option value='t9'>Kendaraan GOL VI B</option>
               <option value='t10'>Kendaraan GOL VII</option>
               <option value='t11'>Kendaraan GOL VIII</option>
               <option value='t12'>Kendaraan GOL IX</option>
               </Select>
               </br></br>

        <label for="dewasa">Dewasa</label><br></br>
               <input type="text" name="dewasa" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
               </br></br>

        <label for="bayi">Bayi (0-23 Bulan)</label><br></br>
               <input type="text" name="bayi" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
               </br></br>
               <button type="submit" name="submit">Enter</button><br></br>

    <form>
   </h1>
   <h1 class="ket">
   <?php 
    echo '<br>';
    echo '&nbsp *Keterangan Golongan';
    echo '<br>';
    echo '<br>';
    echo '&nbsp Golongan I &nbsp &nbsp ';
    echo '&nbsp : &nbsp Sepeda kayuh';
    echo '<br>';
    echo '&nbsp Golongan II &nbsp &nbsp';
    echo '&nbsp : &nbsp Sepeda motor dibawah 500 cc dan gerobak dorong';
    echo '<br>';
    echo '&nbsp Golongan III &nbsp ';
    echo '&nbsp : &nbsp Sepeda motor diatas 500 cc dan kendaraan roda tiga';
    echo '<br>';
    echo '&nbsp Golongan IV A : &nbsp Kendaraan penumpang <5 meter';
    echo '<br>';
    echo '&nbsp Golongan IV B : &nbsp Kendaraan barang <5 meter';
    echo '<br>';
    echo '&nbsp Golongan V A &nbsp: &nbsp Kendaraan penumpang <7 meter';
    echo '<br>';
    echo '&nbsp Golongan V B &nbsp: &nbsp Kendaraan barang <7 meter';
    echo '<br>';
    echo '&nbsp Golongan VI A : &nbsp Kendaraan penumpang <10 meter';
    echo '<br>';
    echo '&nbsp Golongan VI B : &nbsp Kendaraan barang <10 meter';
    echo '<br>'; 
    echo '&nbsp Golongan VII &nbsp &nbsp: &nbsp Kendaraan <12 meter';
    echo '<br>';
    echo '&nbsp Golongan VIII &nbsp : &nbsp Kendaraan <16 meter';
    echo '<br>';
    echo '&nbsp Golongan IX &nbsp &nbsp : &nbsp Kendaraan >16 meter';
    ?>
   </h1>
</body>
</html>