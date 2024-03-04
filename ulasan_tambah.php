<h1 class="mt-4">Ulasan Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
             <?php
                  if(isset($_POST['submit'])) {
                    $bukuID = $_POST['BukuID'];
                    $userID = $_SESSION['user']['UserID'];
                    $ulasan = $_POST['Ulasan'];
                    $rating = $_POST['Rating'];
                    $query = mysqli_query($koneksi, "INSERT INTO ulasanbuku(BukuID,UserID,Ulasan,Rating) values('$bukuID','$userID','$ulasan','$rating')  ON DUPLICATE KEY UPDATE Ulasan='$ulasan', Rating='$rating'");
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
                <div class="col-md-2">Ulasan</div>             
                <div class="col-md-8">
                    <textarea name="Ulasan" rows="5" class="form-control"></textarea>   
                        </div>          
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Rating</div>             
                <div class="col-md-8">
                    <select name="Rating" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>           
                </div>
                </div>
            <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                     <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                     <button type="reset" class="btn btn-secondary">Reset</button>
                     <a href="?page=ulasan" class="btn btn-danger">kembali</a>
                </div>
            </div>
        </form>
    </div>
  </div>
  </div>
</div>