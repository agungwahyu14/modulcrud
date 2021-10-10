<?php
$conn = mysqli_connect("localhost","root","","dbsiswa");

if(!$conn){
    die("Gagal Terhubung ke Database : " . mysqli_connect_error());
}


?>