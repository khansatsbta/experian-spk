<?php
    include "koneksi.php";
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | Profile Matching</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat:wght@100;400;600&display=swap" rel="stylesheet">
	

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

	<!-- Container -->
	<div class="container"><br><br>

		<h2 style="padding-top: 5%; text-align:center; ">
			<b>EXPERIAN</b>
	  	</h2>
  
		<p style="text-align: justify; background-color:#B7B7B7;" >
		EXPERIAN merupakan aplikasi sistem pendukung keputusan untuk menentukan kelayakan kredit menggunakan metode Simple Additive Weighting, Weighted Product, dan Profile Matching. Untuk menentukan kelayakan kredit terdapat beberapa kriteria, yaitu pendapatan, tanggungan, umur, dan kekayaan.
		</p>

		<p>
		 Kriteria kelayakan kredit yang diterapkan pada perhitungan kali ini sebagai berikut:
		</p>

		<h4 style=" text-align:center; ">Bobot</h4>
		<table class="table table-hover" style="background-color: #BFCCB5;">
	  		<thead>
	    		<tr>
	      			<th scope="col">Kode Kriteria</th>
	      			<th scope="col">Nama Kriteria</th>
	      			<th scope="col">Bobot SAW</th>
	      			<th scope="col">Bobot WP</th>
					  <th scope="col">Core/ Secondary Factor PM</th>
					  <th scope="col">Jenis</th>
					  
	    		</tr>
	  		</thead>
	  		<tbody>
			    <tr>
			      	<th scope="row">A1</th>
			      	<td>Pendapatan</td>
			      	<td>30%</td>
			      	<td>5</td>
					<td>60%</td>
					<td>Benefit</td>
			    </tr>
			    <tr>
				<th scope="row">A2</th>
			      	<td>Tanggungan</td>
			      	<td>20%</td>
			      	<td>4</td>
					<td>40%</td>
					<td>Cost</td>
			    </tr>
			    <tr>
				<th scope="row">A3</th>
			      	<td>Umur</td>
			      	<td>20%</td>
			      	<td>2</td>
					<td>40%</td>
					<td>Cost</td>
			    </tr>
			    <tr>
				<th scope="row">A4</th>
			      	<td>Kekayaan</td>
			      	<td>30%</td>
			      	<td>5</td>
					<td>60%</td>
					<td>Benefit</td>
			    </tr>
			    
			</tbody>
		</table>

		<!-- Start Pendapatan -->
		<dl class="row" >
			<dt class="col-sm-1">1.</dt>
			<dd class="col-sm-11"><b>Pendapatan</b></dd>

			<dt class="col-sm-1"></dt>
			<dd class="col-sm-11">
				Merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan, berdasarkan jumlah pendapatan yang dihasilkan nasabah.
			</dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
			    <table class="table table-striped" style="background-color: #BFCCB5;">
			    	<thead>
			        	<tr>
			            	<th scope="col">Pendapatan</th>
			            	<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>0</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>>1 - <=4.999.999 </td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>>5.000.000 - <=10.000.000</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>>10.000.000</td>
			            	<th scope="row">4</th>
			          	</tr>
			        </tbody>
			    </table>
    		</dd>
  		</dl>
  		<!-- End/Pendapatan -->

<!-- Tanggungan -->
<dl class="row">
    		<dt class="col-sm-1">2.</dt>
    		<dd class="col-sm-11"><b>Tanggungan </b></dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
		      	Kriteria tanggungan merupakan persyaratan yang dibutuhkan untuk pengambilan
		      	keputusan, berdasarkan banyaknya anggota keluarga yang masih menjadi tanggungan nasabah berupa biaya hidup.
		      	Berikut penjabaran jumlah interval tanggunggan yang telah dikonversikan dengan bilangan.
		    </dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
		      	<table class="table table-striped" style="background-color: #BFCCB5;">
		        	<thead>
		          		<tr>
		            		<th scope="col">Tanggungan Nasabah</th>
		            		<th scope="col">Nilai</th>
		          		</tr>
		        	</thead>
		        	<tbody>
		          		<tr>
		            		<td>Jumlah 1</td>
		            		<th scope="row">4</th>
		          		</tr>
		          		<tr>
		            		<td>Jumlah 2</td>
		            		<th scope="row">3</th>
		          		</tr>
		          		<tr>
		            		<td>Jumlah 3</td>
		            		<th scope="row">2</th>
		         		</tr>
		          		<tr>
		            		<td>Jumlah >3 </td>
		            		<th scope="row">1</th>
		          		</tr>
		        	</tbody>
		      	</table>
		    </dd>
		</dl>
		<!-- /Tanggungan -->

		<!-- Umur -->
		<dl class="row">
	    	<dt class="col-sm-1">4.</dt>
	    	<dd class="col-sm-11"><b>Umur</b></dd>

		    <dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		Kriteria Umur merupakan persyaratan yang dibutuhkan untuk pengambilan keputusan,
	      		berdasarkan Umur yang telah ditempuh. Berikut penjabaran interval semester yang telah
	      		dikonversikan dengan bilangan
	    	</dd>

	    	<dt class="col-sm-1"></dt>
	    	<dd class="col-sm-11">
	      		<table class="table table-striped" style="background-color: #BFCCB5;">
	        		<thead>
	          			<tr>
	            			<th scope="col">Umur</th>
	            			<th scope="col">Nilai</th>
			          	</tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>>50</td>
			            	<th scope="row">1</th>
			          	</tr>
			          	<tr>
			            	<td>41 - 50</td>
			            	<th scope="row">2</th>
			          	</tr>
			          	<tr>
			            	<td>31 - 40</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>21 - 30</td>
			            	<th scope="row">4</th>
			          	</tr>
			          	
			        </tbody>
			    </table>
			</dd>
		</dl>
		<!-- /Semester --><br>

		<!-- Kekayaan -->
		<dl class="row">
    		<dt class="col-sm-1">2.</dt>
    		<dd class="col-sm-11"><b>Kekayaan</b></dd>

    		<dt class="col-sm-1"></dt>
    		<dd class="col-sm-11">
    			Kriteria Kekayaan merupakan persyaratan yang dibutuhkan untuk pengambilan
      			keputusan, berdasarkan jumlah kekayaan yang dimiliki oleh nasabah. Berikut penjabaran
      			interval jumlah kekayaan nasabah.
    		</dd>

		    <dt class="col-sm-1"></dt>
		    <dd class="col-sm-11">
      			<table class="table table-striped" style="background-color: #BFCCB5;">
        			<thead>
          				<tr>
            				<th scope="col">Kekayaan</th>
				            <th scope="col">Nilai</th>
				        </tr>
			        </thead>
			        <tbody>
			          	<tr>
			            	<td>> 2 M </td>
			            	<th scope="row">4</th>
			          	</tr>
			          	<tr>
			            	<td> 1 M - 2 M</td>
			            	<th scope="row">3</th>
			          	</tr>
			          	<tr>
			            	<td>100 JT - 1 M</td>
			            	<th scope="row">2</th>
		          		</tr>
		          		<tr>
		            		<td>0 - 99.999.999</td>
		            		<th scope="row">1</th>
		          		</tr>
		        	</tbody>
		      	</table>
		    </dd>
		</dl>
  		<!-- /Kekayaan-->

  		
	  	

		<!-- GAP -->
  		<h4>GAP</h4>
  		<table class="table table-hover" style="background-color: #BFCCB5;">
  			<thead>
    			<tr>
			    	<th scope="col">#</th>
			      	<th scope="col">Kriteria</th>
			      	<th scope="col">GAP</th>
			    </tr>
			</thead>
			<tbody>
    			<tr>
		      		<th scope="row">1</th>
		      		<td>Pendapatan</td>
		      		<td>3</td>
		    	<tr>
      				<th scope="row">2</th>
      				<td>Kekayaan</td>
      				<td>3</td>
    			</tr>
			    <tr>
			      	<th scope="row">3</th>
			      	<td>Tanggungan</td>
			      	<td>3</td>
			    </tr>
			    <tr>
			      	<th scope="row">4</th>
			      	<td>Umur</td>
			      	<td>2</td>
			    </tr>
			</tbody>
		</table><br><br>
		<!-- /GAP -->

		<!-- BOBOT -->
	  	<h4>Bobot</h4>
	  	<table class="table table-hover" style="background-color: #BFCCB5;">
	  		<thead>
	    		<tr>
	      			<th scope="col">#</th>
	      			<th scope="col">Selisih</th>
	      			<th scope="col">Bobot Nilai</th>
	      			<th scope="col">Keterangan</th>
	    		</tr>
	  		</thead>
	  		<tbody>
			    <tr>
			      	<th scope="row">1</th>
			      	<td>0</td>
			      	<td>5</td>
			      	<td>Tidak ada selisih(kompetensi sesuai dengan yang dibutuhkan)</td>
			    </tr>
			    <tr>
			      	<th scope="row">2</th>
			      	<td>1</td>
			      	<td>4,5</td>
			      	<td>Kompetensi individu kelebihan 1 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">3</th>
			      	<td>-1</td>
			      	<td>4</td>
			      	<td>Kompetensi individu kekurangan 1 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">4</th>
			     	<td>2</td>
			      	<td>3,5</td>
			      	<td>Kompetensi individu kelebihan 2 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">5</th>
			      	<td>-2</td>
			      	<td>3</td>
			      	<td>Kompetensi individu kekurangan 2 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">6</th>
			      	<td>3</td>
			      	<td>2,5</td>
			      	<td>Kompetensi individu kelebihan 3 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">7</th>
			      	<td>-3</td>
			      	<td>2</td>
			      	<td>Kompetensi individu kekurangan 3 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">8</th>
			      	<td>4</td>
			      	<td>1,5</td>
			      	<td>Kompetensi individu kelebihan 4 tingkat/level</td>
			    </tr>
			    <tr>
			      	<th scope="row">9</th>
			      	<td>-4</td>
			      	<td>1</td>
			      	<td>Kompetensi individu kekurangan 4 tingkat/level</td>
			    </tr>
			</tbody>
		</table>
		<!-- /BOBOT -->

	</div>
  	<!-- /Container -->
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <script>
</body>
</html>