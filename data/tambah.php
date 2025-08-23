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
        <h2>Tambah Data</h2>
        <table>
            <form action="<?= $folder; ?>/proses.php" method="post">
                <tr>
                    <td>Nama Pegawai</td>
                    <td><input type="text" name="nama_pegawai"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jenis_kelamin" id="">
                            <option value="" selected disabled>--Pilih Data</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                 <tr>
                    <td>Jabatan</td>
                    <td><input type="text" name="jabatan"></td>
                </tr>
                 <tr>
                    <td>Alamat</td>
                    <td><textarea type="text" name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="tambah">SIMPAN</button>
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>

</html>