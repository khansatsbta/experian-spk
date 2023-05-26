<?php
    include "koneksi.php";
?>
<html>
<head>
    <title>About | Profile Matching</title>
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

  <h1 style="text-align: center;height: 7rem;background: #B7B7B7;">Sistem Pendukung Keputusan Kelayakan Kredit Metode SAW, WP, dan Profile Matching</h1>
  
    <section class="bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-6" style="padding: 0px;">
                    <div></div><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="img/kredit.jpg" alt="Team one" />
                </div>
                <div class="col-md-12 col-lg-6" style="color: #212529;">
                    <h1 class="text-dark" style="padding-top: 20px;padding-left: 15px;padding-right: 15px; font-size:100px">Experian</h1>
                    <hr />
                    <p class="text-black-50" style="padding-left: 15px;padding-right: 15px;font-size: 24px;text-align: center; font-size:35px">Experian merupakan Aplikasi berbasis website Sistem Pendukung Keputusan untuk menentukan Kelayakan Kredit menggunakan metode Weighted Product (WP), Simple Additive Weighting (SAW), dan Profile Matching (PM)</p>
                   
                </div>
            </div>
        </div>
    </section>
    <section class="home-team">
        <div class="container" style="padding-top: 3%;  ">
            <div class="row justify-content-center">
                <div class="col col-md-8">
                    <div class="sectionTitle text-center">
                        <h2>Our Team</h2>
                        <p>Lucky Seven</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="img/bella.jpg" alt="Team one" />
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="https://instagram.com/auditabellaa?igshid=NTc4MTIwNjQ2YQ=="><i class="fa fa-instagram"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title" style="text-align: left;">Audita Bella I.P</h4><span style="text-align: center;font-size: 24px;">4612421006</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="img/wulan.jpg" alt="Team one" />
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="#"><i class="fa fa-facebook"></i></a>
                                <div class="hover-overlay effect-scale"><a class="overlay_icon" href="https://instagram.com/dwiiwuland_?igshid=NTc4MTIwNjQ2YQ=="><i class="fa fa-instagram" style="font-size: 20px;"></i></a></div>
                            </div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title" style="text-align: left;">Dwi Wulandari</h4><span style="font-size: 24px;">4612421018</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="img/annisa.jpg" alt="Team one" />
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="https://instagram.com/annisanurdna?igshid=NTc4MTIwNjQ2YQ=="><i class="fa fa-instagram"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title" style="text-align: left;">Annisa Fitria N </h4><span style="font-size: 24px;">4612421019</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card card-style2 team-card">
                        <div class="card_img"><img class="img-fluid img-full loaded" data-original="img/team1.jpg" data-was-processed="true" src="img/khansa.jpg" alt="Team one" style="height: 394.021px;" />
                            <div class="hover-overlay effect-scale"><a class="overlay_icon" href="https://instagram.com/khanxabit?igshid=NTc4MTIwNjQ2YQ=="><i class="fa fa-instagram"></i></a></div>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title" style="text-align: left;">Khansa Tsabita M </h4><span style="font-size: 24px;">4612421032</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--  
    <div class="container"><br><br>

    <ul class="list-unstyled">
      <li>Created by : Experian (@Luckyseven)</li>
    </ul>

    </div>
-->
</body>
</html>