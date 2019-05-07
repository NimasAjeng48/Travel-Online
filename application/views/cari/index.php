<h2><center>
	<?php echo $title; ?>
</center></h2>

<table border="1" cellpadding="4" align="center">
	<tr>
		<td><strong>ID Penumpang</strong></td>
		<td><strong>Nama</strong></td>
		<td><strong>Alamat</strong></td>
		<td><strong>No.Hp</strong></td>
		<td><strong>Asal</strong></td>
		<td><strong>Tujuan</strong></td>
		<td><strong>Tanggal </strong></td>
	</tr>
<?php foreach ($cari as $cari_item): ?>
	<tr>
		<td>
			<?php echo $cari_item['id_penumpang']; ?>
		</td>
		<td>
			<?php echo $cari_item['nama']; ?>
		</td>
		<td>
			<?php echo $cari_item['alamat']; ?>
		</td>
		<td>
			<?php echo $cari_item['noHp']; ?>
		</td>
		<td>
			<?php echo $cari_item['asal']; ?>
		</td>
		<td>
			<?php echo $cari_item['tujuan']; ?>
		</td>
		<td>
			<?php echo $cari_item['tanggal']; ?>
		</td>

		<td>
			<a href="<?php echo site_url('cari/'.$cari_item['id_penumpang']); ?>">View</a>
		</td>
	</tr>
<?php endforeach; ?>
</table>