<?php
include '../koneksi.php';

$nama              = $_POST['nama'];
$jenis_kelamin     = $_POST['jenis_kelamin'];
$jabatan           = $_POST['jabatan'];
$alamat            = $_POST['alamat'];

if (isset($_POST['tambah'])) {
    mysqli_query($koneksi, "INSERT INTO pegawai SET nama='$nama', jenis_kelamin='$jenis_kelamin', jabatan='$jabatan', alamat='$alamat'");
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];

    mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama', jenis_kelamin='$jenis_kelamin', jabatan='$jabatan', alamat='$alamat' WHERE id='$id'");
}

header('location: ../index.php');
