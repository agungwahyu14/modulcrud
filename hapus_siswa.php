<?php
include ("koneksi.php");

if(isset($_GET['id'])){

    // ambilid dari query string
    $id = $_GET['id'];
    echo "$id";

    // buat query hapus
    $siswa = "DELETE FROM tbsiswa WHERE id=$id";
    $query = mysqli_query($conn,$siswa);

    // Cek Status
    if (($id) > 0) {
        echo "
              <script>
              alert('DATA BERHASIL DIHAPUS !');
              document.location.href = 'index.php';
              </script>
            ";
      } else {
        echo "
              <script>
              alert('DATA GAGAL DIHAPUS !');
              document.location.href = 'index.php';
              </script>
            ";
      }
}
?>