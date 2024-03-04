<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
             <?php
                  if(isset($_POST['submit'])) {
                    $nama_kategori = $_POST['NamaKategori'];
                    $query = mysqli_query($koneksi, "INSERT INTO kategoribuku (NamaKategori) values('$nama_kategori')");                    ;

                    if($query) {
                        echo '<script>alert("Tambah data berhasil.");</script>';
                    }else{
                        echo '<script>alert("Tambah data gagal.");</script>';
                    }
                  }
             ?>
            <div class="row mb-3">
                <div class="col-md-2">Nama Kategori</div>             
                <div class="col-md-8"><input type="text" class="form-control" name="NamaKategori"></div>             
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                     <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                     <button type="reset" class="btn btn-secondary">Reset</button>
                     <a href="?page=kategori" class="btn btn-danger">kembali</a>
                </div>
            </div>
        </form>
    </div>
  </div>
  </div>
</div>