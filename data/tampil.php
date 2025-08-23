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
        <form action="" method="post">
            <button name="tambah">Tambah Data</button>
            <button name="cetak">Cetak Data</button>
        </form>
        <hr>
        <hr>
        <table border="1">
            <thead>
                <th>No.</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </thead>
            <?php
            $no     = 1;
            $sql    = mysqli_query($koneksi, "SELECT * FROM pegawai");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tbody>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['jenis_kelamin']; ?></td>
                    <td><?= $data['jabatan']; ?></td>
                    <td><?= $data['alamat']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <button name="edit">EDIT</button>
                            <button name="hapus" onclick="return confirm('Yakin Ingin Menghapus Data?')">HAPUS</button>
                        </form>
                    </td>
                </tbody>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>