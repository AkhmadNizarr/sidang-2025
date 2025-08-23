<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <center>
        <h2>Edit Data</h2>
        <table>
            <?php
            $id_pegawai     = $_POST['id_pegawai'];
            $sql    = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <form action="<?= $folder; ?>/proses.php" method="post">
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama_pegawai" value="<?= $data['nama_pegawai']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <select name="jenis_kelamin" id="">
                                <option value="<?= $data['jenis_kelamin']; ?>" selected><?= $data['jenis_kelamin']; ?></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td><input type="text" name="jabatan" value="<?= $data['jabatan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea type="date" name="alamat" ><?= $data['alamat']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="id_pegawai" value="<?= $id_pegawai; ?>">
                            <button type="submit" name="edit">SIMPAN</button>
                        </td>
                    </tr>
                </form>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>