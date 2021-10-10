<!-- Read -->
<?php

require ("koneksi.php");

$siswa = "SELECT * FROM tbsiswa";
$query = mysqli_query($conn,$siswa);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SISWA</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

    <header>
        <h3 class="mt-3 text-center">DATA SISWA</h3>
    </header>
    <div class="container">
    <nav>
        <form action="" method="POST">
            <input type="search" class="form-control form-control-md mt-4 mb-2"  name="keyword" placeholder="Cari.." autocomplete="off">
            <button type="submit" class="btn btn-primary" name="cari">Cari</button>
        </form>
        
    </nav>
    </div>

    
    <div class="container">
    <hr>
    <div class="card">
        <div class="card-header bg-primary text-white h4 text-center">
            Tabel Siswa
        </div>
            <div class="card-body">
                <table class="table table-bordered table-striped " cellspacing="0">
                <thead>
                <a class="btn btn-warning mt-2 mb-4" href="tambah_siswa.php" role="button"> Tambah Data</a>
                        <tr>
                            <th>No</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Tools</th>
                        </tr>       
                </thead>
                <tbody>
                <?php $i= 1 ; ?>
                        <?php

                            if(!isset($_POST['cari'])){
                                // jika tombol diclick
                                $siswa="SELECT * FROM tbsiswa";
                                $query = mysqli_query($conn,$siswa);

                            }
                            while($siswa = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $siswa["nis"];?></td>
                                <td><?php echo $siswa["nama"];?></td>
                                <td><?php echo $siswa["kelas"];?></td>
                                <td><?php echo $siswa["jurusan"];?></td>
                                <td>
                                <a href="form_edit_siswa.php?id=<?= $siswa["id"]; ?>" class="btn btn-success">Edit</a> ||
                                <a href="hapus_siswa.php?id=<?= $siswa["id"]; ?>" onclick="return confirm('anda yakin akan menghapus data ini?');" class="btn btn-danger">Hapus</a>
                                </td>
                                <?php
                                
                            }?>
                                
                                </tr>
                                

                                <?php
                                if(isset($_POST['cari'])){
                                    // jika tombol diclick
                                    $cari = $_POST['keyword'];
                                    $query2 = "SELECT * FROM tbsiswa WHERE nama LIKE '%$cari%'";
                                
                                    $siswa = mysqli_query($conn, $query2);
                                    while($r = mysqli_fetch_array($siswa)){
                                        ?>
                                        <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $r["nis"];?></td>
                                        <td><?php echo $r["nama"];?></td>
                                        <td><?php echo $r["kelas"];?></td>
                                        <td><?php echo $r["jurusan"];?></td>
                                        <td>
                                        <a href="form_edit_siswa.php?id=<?= $r["id"]; ?>" class="btn btn-success">Edit</a> ||
                                        <a href="hapus_siswa.php?id=<?= $r["id"]; ?>" onclick="return confirm('anda yakin akan menghapus data ini?');" class="btn btn-danger">Hapus</a>
                                        </td>
                                        <?php
                                       
                                    }} ?>
                                    
                    
                </tbody>
                <?php $i++; ?>
            </table>
            
            </div>
        </div>
    </div>
</div>

</body>
</html>