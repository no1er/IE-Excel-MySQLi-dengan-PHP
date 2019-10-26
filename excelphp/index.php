<!DOCTYPE html>
<html>
<head>
	<title>Data Aktivitas Mahasiswa</title>
</head>
<body>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
 
		p{
			color: green;
		}
	</style>
	<h2>Data Aktivitas Mahasiswa</h2>
 
	<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>
 <table>
	<tr>
		<td><a href="upload.php">IMPORT DATA</a> </td>
		<td>  |  </td>
		<td><a href="export_excel.php">EXPORT DATA</a></td>
	</tr>
</table>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>ALamat</th>
			<th>Telepon</th>
			<th>Action</th>
			
		</tr>
		<?php 
		include 'koneksi.php';
		$no=1;
		$data = mysqli_query($koneksi,"select * from data_pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['alamat']; ?></th>
				<th><?php echo $d['telepon']; ?></th>
				<th><a href="edit.php?id=<?php echo $d['id']; ?>"onClick="'Hapus Inputan?')"/><button type="button">Edit</button></a> | 
				<a href="hapus.php?id=<?php echo $d['id']; ?> "onClick="return confirm('Hapus Inputan?')"/><button type="button" class="btn btn-danger btn-sm">Hapus</button></a></th>
			</tr>
			<?php 
		}
		?>
 
	</table>
</body>
</html>