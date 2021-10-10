<?php

include ("koneksi.php");

// kalau tidak ada id di query string
if(!isset($_GET['id'])){
    header('location:index.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$siswa = "SELECT * FROM tbsiswa WHERE id=$id";
$query= mysqli_query($conn, $siswa);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan 
if(mysqli_num_rows($query) < 1 ){
    die("datda tidak dapat ditemukan..");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Edit Data Siswa</title>
</head>
<body>
    <div class="container">
    <header>
        <h3 class="text-center mt-3">Edit Siswa</h3>
    </header>
    <div class="card mt-5">
        <div class="card-header bg-success text-white h4 text-center">
            Edit Siswa 
        </div>
            <div class="card-body">
    <form action="proses_edit_siswa.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id']?>"/>
            <div class="nis">
                <label for="nis">Nis :</label><br>
                <input type="text"  class="form-control form-control-md mt-2" name="nis" placeholder="Nis Siswa.."  value="<?php echo $siswa['nis']?>">
            </div>
            <div class="nama">
                <label for="nama">Nama :</label><br>
                <input type="text"  class="form-control form-control-md mt-2" name="nama" placeholder="Nama Siswa.."  value="<?php echo $siswa['nama']?>">
            </div>
            <div class="kelas">
                <label for="kelas">Pilih Kelas :</label><br>
                <?php $kelas = $siswa['kelas']?>
                <select name="kelas"  class="form-control form-control-md mt-2">
                    <option <?php echo ($kelas == 'X') ? "selected": "" ?>>X </option>
                    <option <?php echo ($kelas == 'XI') ? "selected": "" ?>>XI</option>
                    <option <?php echo ($kelas == 'XII') ? "selected": "" ?>>XII</option>
                </select>
            </div>
            <div class="jurusan">
                <label for="jurusan">Pilih Jurusan :</label><br>
                <?php $jurusan = $siswa['jurusan']?>
                <select name="jurusan"  class="form-control form-control-md mt-2" >
                    <option <?php echo ($jurusan == 'RPL') ? "selected": "" ?>>RPL</option>
                    <option <?php echo ($jurusan == 'MM') ? "selected": "" ?>>MM</option>
                    <option <?php echo ($jurusan == 'TKJ') ? "selected": "" ?>>TKJ</option>
                    <option <?php echo ($jurusan == 'TITL') ? "selected": "" ?>>TITL</option>
                </select>
            </div>

            <button class="btn btn-success mt-3" type="submit" value="edit" name="edit">Edit</button>

      
    </form>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>