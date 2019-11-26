 <div class="content"><br>
	
	<h1 class="content-title"><u>BOOKING KAMAR</u></h1>

	<div class="container-sewa">
		<form class="form" action="<?php echo base_url('Koneksi/aksi_tambah_data')?>" method="post">
			<div class="wadah-input">
				<label for="nama">Nama :</label>
				<input class="inputan" type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
			</div>

			<div class="wadah-input">
				<label for="lapangan">Jenis Kamar :</label>
				<select class="inputan" id="jenis" name="jenis_kamar" required>
					<option value="">Pilih Jenis Kamar</option>
					<option value="1">Single</option>
					<option value="2">Double</option>
					<option value="3">Family</option>
				</select>
			</div>

			<div class="wadah-input">	
				<label for="telpon">No.Kamar :</label>
				<input class="inputan" type="text" name="no_kamar" id="kamar" placeholder="Nomor Kamar" required>
			</div>

			<div class="wadah-input">
				<label for="tanggal">Tanggal Booking :</label>
				<input class="inputan" type="datetime-local" name="tgl_booking" id="tanggal" required>
			</div>

			<div class="wadah-input">
				<div class="masuk">
					<label for="masuk">Tanggal Cek In :</label>
					<input class="inputan-waktu" type="datetime-local" name="tgl_cekin" id="masuk" required>
				</div>
				<div class="keluar">
					<label for="keluar">Tanggal Cek Out :</label>
					<input class="inputan-waktu" type="datetime-local" name="tgl_cekout" id="keluar" required>
				</div>
			</div>

			<div class="wadah-input">	
				<label for="bayar">Bayar Dp :</label>
				<input class="inputan" type="text" name="bayar_dp" id="bayar" placeholder="Rp." required>
			</div>

			<div class="wadah-tombol">
				<input class="tombol" type="submit" name="submit" value="Tambahkan">		
			</div>
		</form>
	</div>
</div>