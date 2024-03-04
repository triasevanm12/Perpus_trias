<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <a href="?page=ulasan_tambah" class="btn btn-primary">+ Tambah Data</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Buku</th>
                <th>Ulasan</th>
                <th>Rating</th>
                <th>Aksi</th>
            </tr>
            <?php
            $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM ulasanbuku LEFT JOIN user on user.UserId = ulasanbuku.UserId LEFT JOIN buku on buku.BukuID = ulasanbuku.BukuID");
                while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $data['NamaLengkap'];?></td>
                        <td><?php echo $data['Judul'];?></td>
                        <td><?php echo $data['Ulasan'];?></td>
                        <td><?php echo $data['Rating'];?></td>
                        <td>
                        <a href="?page=ulasan_ubah&id=<?php echo $data['UlasanID']; ?>" class="btn btn-info">Ubah</a>
                        <a onclick="return confirm('Apakah anda yakin menghapus data ini?');"href="?page=ulasan_hapus&id=<?php echo $data['UlasanID']; ?>" class="btn btn-danger">Hapus</a>
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