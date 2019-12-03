<center>
		<table class="tabel">
			<tr>
				<th>Kode Tiket</th>
				<th>Kode Pesawat</th>
				<th>Nama Penumpang</th>
				<th>Penerbangan</th>
				<th>Tujuan</th>
				<th colspan="2">Aksi</th>
			</tr>
				<?php
					include "db.php";
					$result = mysqli_query ($dbkonek, "SELECT * FROM tiket ORDER BY idTiket");
					
					while($a = mysqli_fetch_array($result)){
				?>
			<tr>
				<td><?= $a['kodeTiket']?></td>
				<td><?= $a['kodePesawat']?></td>
				<td><?= $a['namaPembeli']?></td>
				<td><?= $a['berangkat']?></td>
				<td><?= $a['tujuan']?></td>
				<td><a href=".?detail=<?= $a['idTiket']?>">Detail</a></td>
				<td><a href="?act=data-tiket&hapus=<?= $a['idTiket']?>">Hapus</a></td>
			</tr>
			<?php }?>
		</table>
</center>
<?php
	include "db.php";
	if(isset($_GET['hapus'])){
		$idTiket = $_GET['hapus'];
		$q = $dbkonek->query("DELETE FROM tiket WHERE idTiket='$idTiket'");
		if($q){
			header ("location:index.php?act=data-tiket");
		}
	}
?>