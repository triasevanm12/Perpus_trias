<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
             <?php
                  $id = $_GET['id'];
                  if(isset($_POST['submit'])) {
                    $judul = $_POST['Judul'];
                    $penulis = $_POST['Penulis'];
                    $penerbit = $_POST['Penerbit'];
                    $tahun_terbit = $_POST['TahunTerbit'];
                    $jumlah_buku = $_POST['jml_buku'];
                    $query = mysqli_query($koneksi, "UPDATE buku SET Judul='$judul', Penulis='$penulis', Penerbit='$penerbit', TahunTerbit='$tahun_terbit', jml_buku='$jumlah_buku' WHERE BukuID=$id");

                    if($query) {
                        echo '<script>alert("ubah data berhasil.");</script>';
                    }else{
                        echo '<script>alert("ubah data gagal.");</script>';
                    }
                  }
                  $query = mysqli_query($koneksi, "SELECT*FROM buku WHERE bukuID=$id");
                  $data = mysqli_fetch_array($query);
             ?>
            <div class="row mb-3">
                <div class="col-md-2">Judul</div>             
                <div class="col-md-8"><input type="text" value="<?php echo $data['Judul']; ?>" class="form-control" name="Judul"></div>             
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Penulis</div>             
                <div class="col-md-8"><input type="text" value="<?php echo $data['Penulis']; ?>" class="form-control" name="Penulis"></div>             
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Penerbit</div>             
                <div class="col-md-8"><input type="text" value="<?php echo $data['Penerbit']; ?>" class="form-control" name="Penerbit"></div>             
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Tahun Terbit</div>             
                <div class="col-md-8"><input type="date" value="<?php echo $data['TahunTerbit']; ?>" class="form-control" name="TahunTerbit"></div>             
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Jumlah Buku</div>             
                <div class="col-md-8">
                    <input type="number" value="<?php echo $data['jml_buku']; ?>" class="form-control" name="jml_buku">
                </div>            
            </div>
            <div class="row">
                <div class="col-md-8">
                     <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                     <button type="reset" class="btn btn-secondary">Reset</button>
                     <a href="?page=buku" class="btn btn-danger">kembali</a>
                </div>
            </div>
        </form>
    </div>
  </div>
  </div>
</div>