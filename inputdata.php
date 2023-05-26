<?php
    include "koneksi.php";
?>

<html>
<head>
	<title>Input | Profile Matching</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
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
   padding: 0.1px 7%;
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
	 
	<nav class="navbar navbar-light navbar-expand-md custom-header" style="background-color: #BFCCB5;" >
  		<a class="navbar-logo text-right" href="#">Experian</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse text-right" id="navbarText">
		  
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


	<!-- Form awal -->
	<form  role="form" method="post" class="form-inline" class="animated infinite zoomIn delay-2s">
  		<div class="form-group mb-2">
    		<label class="sr-only"></label>
    		<input type="text" readonly class="form-control-plaintext" value="Jumlah Nasabah">
  		</div>
  		<div class="form-group mx-sm-3 mb-2">
    		<select name="jmlnasabah" class="form-control" id="exampleFormControlSelect1">
      			<option>Choose</option>
      			<option value="1">1</option>
      			<option value="2">2</option>
    				<option value="3">3</option>
    				<option value="4">4</option>
    				<option value="5">5</option>
      			<option value="6">6</option>
    		</select>
  		</div>
  		<button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
	</form>
	<!-- /Form -->



	<!-- Form -->
	<?php
	 if(isset($_POST['submit'])) {
	?>
	 <form  role="form" method="post" action="proses.php"><br>
	 <?php
	  session_start();
		$jumlah = $_POST['jmlnasabah'];
		$_SESSION['jumlahnasabah'] = $jumlah;
			for($a=1;$a<=$jumlah;$a++) {
	 ?>

  	<div class="form-group">
  		<label><b>Nasabah ke <?php echo$a; ?></b></label><br>
    	<label for="exampleFormControlInput1">Nama Nasabah</label>
    	<input class="form-control" placeholder="Nama Nasabah" name="namanasabah<?php echo $a; ?>" autocomplete="off">
 	  </div>
 	<div class="form-group">
    	<label for="exampleFormControlSelect1">Pendapatan</label>
    	<select name="pendapatan<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect1">
      		<option>----Select an option----</option>
      		<option value="1">0</option>
      		<option value="2">>1 - <=4.999.999</option>
			<option value="3">>5.000.000 - <=10.000.000</option>
			<option value="4">>10.000.000</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Tanggungan</label>
    	<select name="tanggungan<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="4">Jumlah 1</option>
      		<option value="3">Jumlah 2</option>
			<option value="2">Jumlah 3</option>
			<option value="1">Jumlah >3</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Umur</label>
    	<select name="umur<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="1">>50</option>
      		<option value="2">41 - 50</option>
			<option value="3">31 - 40</option>
			<option value="4">21 - 30</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="exampleFormControlSelect2">Kekayaan</label>
    	<select name="kekayaan<?php echo $a; ?>" class="form-control" id="exampleFormControlSelect2">
      		<option>----Select an option----</option>
      		<option value="0">0</option>
      		<option value="1">1 - 100.000.000</option>
			<option value="2">100.000.001 - 1.000.000.000</option>
			<option value="3">1.000.000.000 - 2.000.000.000</option>
			<option value="4">>2.000.000.000</option>
    	</select>
  	</div>
 	<br>
 	<?php } ?>
  		<button type="submit" name="submitform" class="btn btn-primary">Submit</button><br>
	</form>
	<?php } ?>
	<!-- /Form -->

	</div>

</body>
</html>