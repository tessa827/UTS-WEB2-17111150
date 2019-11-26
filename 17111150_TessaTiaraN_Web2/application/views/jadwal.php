<div class="content"><br>
	<h1 class="content-title"><u>JADWAL BOOKING</u></h1><br>
	<table id="customers">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Jenis Kamar</th>
			<th>No. Kamar</th>
			<th>Tanggal Booking</th>
			<th>Tanggal Cek In</th>
			<th>Tanggal Cek Out</th>
			<th>Bayar Dp</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php
		$no = 1;
		foreach ($tampil as $tpl) {
			echo "<tr>";
			echo "<td>".$no."</td>";
			echo "<td>".$tpl->nama."</td>";
			echo "<td>".$tpl->jenis_kamar."</td>";
			echo "<td>".$tpl->no_kamar."</td>";
			echo "<td>".$tpl->tgl_booking."</td>";
			echo "<td>".$tpl->tgl_cekin."</td>";
			echo "<td>".$tpl->tgl_cekout."</td>";
			echo "<td>".$tpl->bayar_dp."</td>";
			?>
			<td class="btn_edit"><a class="title_footer" href="<?php echo base_url('Koneksi/edit/'.$tpl->id) ?>">Edit</a></td>
			<td class="btn_hapus"><a class="title_footer" href="<?php echo base_url('Koneksi/hapus/'.$tpl->id) ?>">Hapus</a></td>
			<?php
			echo "</tr>";
			$no++;
		}
		?>
	</table><br><br>
</div>