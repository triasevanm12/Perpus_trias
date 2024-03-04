<h1 class="mt-4">Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
             <?php
             $id= $_GET['id'];
                  if(isset($_POST['submit'])) {
                    $bukuID = $_POST['BukuID'];
                    $userID = $_SESSION['user']['UserID'];
                    $tanggal_peminjaman = $_POST['TanggalPeminjaman'];
                    $tanggal_pengembalian = $_POST['TanggalPengembalian'];
                    $status_peminjaman = $_POST['StatusPeminjaman'];
                    $query = mysqli_query($koneksi, "UPDATE peminjaman set BukuID='$bukuID', TanggalPeminjaman='$tanggal_peminjaman', TanggalPengembalian='$tanggal_pengembalian', StatusPeminjaman='$status_peminjaman' WHERE PeminjamanID=$id");
                    if($query) {
                        echo '<script>alert("Ubah data berhasil.");</script>';
                    }else{
                        echo '<script>alert("Ubah data gagal.");</script>';
                    }
                  }
                  $query = mysqli_query($koneksi, "SELECT*FROM peminjaman where PeminjamanID=$id");
                  $data = mysqli_fetch_array($query);
             ?>
            <div class="row mb-3">
                <div class="col-md-2">Buku</div>             
                <div class="col-md-8">
                    <select name="BukuID" class="form-control">
                        <?php
                           $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                           while($buku = mysqli_fetch_array($buk)) {
                            ?>
                            <option <?php if($buku['BukuID'] == $data['BukuID']) echo 'selected';?>value="<?php echo $buku['BukuID']; ?>"><?php echo $buku['Judul'];?></option>
                            <?php
                           }
                        ?>
                    </select>         
            </div>             
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Tanggal Peminjaman</div>             
                <div class="col-md-8">
                    <input type="date" class="form-control" value="<?php echo $data['TanggalPeminjaman']; ?>"name="TanggalPeminjaman">
                </div>          
            </div>
            <div class="row mb-4">
            <div class="col-md-2">Tanggal Pengembalian</div>             
                <div class="col-md-8">
                    <input type="date" class="form-control" value="<?php echo $data['TanggalPengembalian']; ?>"name="TanggalPengembalian">
                </div>          
            </div>
            <div class="row mb-4">
            <div class="col-md-2">Status Peminjaman</div>             
                <div class="col-md-8">
                    <select name="StatusPeminjaman" class="form-control">
                    <option value="dipinjam" <?php if($data['StatusPeminjaman'] == 'dipinjam') echo 'selected'; ?>>Di Pinjam</option>
                    <option value="dikembalikan" <?php if($data['StatusPeminjaman'] == 'dikembalikan') echo 'selected'; ?>>Di Kembalikan</option>        
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