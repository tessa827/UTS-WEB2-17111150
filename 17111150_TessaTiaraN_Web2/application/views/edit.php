 <div class="content"><br>

 	<h1 class="content-title"><u>BOOKING KAMAR</u></h1>

 	<div class="container-sewa">
 		<?php foreach ($booking as $tpl) { ?>
 			<form class="form" action="<?php echo base_url('Koneksi/update')?>" method="post">
 				<div class="wadah-input">
 					<label for="nama">Nama :</label>
 					<input type="hidden" name="id" value="<?php echo $tpl->id ?>">
 					<input class="inputan" type="text" name="nama" id="nama" value="<?php echo $tpl->nama ?>" placeholder="Nama Lengkap" required>
 				</div>

 				<div class="wadah-input">
 					<label for="lapangan">Jenis Kamar :</label>
 					<select class="inputan" id="jenis" name="jenis_kamar" value="<?php echo $tpl->jenis_kamar ?>"required>
 						<option value="">Pilih Jenis Kamar</option>
 						<option value="1">Single</option>
 						<option value="2">Double</option>
 						<option value="3">Family</option>
 					</select>
 				</div>

 				<div class="wadah-input">	
 					<label for="telpon">No.Kamar :</label>
 					<input class="inputan" type="text" name="no_kamar" id="kamar" value="<?php echo $tpl->no_kamar ?>" placeholder="Nomor Kamar" required>
 				</div>

 				<div class="wadah-input">
 					<label for="tanggal">Tanggal Booking :</label>
 					<input class="inputan" type="datetime-local" name="tgl_booking" id="tanggal" value="<?php echo $tpl->tgl_booking ?>" required>
 				</div>

 				<div class="wadah-input">
 					<div class="masuk">
 						<label for="masuk">Tanggal Cek In :</label>
 						<input class="inputan-waktu" type="datetime-local" name="tgl_cekin" id="masuk" value="<?php echo $tpl->tgl_cekin ?>" required>
 					</div>
 					<div class="keluar">
 						<label for="keluar">Tanggal Cek Out :</label>
 						<input class="inputan-waktu" type="datetime-local" name="tgl_cekout" id="keluar" value="<?php echo $tpl->tgl_cekout ?>" required>
 					</div>
 				</div>

 				<div class="wadah-input">	
 					<label for="bayar">Bayar Dp :</label>
 					<input class="inputan" type="text" name="bayar_dp" id="bayar" value="<?php echo $tpl->bayar_dp ?>" placeholder="Rp." required>
 				</div>

 				<div class="wadah-tombol">
 					<input class="tombol_edit" type="submit" name="submit" value="Edit">		
 				</div>
 			</form>
 		</div>
 		<?php } ?>
 	</div>