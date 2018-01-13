<!DOCTYPE html>
<html>
<head>
	<title>Data Penjualan</title>
</head>
<body>
	<style type="text/css">
		table tr td{
			padding: 4px;
		}
	</style>

	<a href="<?=base_url().'penjualan/tambah';?>">Tambah</a>

	<table border="1">
		<tr>
			<td>Id Penjual</td>
			<td>Tanggal Pembelian</td>
			<td>Id Liquid</td>
			<td>Jenis Luquid</td>
			<td>Id Pembeli</td>
			<td>Nama Pembeli</td>
			<td>Jumlah Pembelian</td>
			<td>Total Harga</td>
			<td>Aksi</td>
		</tr>
		<?php
		foreach ($data as $field) {
		?>
		<tr>
			<td><?=$field->id_jual;?></td>
			<td><?=$field->tanggal_beli;?></td>
			<td><?=$field->id_liquid;?></td>
			<td><?=$field->jenis_liquid;?></td>
			<td><?=$field->id_pembeli;?></td>
			<td><?=$field->nama_pembeli;?></td>
			<td><?=$field->jumlah_beli;?></td>
			<td><?=$field->total;?></td>
			<td><a href="<?=base_url().'penjualan/hapus/'.$field->id_jual;?>" onclick="return confirm('Hapus data ini ?');">Hapus</a></td>
		</tr>

		<?php } ?>
	</table>
</body>
</html>