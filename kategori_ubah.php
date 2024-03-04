<h1 class="mt-4">Ubah Kategori Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
             <?php
               $id = $_GET['id'];
                  if(isset($_POST['submit'])) {
                    $Nama_kategori = $_POST['NamaKategori'];
                    $query = mysqli_query($koneksi, "UPDATE kategoribuku SET NamaKategori='$Nama_kategori' WHERE kategoriID='$id'");

                    if($query) {
                        echo '<script>alert("Ubah data berhasil.");</script>';
                    }else{
                        echo '<script>alert("Ubah data gagal.");</script>';
                    }
                  }
                
                  $query = mysqli_query($koneksi, "SELECT*FROM kategoribuku where kategoriID=$id");
                  $data = mysqli_fetch_array($query);
             ?>
            <div class="row mb-3">
                <div class="col-md-2">Nama Kategori</div>             
                <div class="col-md-8"><input type="text" class="form-control" value="<?php echo $data['NamaKategori']; ?>"name="NamaKategori"></div>             
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