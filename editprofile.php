<?php
    require_once("db.php");
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM siswa WHERE id = '$id'");
    $row = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>

<html>

    <head>

        <title>Update Data</title>

    </head>

    <body>
        <table>
        <form method="post">
        <tr>

            <td>

                Nama

            </td>

            <td>

                <input type="text" name="nama" placeholder="<?php echo $row['nama'] ?>"><br><br>

            </td>

        <tr>

            <td>

                NIM

            </td>

            <td>

                <input type="text" name="nim" placeholder="<?php echo $row['nim'] ?>"><br><br>

            </td>

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

                <input type="submit" name="submit" value="Submit">

            </td>

        </tr>

        </form>
        </table>
    </body>

</html>

<?php
    if (isset($_POST['nama'])) {
        $nama       = $_POST["nama"];
        $nim        = $_POST["nim"];
        $kelas      = $_POST["kelas"];
        $jenkel     = $_POST["jenis_kelamin"];
        $hobi       = $_POST["hobi"];
        $fakultas   = $_POST["fakultas"];
        $alamat     = $_POST["alamat"];
        $sql = "UPDATE siswa SET  nama='$nama',nim='$nim',kelas='$kelas',jenis_kelamin='$jenkel',hobi='$hobi',fakultas='$fakultas',alamat='$alamat' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            header("location: halamanawal.php");
        }else {
            echo "Error: " . $sql . "<br?" . mysqli_error($conn);
        }
    
        mysqli_close($conn);
    }
?>