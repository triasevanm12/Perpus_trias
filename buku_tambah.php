<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
             <?php
                  if(isset($_POST['submit'])) {
                    $judul = $_POST['Judul'];
                    $penulis = $_POST['Penulis'];
                    $penerbit = $_POST['Penerbit'];
                    $tahun_terbit = $_POST['TahunTerbit'];
                    $jumlah_buku = $_POST['jml_buku'];
                    $query = mysqli_query($koneksi, "INSERT INTO buku(Judul,Penulis,Penerbit,TahunTerbit,jml_buku) values ('$judul','$penulis','$penerbit','$tahun_terbit','$jumlah_buku')");

                    if($query) {
                        echo '<script>alert("Tambah data berhasil.");</script>';
                    }else{
                        echo '<script>alert("Tambah data gagal.");</script>';
                    }
                  }
             ?>
            <div class="row mb-4">
                <div class="col-md-2">Judul</div>             
                <div class="col-md-8"><input type="text" class="form-control" name="Judul"></div>             
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Penulis</div>             
                <div class="col-md-8"><input type="text" class="form-control" name="Penulis"></div>             
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Penerbit</div>             
                <div class="col-md-8"><input type="text" class="form-control" name="Penerbit"></div>             
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Tahun Terbit</div>             
                <div class="col-md-8"><input type="date" class="form-control" name="TahunTerbit"></div>             
            </div>
            <div class="row mb-4">
                <div class="col-md-2">Jumlah Buku</div>             
                <div class="col-md-8">
                <input type="number" class="form-control" name="jml_buku">    
                </div>         
            </div>
            <div class="row">
            <div class="col-md-2"></div>
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