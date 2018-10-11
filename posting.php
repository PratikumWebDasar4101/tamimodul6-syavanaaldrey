<?php
			require_once("db.php");
    		$id = $_GET['id'];
   			$sql = mysqli_query($conn, "SELECT * FROM siswa WHERE id = '$id'");
    		$row = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Posting</title>
</head>
<body>
	<form method="POST" action="lihatpostingan.php" enctype="multipart/form-data">
		Nama : <?php echo $row['nama'] ?><br>
		NIM : <?php echo $row['nim'] ?><br><br>
	SILAHKAN INPUT POSTINGAN DISINI : <br>
	<textarea rows="20" cols="80" name="cerita"></textarea><br>
	
	<br>
	<input name="filegbr" type="file" id="filegbr" />
	<br>
	<input type="submit" name="kirim" value="KIRIM">
	</form>
</body>
</html>