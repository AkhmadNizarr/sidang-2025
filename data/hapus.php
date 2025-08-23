<?php
$id_pegawai = $_POST['id_pegawai'];
mysqli_query($koneksi, "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");
header('location: index.php');
