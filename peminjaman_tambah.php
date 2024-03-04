<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
             <?php
                  if(isset($_POST['submit'])) {
                    $bukuID = $_POST['BukuID'];
                    $userID = $_SESSION['user']['UserID'];
                    $tanggal_peminjaman = $_POST['TanggalPeminjaman'];
                    $tanggal_pengembalian = $_POST['TanggalPengembalian'];
                    $status_peminjaman = $_POST['StatusPeminjaman'];
                    $query = mysqli_query($koneksi, "INSERT INTO peminjaman(BukuID,UserID,TanggalPeminjaman,TanggalPengembalian,StatusPeminjaman) values('$bukuID','$userID','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman')  ON DUPLICATE KEY UPDATE TanggalPeminjaman='$tanggal_peminjaman', TanggalPengembalian='$tanggal_pengembalian'");
                    if($query) {
                        echo '<script>alert("Tambah data berhasil.");</script>';
                    }else{
                        echo '<script>alert("Tambah data gagal.");</script>';
                    }
                  }
             ?>
            <div class="row mb-3">
                <div class="col-md-2">Buku</div>             
                <div class="col-md-8">
                    <select name="BukuID" class="form-control">
                        <?php
                           $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                           while($buku = mysqli_fetch_array($buk)) {
                            ?>
                            <option value="<?php echo $buku['BukuID']; ?>"><?php echo $buku['Judul'];?></option>
                            <?php
                           }
                        ?>
                    </select>         
            </div>             
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Tanggal Peminjaman</div>             
                <div class="col-md-8">
                    <input type="date" class="form-control" name="TanggalPeminjaman">
                </div>          
            </div>
            <div class="row mb-4">
            <div class="col-md-2">Tanggal Pengembalian</div>             
                <div class="col-md-8">
                    <input type="date" class="form-control" name="TanggalPengembalian">
                </div>          
            </div>
            <div class="row mb-4">
            <div class="col-md-2">Status Peminjaman</div>             
                <div class="col-md-8">
                    <select name="StatusPeminjaman" class="form-control">
                    <option value="dipinjam">Di Pinjam</option>
                    <option value="dikembalikan">Di Kembalikan</option>        
                    </select> 
                </div>
             </div>
               <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                     <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                     <button type="reset" class="btn btn-secondary">Reset</button>
                     <a href="?page=peminjaman" class="btn btn-danger">kembali</a>
              </div>
            </div>
        </form>
    </div>
  </div>
  </div>
</div>