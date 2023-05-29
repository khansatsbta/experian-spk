<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: index.php"); // Redirect ke halaman dashboard jika sudah login
    exit;
}

// Cek apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Cek username dan password yang dimasukkan
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username dan password yang diizinkan
    $allowedUsername = 'luckyseven';
    $allowedPassword = 'luckyseven';

    // Cek apakah username dan password sesuai
    if ($username === $allowedUsername && $password === $allowedPassword) {
        // Login berhasil, simpan status login ke session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header("Location: index.php"); // Redirect ke halaman dashboard
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<?php 
 
include 'koneksi.php';
 
?>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title>Experian</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">*
        <link href="stylesheet" href="style.css">
       
        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600&display=swap" rel="stylesheet">
 <style>

.form-box img {

  margin-bottom: 15px;
align-items: center;
justify-content: center;
}

.avatar.round {
  border-radius: 50%;
}


.avatar {
  border: 1px solid black;
  max-width: 100px;
  max-height: 100px;
  width: 100px;
  height: 100px;
}

legend + * {
  clear: left;
}

img, svg {
  vertical-align: middle;
}



</style>   
</head>
    
    <body>

    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    
        <div class="container full-height">
            <div class="row flex center v-center full-height">
                <div class="col">
                    <section class="py-4 py-xl-5">
                        <div class="container">
                            <div class="text-white bg-dark border rounded border-0 p-4 p-md-5">
                                <h2 class="fw-bold text-white mb-3" style="font-size: 80px;">EXPERIAN</h2>
                                <p class="mb-4" style="font-size: 40px;">Sistem Pendukung Keputusan Kelayakan Kredit</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-8 col-sm-4">
                    <div class="form-box">
                        <form method="POST" action="">
                            <fieldset>
                                <legend style="text-align:center;">Sign in</legend>
                                <img id="avatar" class="avatar round"  src="img/dahyun2.png" />
                                <input id="username" class="form-control" type="text" name="username" placeholder="username" />
                                <input id="password" class="form-control" type="password" name="password" placeholder="password" />
                                <button class="btn btn-primary d-block w-100" type="submit" name="submitlogin">LOGIN</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
        
    </body>
    
    </html>
