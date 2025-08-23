<?php
include '../koneksi.php';

$nama_pegawai              = $_POST['nama_pegawai'];
$jenis_kelamin     = $_POST['jenis_kelamin'];
$jabatan           = $_POST['jabatan'];
$alamat            = $_POST['alamat'];

if (isset($_POST['tambah'])) {
    mysqli_query($koneksi, "INSERT INTO pegawai SET nama_pegawai='$nama_pegawai', jenis_kelamin='$jenis_kelamin', jabatan='$jabatan', alamat='$alamat'");
}

if (isset($_POST['edit'])) {
    $id_pegawai = $_POST['id_pegawai'];

    mysqli_query($koneksi, "UPDATE pegawai SET nama_pegawai='$nama_pegawai', jenis_kelamin='$jenis_kelamin', jabatan='$jabatan', alamat='$alamat' WHERE id_pegawai='$id_pegawai'");
}

header('location: ../index.php');
