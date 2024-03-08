<?php 
    include 'koneksi.php';
    
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Ke perpustakaan digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login perpustakaan digital</h3></div>

                                    <div class="card-body">
                               <?php 
                               if(isset($_POST['login'])){
                                $username = $_POST["username"];
 								                 $password = md5($_POST["password"]);

                               	$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
								                  $cek = mysqli_num_rows($data);

                               	if($cek > 0 ){
                               		$_SESSION['user'] = mysqli_fetch_array($data);
                               		echo '<script>alert("Selamat datang, Login berhasil");
                               		location.href="index.php";</script>';
                               	}else{
                               		echo '<script>alert("Maaf Ussername/Password Salah");</script>';
                               	}
                               	}

                               	 ?>
                     <form method="post">
                       <div class="form-group">

                         <label class="small mb-1" for="inputEmailaddress">Username</label>
                     	 <input class="form-control" id="username" type="username" name="username" placeholder="Masukan Username">
                       </div>
                       <div class="form-group">
                         <label class="small mb-1" for="inputpassword">Password</label>
                         <input class="form-control" id="inputpassword" type="password" name="password" placeholder="Masukan password">
                       </div>
                                          
                         <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                         <button class="btn btn-info" type="submit" name="login" value="login">Login</button>
                         <a class="btn btn-danger" href="register.php">Register</a>
                          </div>
                       </form>
                     </div>
                            <div class="card-footer text-center">
                               <div class="small">
                               		&copy; 2024 perpustakaan digital.
                               </div>
                           </div>
                        </div>
                     </div>
                  </div>
              </div>
                </main>
            </div>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
