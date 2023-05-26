<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>Ranking | Profile Matching</title>
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


    <div class="container" style="padding-top: 2%; text-align:Center; "><br><br>
    <h5><b>Ranking Profile Matching<b></h5>
    <!-- Tabel Ranking Profile Matching-->
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Nama</th>
                <th scope="col">Bobot Pendapatan</th>
                <th scope="col">Bobot Tanggungan</th>
                <th scope="col">Bobot Umur</th>
                <th scope="col">Bobot Kekayaan</th>
                <th scope="col">NCF (60%)</th>
                <th scope="col">NSF (40%)</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM hasil_pm ORDER BY hasil_pm DESC");
                if(mysqli_num_rows($query)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["bobotpendapatan"];?></td>
                <td><?php echo $data["bobottanggungan"];?></td>
                <td><?php echo $data["bobotumur"];?></td>
                <td><?php echo $data["bobotkekayaan"];?></td>
                <td><?php echo $data["ncf"];?></td>
                <td><?php echo $data["nsf"];?></td>
                <td><?php echo $data["hasil_pm"];?></td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
        </tbody>
    </table>
    <!-- /Tabel Ranking --><br>

    <?php 
        $query = mysqli_query($koneksi,"SELECT * FROM hasil_pm ORDER BY hasil_pm DESC LIMIT 1");
        if(mysqli_num_rows($query)>0){ 
    ?>
    <?php
        $a = 1;
        while($data = mysqli_fetch_array($query)){
    ?>
    <div class="alert alert-primary" role="alert">
        Nasabah dengan nama <b style="font-size: 15pt;"><?php echo $data["nama"];?></b> menjadi urutan pertama dalam pemilihan Kelayakan Kredit.
    </div>
    <!-- <h4>Nasabah dengan nama <mark><?php echo $data["nama"];?></mark> menjadi urutan pertama dalam pemilihan Kelayakan Kredit.</h4> -->

    <?php $a++; } ?>
    <?php } ?>

    <!-- Tabel Ranking SAW-->
    <table class="table table-hover"style="padding-top: 2%; text-align:Center; ">
    <h5><b>Ranking SAW<b></h5>
        <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Nama</th>
                <th scope="col">Bobot Pendapatan</th>
                <th scope="col">Bobot Tanggungan</th>
                <th scope="col">Bobot Umur</th>
                <th scope="col">Bobot Kekayaan</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM hasil_saw ORDER BY hasil_saw DESC");
                if(mysqli_num_rows($query)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["bobotpendapatan"];?></td>
                <td><?php echo $data["bobottanggungan"];?></td>
                <td><?php echo $data["bobotumur"];?></td>
                <td><?php echo $data["bobotkekayaan"];?></td>
                <td><?php echo $data["hasil_saw"];?></td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
                </table>

    <?php 
            $query = mysqli_query($koneksi,"SELECT * FROM hasil_saw ORDER BY hasil_saw DESC LIMIT 1");
            if(mysqli_num_rows($query)>0){ 
    ?>
    <?php
            $a = 1;
            while($data = mysqli_fetch_array($query)){
    ?>
    <div class="alert alert-primary" role="alert">
            Nasabah dengan nama <b style="font-size: 15pt;"><?php echo $data["nama"];?></b> menjadi urutan pertama dalam pemilihan Kelayakan Kredit.
    </div>
    <!-- <h4>Nasabah dengan nama <mark><?php echo $data["nama"];?></mark> menjadi urutan pertama dalam pemilihan Kelayakan Kredit.</h4> -->

    <?php $a++; } ?>
    <?php } ?>

    <!-- Tabel Ranking WP-->
    <table class="table table-hover"style="padding-top: 2%; text-align:Center; ">
    <h5><b>Ranking WP<b></h5>
        <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Nama</th>
                <th scope="col">Bobot Pendapatan</th>
                <th scope="col">Bobot Tanggungan</th>
                <th scope="col">Bobot Umur</th>
                <th scope="col">Bobot Kekayaan</th>
                <th scope="col">Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = mysqli_query($koneksi,"SELECT * FROM hasil_wp ORDER BY hasil_wp DESC");
                if(mysqli_num_rows($query)>0){ 
            ?>
            <?php
                $a = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?php echo $a; ?></th>
                <td><?php echo $data["nama"];?></td>
                <td><?php echo $data["bobotpendapatan"];?></td>
                <td><?php echo $data["bobottanggungan"];?></td>
                <td><?php echo $data["bobotumur"];?></td>
                <td><?php echo $data["bobotkekayaan"];?></td>
                <td><?php echo $data["hasil_wp"];?></td>
            </tr>
            <?php $a++; } ?>
            <?php } ?>
                </table>

    <?php 
            $query = mysqli_query($koneksi,"SELECT * FROM hasil_wp ORDER BY hasil_wp DESC LIMIT 1");
            if(mysqli_num_rows($query)>0){ 
    ?>
    <?php
            $a = 1;
            while($data = mysqli_fetch_array($query)){
    ?>
    <div class="alert alert-primary" role="alert">
            Nasabah dengan nama <b style="font-size: 15pt;"><?php echo $data["nama"];?></b> menjadi urutan pertama dalam pemilihan Kelayakan Kredit.
    </div>
    <!-- <h4>Nasabah dengan nama <mark><?php echo $data["nama"];?></mark> menjadi urutan pertama dalam pemilihan Kelayakan Kredit.</h4> -->

    <?php $a++; } ?>
    <?php } ?>

    </div>

</body>
</html>