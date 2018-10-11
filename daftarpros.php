<?php
require_once("db.php");
$nama	 	= $_POST["nama"];
$nim 		= $_POST["nim"];
$kelas		= $_POST["kelas"];
$jenkel		= $_POST["jenis_kelamin"];
$hobi		= $_POST["hobi"];
$fakultas	= $_POST["fakultas"];
$alamat		= $_POST["alamat"];
$sql = "INSERT INTO siswa VALUES('','$nama','$nim','$kelas','$jenkel','$hobi','$fakultas','$alamat')";
if (mysqlI_query($conn, $sql)) {
    echo "New record created successfully<br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
echo "Silahkan klik <a href='login.php'>link ini</a> untuk LOGIN dahulu";
?> 