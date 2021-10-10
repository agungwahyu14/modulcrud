<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <div class="container">
    <header>
        <h3 class="text-center mt-3">Tambah Siswa</h3>
    </header>
    <div class="card mt-5">
        <div class="card-header bg-warning text-white h4 text-center">
            Input Siswa 
        </div>
            <div class="card-body">
    <form action="proses_tambah_siswa.php" method="POST">
            <div class="nis">
                <label for="nis">Nis :</label><br>
                <input class="form-control form-control-md mt-2" type="text" name="nis" placeholder="Nis Siswa..">
            </div>
            <div class="nama">
                <label for="nama">Nama :</label><br>
                <input type="text" class="form-control form-control-md mt-2" name="nama" placeholder="Nama Siswa..">
            </div>
            <div class="kelas">
                <label for="kelas">Pilih Kelas :</label><br>
                <select name="kelas" class="form-control form-control-md mt-2">
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>
                </select>
            </div>
            <div class="jurusan">
                <label for="jurusan">Pilih Jurusan :</label><br>
                <select name="jurusan" class="form-control form-control-md mt-2">
                    <option>RPL</option>
                    <option>MM</option>
                    <option>TKJ</option>
                    <option>TITL</option>
                </select>
            </div>

            <button class="btn btn-warning mt-3" type="submit"  name="simpan">Tambah</button>

    </form>
    </div>
    </div>
    </div>
    </div>
    
</body>
</html>