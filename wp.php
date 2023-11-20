<?php
include "header.php";
include "includes/config.php";
?>


<br>
<div class="container">
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link text-dark" href="rangking.php">Metode SAW</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active text-dark" data-toggle="tab" href="wp.php">Metode WP</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-dark" href="topsis.php">Metode TOPSIS</a>
		</li>
		<li class="nav-item">
			<!-- <a class="nav-link text-dark" href="multimoora.php">Metode MULTIMOORA</a> -->
		</li>
	</ul>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel Nilai S</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-kriteria.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>
		<?php
		$query = mysqli_query($koneksi, "SELECT * FROM wp_nilaiS");
		?>

		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Alternatif</th>
					<th>Nama Alternatif</th>
					<th>Nilai S</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($row = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id_alternatif'] ?></td>
						<td><?php echo $row['nm_alternatif'] ?></td>
						<td><?php echo $row['nilaiS'] ?></td>
						<td class="text-center">
							<a href="edit-kriteria.php?id=<?php echo $row['id_alternatif'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
							<a href="hapus-kriteria.php?id=<?php echo $row['id_alternatif'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>

			<tfoot>
				<tr>
				</tr>
			</tfoot>
		</table>
	</div>

	<!-- Tabel Nilai V -->
	<?php
	include "includes/config.php";
	$query = mysqli_query($koneksi, "SELECT * FROM wp_nilaiV");
	?>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel Nilai V</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-kriteria.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>

		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Alternatif</th>
					<th>Nama Alternatif</th>
					<th>Nilai V</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($row = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id_alternatif'] ?></td>
						<td><?php echo $row['nm_alternatif'] ?></td>
						<td><?php echo $row['nilaiV'] ?></td>
						<td class="text-center">
							<a href="edit-kriteria.php?id=<?php echo $row['id_alternatif'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
							<a href="hapus-kriteria.php?id=<?php echo $row['id_alternatif'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>

			<tfoot>
				<tr>
				</tr>
			</tfoot>
		</table>
	</div>
	<!-- Jumpbobot -->
	<?php
	include "includes/config.php";
	$query = mysqli_query($koneksi, "SELECT * FROM wp_jumpbobot");
	?>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel Jumlah Bobot</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-kriteria.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>

		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Jumlah</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($row = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['jumlah'] ?></td>
						<td class="text-center">
							<a href="edit-topsis.php?id=<?php echo $row['jumlah'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
							<a href="hapus-topsis.php?id=<?php echo $row['jumlah'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>

			<tfoot>
				<tr>
				</tr>
			</tfoot>
		</table>
	</div>
	<!-- sums -->
	<?php
	include "includes/config.php";
	$query = mysqli_query($koneksi, "SELECT * FROM wp_sums");
	?>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel Sums</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-kriteria.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>

		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Jum</th>
					<th>Action</th> <!-- Added a new column header for actions -->
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($row = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['jum'] ?></td>
						<td class="text-center">
							<a href="wp.php?id=<?php echo $row['jum'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
							<a href="wp.php?id=<?php echo $row['jum'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>

	<!-- Tabel wp_normalisasiterbobot -->
	<?php
	include "includes/config.php";
	$query = mysqli_query($koneksi, "SELECT * FROM wp_normalisasiterbobot");
	?>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel WP Normalisasi Terbobot</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-kriteria.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>

		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Kriteria</th>
					<th>Value Bobot</th>
					<th>Jumlah</th>
					<th>Normalisasi WP</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($row = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id_kriteria'] ?></td>
						<td><?php echo $row['value'] ?></td>
						<td><?php echo $row['jumlah'] ?></td>
						<td><?php echo $row['normalisasi_w'] ?></td>
						<td class="text-center">
							<a href="edit-kriteria.php?id=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
							<a href="hapus-kriteria.php?id=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>

			<tfoot>
				<tr>
				</tr>
			</tfoot>
		</table>
	</div>

	<!-- Tabel wp_pangkat -->
	<?php
	include "includes/config.php";
	$query = mysqli_query($koneksi, "SELECT * FROM wp_pangkat");
	?>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel WP Pangkat</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-kriteria.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>

		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Alternatif</th>
					<th>Nama Kriteria</th>
					<th>Value Bobot</th>
					<th>Nilai</th>
					<th>Keterangan</th>
					<th>Normalisasi</th>
					<th>Pangkat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($row = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['nm_alternatif'] ?></td>
						<td><?php echo $row['nm_kriteria'] ?></td>
						<td><?php echo $row['value'] ?></td>
						<td><?php echo $row['nilai'] ?></td>
						<td><?php echo $row['keterangan'] ?></td>
						<td><?php echo $row['normalisasi_w'] ?></td>
						<td><?php echo $row['pangkat'] ?></td>
						<td class="text-center">
							<a href="edit-kriteria.php?id=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning text-white"><i class="fas fa-pencil-alt"></i></a>
							<a href="hapus-kriteria.php?id=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
						</td>
					</tr>
				<?php
				}
				?>
			</tbody>

			<tfoot>
				<tr>
				</tr>
			</tfoot>
		</table>
	</div>

	<?php
	include "footer.php";
	?>