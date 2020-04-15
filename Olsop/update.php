<?php
require_once( "db.php");

$nama_pembeli= $_POST['nama_pembeli'];
$alamat= $_POST['alamat'];
$telepon= $_POST['telepon'];
$jmlh= $_POST['jmlh'];
$jumlah= $_POST['jumlah'];
$tanggal= $_POST['tanggal'];
$nama_barang= $_POST['nama_barang'];
$id= $_POST['id'];

$insert = "INSERT INTO beli( nama_pembeli, alamat, telepon, jmlh,tanggal,nama_barang) VALUES('$nama_pembeli', '$alamat', '$telepon','$jmlh','$tanggal','$nama_barang')";

if ($db->query($insert) === TRUE) {
echo "new record created successfully";
} else {

}
$update = "UPDATE barang SET jumlah=$jumlah - $jmlh WHERE id='$id'";

if ($db->query($update) === TRUE) {
    echo "Update successfully";
} else {
}
$db->close();
header("location: index.php");
exit;

?>