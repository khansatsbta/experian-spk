<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Proses | Profile Matching</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
	  
      :root{
   --primary: #fff;
   --bg: #BFCCB5;

}

/* Navbar Section */
.navbar {
   display: flex;
   justify-content: space-between;
   align-items: center;
   padding: 0.1px 5%;
   background-color: rgb(1, 1, 1, 0.8);
   border-bottom: 1px solid #8f8181;
   position: fixed;
   top: 0;
   left: 0;
   right: 0;
   z-index: 9999;
}
.navbar .navbar-nav a{
   color: #fff;
   display: inline-block;
   font-size: 1rem;
   margin: 0;
}


.navbar .navbar-logo{
   font-size: 2rem;
   font-weight: 700;
   color: #fff;
   padding: 0.1px 60%;
   padding-left: 5%;
}



.navbar .navbar-nav a:hover{
   color:var(--primary);
}


.navbar .navbar-nav .active{
   right: 0;
}

.navbar .navbar-nav a::after{
   content: '';
   display: block;
   padding-bottom: 0.5rem;
   border-bottom: 0.1rem solid var(--primary);
   transform: scaleX(0);
   transition: 0.2s linear;
}

.navbar .navbar-nav a:hover::after{
   transform: scaleX(0.5);
}

/* Heading */
.container h2{
   color: #010101;
   font: "fjalla-one";
}
   </style>


</head>
<body>

  <!-- Navbar -->
	 
  <nav class="navbar navbar-light navbar-expand-md custom-header" style="background-color: #BFCCB5; justify-content: space-between;" >
  		<a href="#" class="navbar-logo text-right" >Experian</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse text-right" id="navbarNav">
		  
		<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
		<li class="nav-item">
                <a class="nav-link" aria-current="index.php" href="index.php">Home</a>
              </li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="inputdata.php">Input Data</a>
	      		</li>
	        	<li class="nav-item">
	            	<a class="nav-link" href="proses.php">Record</a>
	         	</li>
	         	<li class="nav-item">
	            	<a class="nav-link" href="rangking.php">Ranking</a>
	        	</li>
	      		<li class="nav-item">
	                <a class="nav-link" href="about.php">About</a>
	        	</li>
	    	</ul>
		
  		</div>
	</nav>
	<!-- /Navbar -->

    <div class="container" style="padding-top: 3%;"><br><br>

    <!-- Hapus Record -->
    <form  role="form" method="post" action="inputdata.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Tambah Mahasiswa">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-success">Tambah</button>
    </form>
    <!-- /Hapus Record -->

    <!-- Hapus Record -->
    <form  role="form" method="post" action="recorddelete.php" class="form-inline">
        <div class="form-group mb-2">
            <label class="sr-only"></label>
            <input type="text" readonly class="form-control-plaintext" value="Hapus Semua Record">
        </div>
        <button type="submit" name="submitdelete" class="btn btn-danger">Hapus</button>
    </form>
    <!-- /Hapus Record -->

    <?php
    session_start();
        if (isset($_POST['submitform'])) {

            if(isset($_SESSION['jumlahnasabah'])){

                $jumlah = $_SESSION['jumlahnasabah'];
                $nama = array();

                $nilaipendapatan = array();
                $textpendapatan = array();
                $gappendapatan = array();
                $bobotpendapatan = array();

                $nilaitanggungan = array();
                $texttanggungan = array();
                $gaptanggungan = array();
                $bobottanggungan = array();

                $nilaiumur = array();
                $textumur = array();
                $gapumur = array();
                $bobotumur = array();

                $nilaikekayaan = array();
                $textkekayaan = array();
                $gapkekayaan = array();
                $bobotkekayaan = array();

                $ncfnasabah = array();
                $nsfnasabah = array();
                $hasilnasabah = array();

                for($a=1;$a<=$jumlah;$a++) {

        	       $nama[$a] = $_POST['namanasabah'.$a];
                   $nilaipendapatan[$a] = $_POST['pendapatan'.$a];
                   $nilaitanggungan[$a] = $_POST['tanggungan'.$a];
                   $nilaiumur[$a] = $_POST['umur'.$a];
                   $nilaikekayaan[$a] = $_POST['kekayaan'.$a];

                   $sql = mysqli_query($koneksi,"INSERT INTO data_kriteria (nama, pendapatan, tanggungan, umur, kekayaan) VALUES('$nama[$a]','$nilaipendapatan[$a]','$nilaitanggungan[$a]','$nilaiumur[$a]','$nilaikekayaan[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($nilaipendapatan[$a] == "1"){
                        $textpendapatan[$a] = "0";
                    } elseif ($nilaipendapatan[$a] == "2") {
                        $textpendapatan[$a] = ">1 - <=4.999.999";
                    } elseif ($nilaipendapatan[$a] == "3") {
                        $textpendapatan[$a] = ">5.000.000 - <=10.000.000";
                    } else {
                        $textpendapatan[$a] = ">10.000.000";
                    }

                    if ($nilaitanggungan[$a] == "4"){
                        $texttanggungan[$a] = "Jumlah 1";
                    } elseif ($nilaitanggungan[$a] == "3") {
                        $texttanggungan[$a] = "Jumlah 2";
                    } elseif ($nilaitanggungan[$a] == "2") {
                        $texttanggungan[$a] = "Jumlah 3";
                    } else {
                        $texttanggungan[$a] = "Jumlah >3";
                    }

                    if ($nilaiumur[$a] == "1"){
                        $textumur[$a] = ">50";
                    } elseif ($nilaiumur[$a] == "2") {
                        $textumur[$a] = "41 - 50";
                    } elseif ($nilaiumur[$a] == "3") {
                        $textumur[$a] = "31 - 40";
                    } else {
                        $textumur[$a] = "21 - 30";
                    }

                    if ($nilaikekayaan[$a] == "0"){
                        $textkekayaan[$a] = "0";
                    } elseif ($nilaikekayaan[$a] == "1") {
                        $textkekayaan[$a] = "1 - 100.000.000";
                    } elseif ($nilaikekayaan[$a] == "2") {
                        $textkekayaan[$a] = "100.000.001 - 1.000.000.000";
                    } elseif ($nilaikekayaan[$a] == "3") {
                        $textkekayaan[$a] = "1.000.000.000 - 2.000.000.000";
                    } else {
                        $textkekayaan[$a] = ">2.000.000.000";
                    }

                    $sql = mysqli_query($koneksi,"INSERT INTO ket_nasabah (nama, ket_pendapatan, ket_tanggungan, ket_umur, ket_kekayaan) VALUES('$nama[$a]','$textpendapatan[$a]','$texttanggungan[$a]','$textumur[$a]','$textkekayaan[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {
                    
                    $nama[$a] = $_POST['namanasabah'.$a];
                    $gappendapatan[$a] = $nilaipendapatan[$a] - 3;
                    $gaptanggungan[$a] = $nilaitanggungan[$a] - 3;
                    $gapumur[$a] = $nilaiumur[$a] - 3;
                    $gapkekayaan[$a] = $nilaikekayaan[$a] - 2;

                    $sql = mysqli_query($koneksi,"INSERT INTO gap_pm (nama, gappendapatan, gaptanggungan, gapumur, gapkekayaan) VALUES('$nama[$a]','$gappendapatan[$a]','$gaptanggungan[$a]','$gapumur[$a]','$gapkekayaan[$a]')") or die (mysqli_error($koneksi));

                }

                for($a=1;$a<=$jumlah;$a++) {

                    if ($gappendapatan[$a] == "0"){
                        $bobotpendapatan[$a] = "5";
                    } elseif ($gappendapatan[$a] == "1") {
                        $bobotpendapatan[$a] = "4.5";
                    } elseif ($gappendapatan[$a] == "-1") {
                        $bobotpendapatan[$a] = "4";
                    } elseif ($gappendapatan[$a] == "2") {
                        $bobotpendapatan[$a] = "3.5";
                    } elseif ($gappendapatan[$a] == "-2") {
                        $bobotpendapatan[$a] = "3";
                    } elseif ($gappendapatan[$a] == "3") {
                        $bobotpendapatan[$a] = "2.5";
                    } elseif ($gappendapatan[$a] == "-3") {
                        $bobotpendapatan[$a] = "2";
                    } elseif ($gappendapatan[$a] == "4") {
                        $bobotpendapatan[$a] = "1.5";
                    } else {
                        $bobotpendapatan[$a] = "1";
                    }

                    if ($gaptanggungan[$a] == "0"){
                        $bobottanggungan[$a] = "5";
                    } elseif ($gaptanggungan[$a] == "1") {
                        $bobottanggungan[$a] = "4.5";
                    } elseif ($gaptanggungan[$a] == "-1") {
                        $bobottanggungan[$a] = "4";
                    } elseif ($gaptanggungan[$a] == "2") {
                        $bobottanggungan[$a] = "3.5";
                    } elseif ($gaptanggungan[$a] == "-2") {
                        $bobottanggungan[$a] = "3";
                    } elseif ($gaptanggungan[$a] == "3") {
                        $bobottanggungan[$a] = "2.5";
                    } elseif ($gaptanggungan[$a] == "-3") {
                        $bobottanggungan[$a] = "2";
                    } elseif ($gaptanggungan[$a] == "4") {
                        $bobottanggungan[$a] = "1.5";
                    } else {
                        $bobottanggungan[$a] = "1";
                    }

                    if ($gapumur[$a] == "0"){
                        $bobotumur[$a] = "5";
                    } elseif ($gapumur[$a] == "1") {
                        $bobotumur[$a] = "4.5";
                    } elseif ($gapumur[$a] == "-1") {
                        $bobotumur[$a] = "4";
                    } elseif ($gapumur[$a] == "2") {
                        $bobotumur[$a] = "3.5";
                    } elseif ($gapumur[$a] == "-2") {
                        $bobotumur[$a] = "3";
                    } elseif ($gapumur[$a] == "3") {
                        $bobotumur[$a] = "2.5";
                    } elseif ($gapumur[$a] == "-3") {
                        $bobotumur[$a] = "2";
                    } elseif ($gapumur[$a] == "4") {
                        $bobotumur[$a] = "1.5";
                    } else {
                        $bobotumur[$a] = "1";
                    }

                    if ($gapkekayaan[$a] == "0"){
                        $bobotkekayaan[$a] = "5";
                    } elseif ($gapkekayaan[$a] == "1") {
                        $bobotkekayaan[$a] = "4.5";
                    } elseif ($gapkekayaan[$a] == "-1") {
                        $bobotkekayaan[$a] = "4";
                    } elseif ($gapkekayaan[$a] == "2") {
                        $bobotkekayaan[$a] = "3.5";
                    } elseif ($gapkekayaan[$a] == "-2") {
                        $bobotkekayaan[$a] = "3";
                    } elseif ($gapkekayaan[$a] == "3") {
                        $bobotkekayaan[$a] = "2.5";
                    } elseif ($gapkekayaan[$a] == "-3") {
                        $bobotkekayaan[$a] = "2";
                    } elseif ($gapkekayaan[$a] == "4") {
                        $bobotkekayaan[$a] = "1.5";
                    } else {
                        $bobotkekayaan[$a] = "1";
                    }

                    $ncfnasabah[$a] = (($bobotpendapatan[$a]) + ($bobotkekayaan[$a]))/2;
                    $nsfnasabah[$a] = (($bobottanggungan[$a]) + ($bobotumur[$a]))/2;
                    $hasilpmnasabah[$a] = (0.6 * $ncfnasabah[$a]) + (0.4 * $nsfnasabah[$a]);

                    $sql = mysqli_query($koneksi,"INSERT INTO hasil_pm (nama, bobotpendapatan, bobottanggungan, bobotumur, bobotkekayaan, ncf, nsf, hasil_pm) VALUES('$nama[$a]','$bobotpendapatan[$a]','$bobottanggungan[$a]','$bobotumur[$a]','$bobotkekayaan[$a]','$ncfnasabah[$a]','$nsfnasabah[$a]','$hasilpmnasabah[$a]')") or die (mysqli_error($koneksi));

                }
                            // Perhitungan SAW

                            $bobotpendapatan = 0.3;
                            $bobottanggungan = 0.2;
                            $bobotumur = 0.2;
                            $bobotkekayaan = 0.3;

                            // Menentukan skor maksimum dan minimum untuk setiap kriteria
                            $maxPendapatan = max($nilaipendapatan);
                            $minPendapatan = min($nilaipendapatan);
                            $maxTanggungan = max($nilaitanggungan);
                            $minTanggungan = min($nilaitanggungan);
                            $maxUmur = max($nilaiumur);
                            $minUmur = min($nilaiumur);
                            $maxKekayaan = max($nilaikekayaan);
                            $minKekayaan = min($nilaikekayaan);

                            $hasilsaw = array();
                            

                            // Menghitung nilai normalisasi untuk setiap kriteria
    
                            for ($a = 1; $a <= $jumlah; $a++) {

                                $normPendapatan = 0;
                                $normTanggungan = 0;
                                $normUmur = 0;
                                $normKekayaan = 0;


                                // Normalisasi kriteria Pendapatan
                                if ($maxPendapatan != $minPendapatan) {
                                    $normPendapatan = ($nilaipendapatan[$a] - $minPendapatan) / ($maxPendapatan - $minPendapatan);
                                } else {
                                    $normPendapatan = 0;
                                }

                                // Normalisasi kriteria Tanggungan (Cost)
                                if ($maxTanggungan != $minTanggungan) {
                                    $normTanggungan = ($maxTanggungan - $nilaitanggungan[$a]) / ($maxTanggungan - $minTanggungan);
                                } else {
                                    $normTanggungan = 0;
                                }

                                // Normalisasi kriteria Umur (Cost)
                                if ($maxUmur != $minUmur) {
                                    $normUmur = ($maxUmur - $nilaiumur[$a]) / ($maxUmur - $minUmur);
                                } else {
                                    $normUmur = 0;
                                }

                                // Normalisasi kriteria Kekayaan
                                if ($maxKekayaan != $minKekayaan) {
                                    $normKekayaan = ($nilaikekayaan[$a] - $minKekayaan) / ($maxKekayaan - $minKekayaan);
                                } else {
                                    $normKekayaan = 0;
                                }

                                // Menghitung nilai akhir menggunakan metode SAW
                                $nilaiAkhir = ($bobotpendapatan * $normPendapatan) + ($bobottanggungan * $normTanggungan) + ($bobotumur * $normUmur) + ($bobotkekayaan * $normKekayaan);

                                // Simpan hasil perhitungan ke dalam array
                                $hasilsaw[$a] = $nilaiAkhir;
                            }


                            $sql = "INSERT INTO hasil_saw (nama, bobotpendapatan, bobottanggungan, bobotumur, bobotkekayaan, hasil_saw) VALUES ";

                            // Membangun pernyataan SQL dengan menggabungkan data satu per satu
                            for ($a = 1; $a <= $jumlah; $a++) {
                                $sql .= "('$nama[$a]','$bobotpendapatan','$bobottanggungan','$bobotumur','$bobotkekayaan','$hasilsaw[$a]')";
                                
                                // Tambahkan koma jika bukan data terakhir
                                if ($a < $jumlah) {
                                    $sql .= ",";
                                }
                            }

                            // Jalankan pernyataan SQL
                            $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

                            // Perhitungan WP

                            $bobotpendapatan = 5;
                            $bobottanggungan = 4;
                            $bobotumur = 2;
                            $bobotkekayaan = 5;
                            $totalbobot = $bobotpendapatan + $bobottanggungan + $bobotumur + $bobotkekayaan;

                            // Perbaikan Bobot
                            $pbpendapatan = $bobotpendapatan / $totalbobot;
                            $pbtanggungan = $bobottanggungan / $totalbobot;
                            $pbumur = $bobotumur / $totalbobot;
                            $pbkekayaan = $bobotkekayaan / $totalbobot;

                            $vektors = array();
                            $vektorv = array();

                            // Menghitung vektor S
                            for ($a = 1; $a <= $jumlah; $a++) {
                                // Menghitung vektor S
                                $nilais = ($nilaipendapatan[$a] ** $pbpendapatan) * (pow($nilaitanggungan[$a], $pbtanggungan)) * (pow($nilaiumur[$a], $pbumur)) * ($nilaikekayaan[$a] ** $pbkekayaan);

                                // vektor s
                                $vektors[$a] = $nilais;

                                // Simpan nilai vektor S ke dalam tabel 'vektors'
                                $sql = "INSERT INTO vektors (nama, pbpendapatan, pbtanggungan, pbumur, pbkekayaan, vektors) VALUES ('$nama[$a]','$pbpendapatan','$pbtanggungan','$pbumur','$pbkekayaan','$vektors[$a]')";
                                $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
                            }

                            $totals = 0;
                            // Menghitung total vektor s
                            for ($a = 1; $a <= $jumlah; $a++) {
                                $totals += $vektors[$a];
                            }

                            // Menghitung nilai vektor v
                            for ($a = 1; $a <= $jumlah; $a++) {
                                $vektorv[$a] = $vektors[$a] / $totals;
                            }

                            $sql = "INSERT INTO hasil_wp (nama, bobotpendapatan, bobottanggungan, bobotumur, bobotkekayaan, hasil_wp) VALUES ";

                            // Membangun pernyataan SQL dengan menggabungkan data satu per satu
                            for ($a = 1; $a <= $jumlah; $a++) {
                                $sql .= "('$nama[$a]','$bobotpendapatan','$bobottanggungan','$bobotumur','$bobotkekayaan','$vektorv[$a]')";

                                // Tambahkan koma jika bukan data terakhir
                                if ($a < $jumlah) {
                                    $sql .= ",";
                                }
                            }

                            // Jalankan pernyataan SQL
                            $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

                        }

                            
                    }
    ?>



    <!-- TUTUP -->
    <?php
        
        
    ?>
    <!-- /TUTUP -->
    <br><br>
    <!-- Table -->
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Pendapatan</th>
              <th scope="col">Jumlah Tanggungan</th>
              <th scope="col">Umur</th>
              <th scope="col">Kekayaan</th>
              <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query1 = mysqli_query($koneksi,"SELECT * FROM ket_nasabah");
                if(mysqli_num_rows($query1)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query1)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["ket_pendapatan"];?></td>
                <td><?php echo $data["ket_tanggungan"];?></td>
                <td><?php echo $data["ket_umur"];?></td>
                <td><?php echo $data["ket_kekayaan"];?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning" onclick="window.location.href='delete.php?id=<?php echo $data['nama']; ?>'">Hapus</button>
                    </div>
                </td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
            </tbody>
    </table>
    <!-- /Tabel -->


    <br><br>


    <!-- Table -->
    <form  role="form" method="post" action="hasil.php" class="form-inline">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Pendapatan</th>
                  <th scope="col">Jumlah Tanggungan</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Kekayaan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($koneksi,"SELECT * FROM data_kriteria");
                    if(mysqli_num_rows($query)>0){ 
                ?>
                <?php
                    $a = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <th scope="row"><?php echo $a; ?></th>
                  <td><?php echo $data["nama"];?></td>
                  <td><?php echo $data["pendapatan"];?></td>
                  <td><?php echo $data["tanggungan"];?></td>
                  <td><?php echo $data["umur"];?></td>
                  <td><?php echo $data["kekayaan"];?></td>
                </tr>
                <?php $a++; } ?>
                <?php } ?>
            </tbody>
            <thead class="thead-dark">
                <tr>
                  <th scope="col">GAP</th>
                  <th scope="col"></th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">3</th>
                  <th scope="col">2</th>
                </tr>
            </thead>
        </table>
        <button type="submit" name="hitunggap" class="btn btn-primary mb-2">Hitung</button>
    </form>
    <!-- /Tabel -->

    </div>

</body>
</html>