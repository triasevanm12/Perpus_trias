<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <a href="?page=kategori_tambah" class="btn btn-primary">+ Tambah Data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM kategoribuku");
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['NamaKategori'];?></td>
                        <td>
                        <a href="?page=kategori_ubah&id=<?php echo $data['KategoriID']; ?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');"href="?page=kategori_hapus&id=<?php echo $data['KategoriID']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                 </tr>
                 <?php
                    $i++;
                }
            ?>
        </table>
    </div>
</div>
    </div>
</div>