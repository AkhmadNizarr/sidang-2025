<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <script>
        window.print();
    </script>
</head>

<body>
    <center>
    <h2>Cetak Data</h2>
        <hr>
        <hr>
        <table border="1">
            <thead>
                <th>No.</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Alamat</th>
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
                </tbody>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>