<?php
include "db.php";
$idTiket = $_GET['detail'];
$result = mysqli_query($dbkonek, "SELECT * FROM tiket WHERE idTiket='$idTiket'");
$a = mysqli_fetch_array($result);
?>
<center>
	<table class="tabel" style="width: 50%;">
		<tr>
			<td>Kode Tiket</td>
			<td>:</td>
			<td><?= $a['kodeTiket']?></td>
		</tr>
		<tr>
			<td>Kode Pesawat</td>
			<td>:</td>
			<td><?= $a['kodePesawat']?></td>
		</tr>
		<tr>
			<td>Nama Penumpang</td>
			<td>:</td>
			<td><?= $a['namaPembeli']?></td>
		</tr>
		<tr>
			<td>Tanggal Penerbangan</td>
			<td>:</td>
			<td><?= $a['tglBerangkat']?></td>
		</tr>
		<tr>
			<td>Waktu Berangkat</td>
			<td>:</td>
			<td><?= $a['waktuBerangkat']?></td>
		</tr>
		<tr>
			<td>Waktu Sampai</td>
			<td>:</td>
			<td><?= $a['waktuSampai']?></td>
		</tr>
		<tr>
			<td>Berangkat</td>
			<td>:</td>
			<td><?= $a['berangkat']?></td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td>:</td>
			<td><?= $a['tujuan']?></td>
		</tr>
		<tr>
			<td>Harga Tiket</td>
			<td>:</td>
			<td>Rp.<?= number_format($a['harga'],0,'.','.')?>,-</td>
		</tr>
		<tr>
			<td>No Kursi</td>
			<td>:</td>
			<td><?= $a['noKursi']?></td>
		</tr>
		<tr>
			<td>Kelas Pesawat</td>
			<td>:</td>
			<td><?= $a['kelas']?></td>
		</tr>
		<tr>
			<td colspan="3"><a onclick="window.print()"><input type="button" class="submit" value="Cetak"></a></td>
		</tr>
	</table>
</center>