<?php
include 'koneksi.php';
$title = "Data Pegawai";
$folder = "data";

if (isset($_POST['tambah'])) {
    include '' . $folder . '/tambah.php';
} else if (isset($_POST['edit'])) {
    include '' . $folder . '/edit.php';
} else if (isset($_POST['hapus'])) {
    include '' . $folder . '/hapus.php';
} else if (isset($_POST['cetak'])) {
    include '' . $folder . '/cetak.php';
} else {
    include '' . $folder . '/tampil.php';
}
