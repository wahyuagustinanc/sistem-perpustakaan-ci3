<?php
$NamaLengkap = "Wahyu Agustina Nur Cahyani";
$NamaPanggilan = "Ayu";
$TempatLahir = "Bandung,8 Agustus 2001";
$Pekerjaan = "Mahasiswa";
$Alamat = "Purworejo, Jawa Tengah";
$Prodi = "S1-Informatika";
$AsalKampus = "Universitas Muhammadiyah Surakarta";
$Agama = "Islam";
$Hobi = "Listening Music";
?>

<table>
	<tr>
		<td><?php echo "Nama Lengkap";?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $NamaLengkap ?></td>
		<td rowspan="15">
			<img src="<?= base_url()?>assets/dist/img/ayu.jpeg" width="300" height="300">
		</td>
	</tr>
	<tr>
		<td><?php echo "Nama Panggilan"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $NamaPanggilan ;?></td>
	</tr>
	<tr>
		<td><?php echo "Tempat,Tanggal Lahir"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $TempatLahir ;?></td>
	</tr>
	<tr>
		<td><?php echo "Pekerjaan"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $Pekerjaan ;?></td>
	</tr>
	<tr>
		<td><?php echo "Alamat"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $Alamat ;?></td>
	</tr>
	<tr>
		<td><?php echo "Program Studi"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $Prodi ;?></td>
	</tr>
	<tr>
		<td><?php echo "Asal Kampus"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $AsalKampus ;?></td>
	</tr>
	<tr>
		<td><?php echo "Agama"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $Agama ;?></td>
	</tr>
	<tr>
		<td><?php echo "Hobi"; ?></td>
		<td><?php echo ":"; ?></td>
		<td><?php echo $Hobi ;?></td>
	</tr>
</table>

<?php echo "<br>"?>
<a href="https://wa.me/62895392928975"><i class="fa fa-whatsapp"></i> <span>Whatsapp</span></a>
<?php echo " | "?>
<a href="https://instagram.com/whyagust"><i class="fa fa-instagram"></i> <span>Instagram</span></a>
