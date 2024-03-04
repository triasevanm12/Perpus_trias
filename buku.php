<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <a href="?page=buku_tambah" class="btn btn-primary">+ Tambah Data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>jumlah buku</th>
                <th>Aksi</th>
            </tr>
            <?php
               $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM buku");
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['Judul'];?></td>
                        <td><?php echo $data['Penulis'];?></td>
                        <td><?php echo $data['Penerbit'];?></td>
                        <td><?php echo $data['TahunTerbit'];?></td>
                        <td><?php echo $data['jml_buku'];?></td>
                        <td>
                        <a href="?page=buku_ubah&id=<?php echo $data['BukuID']; ?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');"href="?page=buku_hapus&id=<?php echo $data['BukuID']; ?>" class="btn btn-danger">Hapus</a>
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