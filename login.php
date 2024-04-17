<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-dark">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-primary text-white">
                                            <h3 class="text-center font-weight-bold my-4">Login Perpustakaan Digital</h3>
                                        </div>

                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['login'])) {
                                                $username = $_POST['username'];
                                                $password = md5($_POST['password']);

                                                $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
                                                $cek = mysqli_num_rows($data);
                                                if($cek > 0 ){
                                                    $_SESSION['user'] = mysqli_fetch_array($data);
                                                    echo '<script>alert("selamat datang, login berhasil"); location.href="index.php";</script>';
                                                }else{

                                                    echo '<script>alert("maaf, username/password salah")</script>';
                                                }
                                            }
                                        ?><form method="post" class="row g-3">
                                        <div class="col-md-12">
                                            <label for="inputEmail" class="form-label">Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                <input type="text" class="form-control" id="inputEmailAdress" name="username" placeholder="Enter username" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword" class="form-label">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
                                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-grid">
                                            <button class="btn btn-primary btn-lg" type="submit" name="login" value="login">Login</button>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <span>Don't have an account? </span><a href="register.php">Register here</a>
                                        </div>
                                    </form>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>