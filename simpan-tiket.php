<?php
include 'db.php';

$kodeTiket = $_POST['kodeTiket'];
$kodePesawat = $_POST['kodePesawat'];
$namaPembeli = $_POST['namaPembeli'];
$berangkat = $_POST['berangkat'];
$tujuan = $_POST['tujuan'];
$tglBerangkat = $_POST['tglBerangkat'];
$waktuBerangkat = $_POST['waktuBerangkat'];
$waktuSampai = $_POST['waktuSampai'];
$harga = $_POST['harga'];
$noKursi = $_POST['noKursi'];
$kelas = $_POST['kelas'];
$total = $harga;

$result= mysqli_query($dbkonek,"insert into tiket values(NULL, '$kodeTiket','$kodePesawat','$namaPembeli','$tglBerangkat','$waktuBerangkat','$waktuSampai','$harga','$noKursi','$kelas','$berangkat','$tujuan','$total')");
if($result){
	$p = mysqli_query($dbkonek,"insert into transaksi values(NULL, '$kodeTiket','$total')");
	if($p){
	header ("location:index.php?act=data-tiket");
	
}
}
?>
