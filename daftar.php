<html>

<head>

	<title>Form Registrasi</title>

</head>

<body>

<form action="daftarpros.php" method="POST">

		<table>
			<tr>

				<td>

					NAMA

				</td>

				<td>

					<input type="text" name="nama" minlength="1" maxlength="35" required>

				</td> 
			<tr>

				<td>

					NIM

				</td>

				<td>

					<input type="text" name="nim" minlength="1" maxlength="10" required>
			<tr>

				<td>

					Kelas

				</td>

				<td>

					<input type="radio" name="kelas" value="41-01">41-01<br>
					<input type="radio" name="kelas" value="41-02">41-02<br>
					<input type="radio" name="kelas" value="41-03">41-03<br>
					<input type="radio" name="kelas" value="41-04">41-04<br>

				</td>
			<tr>

				<td>

					Jenis Kelamin

				</td>

				<td>

					<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki

					<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan

				</td>
			<tr>

				<td>

					Hobi

				</td>

				<td>

					<input type="checkbox" name="hobi" value="nonton">Nonton

					<input type="checkbox" name="hobi" value="main">Main Bola

					<input type="checkbox" name="hobi" value="berenang">Berenang

					<input type="checkbox" name="hobi" value="membaca">Membaca

					<input type="checkbox" name="hobi" value="makan">Makan

				</td>
			<tr>

				<td>

					Fakultas

				</td>

				<td>

					<select name='fakultas'>

						<option value='fit'>FIT</option>

						<option value='fif'>FIF</option>

						<option value='fkb'>FKB</option>

						<option value='feb'>FEB</option>

						<option value='fik'>FIK</option>

					</select>

				</td>
			<tr>
				<td>
					Alamat
				</td>
				<td>
				<textarea rows="10" cols="30" name="alamat">
					
				</textarea>
			</td>
			<tr>
				<td>

					<input type="submit" name="kirim" value="KIRIM">

				</td>

			</tr>

		</table>

	</form>

</body>

</html>