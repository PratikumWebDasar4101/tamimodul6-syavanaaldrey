<?php
require_once("db.php");
?>

<html>

<body>

<table border="1">

		<tr>

			<th>Nama</th>
			<th>NIM</th>
			<th>Kelas</th>
			<th>Jenis Kelamin</th>
			<th>Hobi</th>
			<th>Fakultas</th>
			<th>Alamat</th>
			<th>Aksi</th>
			<th>Lihat Posting</th>

		</tr>

		<?php
            $sql = "SELECT * FROM siswa";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>

				<tr>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['nim']?></td>
				<td><?php echo $row['kelas']?></td>
				<td><?php echo $row['jenis_kelamin']?></td>
				<td><?php echo $row['hobi']?></td>
				<td><?php echo $row['fakultas']?></td>
				<td><?php echo $row['alamat']?></td>
				<td><a href="editprofile.php?id=<?php echo $row['id']?>">Update</a> | <a href="posting.php?id=<?php echo $row['id']?>">Posting</a></td>
				<td><a href="daftarpostingan.php?id=<?php echo $row['id']?>">Lihat Postingan</a></td>

				</tr>

				<?php
			}
		}else {
			echo "0 Result";
		}
		mysqli_close($conn);
        ?>


</table>

</body>

</html>

<h3><a href="daftar.php">ISI FORM REGISTRASI</a></h3>