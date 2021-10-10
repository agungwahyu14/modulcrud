<?php
include ("koneksi.php");

// cek apakah tombol edit sudah diclik?
if(isset($_POST['edit']));

    // ambil data 
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // buat query update
    $siswa = "UPDATE tbsiswa SET nis='$nis', nama='$nama', kelas='$kelas' , jurusan='$jurusan' WHERE id=$id";
    $query = mysqli_query($conn,$siswa);

    // cek status
    if (isset($_POST["edit"])) {
        // cek apakah data berhasil di tambah atau tidak
        if (($_POST) > 0) {
          echo "
              <script>
              alert('DATA BERHASIL DIRUBAH !');
              document.location.href = 'index.php';
              </script>
            ";
        } else {
          echo "
              <script>
              alert('DATA GAGAL DIRUBAH !!');
              document.location.href = 'index.php';
              </script>
            ";
        }
      }else{
          die("Akses Dilarang..");
      }



?>