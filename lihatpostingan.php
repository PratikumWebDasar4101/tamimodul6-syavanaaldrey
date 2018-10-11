<?php
	$post = $_POST["cerita"];
	if(strlen($post) < 30){
		echo "KOMENTAR HARUS LEBIH DARI 30!";
		echo "<br><a href ='posting.php'>RE-POSTING</a>";
	} else{
		echo $post . "<br><br>";
		echo "Panjang Kata Postingan : " . strlen($post);
		echo "<br>";
	}

	$file = $_FILES['filegbr'];
	$nama_file = $file['name'];
	$nama_tmp = $file['tmp_name']; 
	$upload_dir = "upload/";
	move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
	echo "File berhasil diunggah. <br>"
?>
<img src="upload/<?php echo $nama_file; ?>">
<br>
<a href="halamanawal.php">KEMBALI KE MENU AWAL</a>