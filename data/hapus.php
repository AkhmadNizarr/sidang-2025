<?php
$id = $_POST['id'];
mysqli_query($koneksi, "DELETE FROM pegawai WHERE id='$id'");
header('location: index.php');
