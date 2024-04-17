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
        <title>Register ke Perpustakaan Digital</title>
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
                                            <h3 class="text-center font-weight-bold my-4">Register Perpustakaan Digital</h3>
                                        </div>

                                    <div class="card-body">
                                        <?php
                                            if(isset($_POST['register'])) {
                                                $nama = $_POST['nama'];
                                                $email = $_POST['email'];
                                                $alamat = $_POST['alamat'];
                                                $no_telepon = $_POST['no_telepon'];
                                                $username = $_POST['username'];
                                                $level = $_POST['level'];
                                                $password = md5($_POST['password']);

                                                $insert = mysqli_query($koneksi, "INSERT INTO user (nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                                                if($insert) {
                                                    echo '<script>alert("Selamat, register berhasil. Silahkan Login."); location.href="login.php"</script>';
                                                }else{
                                                    echo '<script>alert("Register Gagal, Silahkan Ulangi Kembali.");</script>';
                                                }
                                            }
                                        ?>
                                        <form method="post" class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputNama" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Masukkan Email" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputUsername" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Masukkan Username" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="inputAlamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="inputalamat"  name="alamat" placeholder="Masukkan Alamat" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="small mb-1">Level</label>
                                                <select name="level" required class="form-select">
                                                    <option value="peminjam">peminjam</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 d-grid">
                                                <button class="btn btn-primary btn-lg" type="submit" name="register" value="register">Register</button>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <span>Sudah punya akun? </span><a href="login.php">Login disini</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>