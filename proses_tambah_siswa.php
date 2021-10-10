<?php

include ("koneksi.php");

// cek apakash tombol simpan sudah diclick atau belum?
if(isset($_POST['simpan'])){
    // ambil data 
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // buat query
    $siswa = "INSERT INTO tbsiswa (nis, nama, kelas, jurusan) VALUES ('$nis', '$nama', '$kelas', '$jurusan')"; 
    $query = mysqli_query($conn,$siswa);

    // Cek Status

        if (isset($_POST["simpan"])) {
            // cek apakah data berhasil di tambah atau tidak
            if (($_POST) > 0) {
              echo "
                  <script>
                  alert('DATA BERHASIL DITAMBAH !');
                  document.location.href = 'index.php';
                  </script>
                ";
            } else {
              echo "
                  <script>
                  alert('DATA GAGAL DITAMBAH !!');
                  document.location.href = 'index.php';
                  </script>
                ";
            }
          }else{
              die("Akses Dilarang..");
          }
    }

?>