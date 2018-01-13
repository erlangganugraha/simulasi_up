<!DOCTYPE html>
<html>
<head>
	<title>Tambah Penjualan</title>
</head>
<body>
	<style type="text/css">
		label{
			width: 200px;
			display: inline-grid;
		}

		input, select{
			margin:5px;
		}
	</style>

	<?php
	echo form_open('penjualan/tambah');
	?>
		<h3>Form Tambah Pernjualan Liquid</h3>
		<label>Id Penjualan</label>
		<input type="text" name="id_jual" /><br/>

		<label>Tanggal Pembelian</label>
		<input type="text" name="tanggal_beli" /><br/>

		<label>Id Liquid</label>
		<select name="id_liquid">
			<?php
			foreach ($liquid as $lqd) {
			?>

			<option value="<?=$lqd->id_liquid;?>"> <?=$lqd->id_liquid;?> </option>

			<?php } ?>
		</select><br/>

		<label>Id Pembeli</label>
		<select name="id_pembeli">

			<?php
			foreach ($pembeli as $pmb) {
			?>

			<option value="<?=$pmb->id_pembeli;?>"> <?=$pmb->id_pembeli;?> </option>

			<?php } ?>

		</select><br/>

		<label>Jumlah Beli</label>
		<input type="text" name="jumlah_beli" id="jumlah_beli" onkeyup="hitung()" /> x 125.000<br/>

		<label>Total Bayar</label>
		<input type="text" name="total_bayar" id="total_bayar" /><br/>

		<input type="submit" name="simpan" value="Simpan">
		<input type="submit" name="batal" value="Batal">
</body>
</html>

<script type="text/javascript">

	function hitung(){
		var jumlah_beli = document.getElementById("jumlah_beli").value;

		var hitung = jumlah_beli * 125000;
		document.getElementById("total_bayar").value = hitung;
	}
	
</script>