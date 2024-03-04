<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasanbuku WHERE UlasanID=$id");
?>
<script>
    alert('Hapus data berhasil');
    location.href = "index.php?page=ulasan";
</script>