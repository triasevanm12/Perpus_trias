<?php
session_start();
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
        <title>Register Ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if(isset($_POST['nama'])){
                                            $nama = $_POST['nama'];
                                            // $email = $_POST['email'];
                                            // $alamat = $_POST['alamat'];
                                            // $no_telepon = $_POST['no_telepon'];
                                            $username = $_POST['username'];
                                            $level = $_POST['level'];
                                            $password =md5 ($_POST['password']);

                                            $insert = mysqli_query($koneksi, "INSERT INTO user(Username,Password,NamaLengkap,level)VALUES('$username','$password','$nama','$level')");
                                            
                                            if($insert){
                                                echo '<script>alert("Selamat, register berhasil. Silahkan Login"); location.href="login.php";</script>';
                                            }else{
                                                
                                                echo '<script>alert("Register gagal, Silahkan ulangi kembali. ");</script>';    
                                            
                                            }
                                         }
                                        
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1">Nama Lengkap</label>
                                                <input class="form-control py-4" type="text" required name="nama" placeholder="Masukan Nama Lengkap" />
                                            </div>

                                            <!-- <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input class="form-control py-4" type="text" required name="email" placeholder="Masukan Email" />
                                            </div> -->

                                            <!-- <div class="form-group">
                                                <label class="small mb-1">Alamat</label>
                                                <textarea name="alamat" rows="5" class="form-control"></textarea>
                                            </div> -->

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py-4" type="username" required name="username" placeholder="Masukan Username" />
                                            </div>

                                            <!-- <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">No Telp</label>
                                                <input class="form-control py-4" type="number" required name="no_telepon" placeholder="Masukan Username" />
                                            </div> -->

                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" required name="password" type="password" placeholder="Masukan Password" />
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1">Level</label>
                                                <select name="level" required class="form-control">
                                                    <option value="peminjam">Peminjam</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="Petugas">Petugas</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="submit">Register</button>
                                                <a class="btn btn-danger" href="login">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            &copy; 2024 Perpustakaan Digital.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
