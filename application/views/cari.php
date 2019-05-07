<div class="container">
	<h2 class="text-center"> Data Travel</h2>
	<hr width="25%"><br>
	<table class="table">
		<?php echo $msg ?>
		<tr>
			<th>Id Penumpang</th>
			<th>nama</th>
			<th>alamat</th>
			<th>No Hp</th>
			<th>Asal</th>
			<th>Tujuan</th>
			<th>Jam Keberangkatan</th>
		</tr>
		<?php foreach ($cari as $value) {?>	
		<tr>
			<td><?php echo $value['id_penumpang']?></td>
			<td><?php echo $value['nama']?></td>
			<td><?php echo $value['alamat']?></td>
			<td><?php echo $value['noHp']?></td>
			<td><?php echo $value['asal']?></td>
			<td><?php echo $value['tujuan']?></td>
			<td><?php echo $value['jam']?></td>
			<td>
			</td>
		</tr>

		<?php } ?>
	</table>
	
</div>