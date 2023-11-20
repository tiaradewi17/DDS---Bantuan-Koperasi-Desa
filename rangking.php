<?php
include "header.php";
include "includes/config.php";
?>


<br>
<div class="container">
	<br>
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active text-dark" data-toggle="tab" href="rangking.php">Metode SAW</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-dark" href="wp.php">Metode WP</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-dark" href="topsis.php">Metode TOPSIS</a>
		</li>
		<li class="nav-item">
			<!-- <a class="nav-link text-dark" href="multimoora.php">Metode MULTIMOORA</a> -->
		</li>
	</ul>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel Ranking Normalisasi</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-rangking.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>


		<?php


		$query = mysqli_query($koneksi, "SELECT * FROM vnormalisasi");
		?>
		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Matrix</th>
					<th>ID Alternatif</th>
					<th>Nama Alternatif</th>
					<th>ID Kriteria</th>
					<th>Nama Kriteria</th>
					<th>ID Bobot</th>
					<th>Value</th>
					<th>Nilai</th>
					<th>Keterangan</th>
					<th>Normalisasi</th>
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
						<td><?php echo $row['id_matrix'] ?></td>
						<td><?php echo $row['id_alternatif'] ?></td>
						<td><?php echo $row['nm_alternatif'] ?></td>
						<td><?php echo $row['id_kriteria'] ?></td>
						<td><?php echo $row['nm_kriteria'] ?></td>
						<td><?php echo $row['id_bobot'] ?></td>
						<td><?php echo $row['value'] ?></td>
						<td><?php echo $row['nilai'] ?></td>
						<td><?php echo $row['keterangan'] ?></td>
						<td><?php echo $row['normalisasi'] ?></td>
						<td class="text-center">
							<a href="edit-rangking.php?id=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning text-white">
								<i class="fas fa-pencil-alt"></i>
							</a>
							<a href="hapus-rangking.php?id=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
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
	include "includes/config.php";
	?>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel Ranking Matrix Keputusan</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-rangking.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>

		<?php
		$query = mysqli_query($koneksi, "SELECT * FROM vmatrixkeputusan");
		?>
		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Alternatif</th>
					<th>Nama Alternatif</th>
					<th>ID Kriteria</th>
					<th>Nama Kriteria</th>
					<th>ID Bobot</th>
					<th>Value</th>
					<th>Nilai</th>
					<th>Keterangan</th>
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
						<td><?php echo $row['id_kriteria'] ?></td>
						<td><?php echo $row['nm_kriteria'] ?></td>
						<td><?php echo $row['id_bobot'] ?></td>
						<td><?php echo $row['value'] ?></td>
						<td><?php echo $row['nilai'] ?></td>
						<td><?php echo $row['keterangan'] ?></td>
						<td class="text-center">
							<a href="edit-rangking.php?id=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning text-white">
								<i class="fas fa-pencil-alt"></i>
							</a>
							<a href="hapus-rangking.php?id=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
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
	include "includes/config.php";
	?>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel Pra Ranking</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-rangking.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>

		<?php
		$query = mysqli_query($koneksi, "SELECT * FROM vprarangking");
		?>
		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Matrix</th>
					<th>ID Alternatif</th>
					<th>Nama Alternatif</th>
					<th>ID Kriteria</th>
					<th>Nama Kriteria</th>
					<th>ID Bobot</th>
					<th>Value</th>
					<th>Nilai</th>
					<th>Keterangan</th>
					<th>Normalisasi</th>
					<th>Pra Ranking</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				while ($row = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id_matrix'] ?></td>
						<td><?php echo $row['id_alternatif'] ?></td>
						<td><?php echo $row['nm_alternatif'] ?></td>
						<td><?php echo $row['id_kriteria'] ?></td>
						<td><?php echo $row['nm_kriteria'] ?></td>
						<td><?php echo $row['id_bobot'] ?></td>
						<td><?php echo $row['value'] ?></td>
						<td><?php echo $row['nilai'] ?></td>
						<td><?php echo $row['keterangan'] ?></td>
						<td><?php echo $row['normalisasi'] ?></td>
						<td><?php echo $row['prarangking'] ?></td>
						<td class="text-center">
							<a href="edit-rangking.php?id=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning text-white">
								<i class="fas fa-pencil-alt"></i>
							</a>
							<a href="hapus-rangking.php?id=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
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
	include "includes/config.php";
	?>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left">
				<h4>Tabel Ranking</h4>
			</div>
			<div class="col-md-6 text-right">
				<button onclick="location.href='tambah-rangking.php'" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
		<br>

		<?php
		$query = mysqli_query($koneksi, "SELECT * FROM vrangking");
		?>
		<table id="tabeldata" width="100%" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>ID Alternatif</th>
					<th>Nama Alternatif</th>
					<th>Ranking</th>
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
						<td><?php echo $row['rangking'] ?></td>
						<td class="text-center">
							<a href="edit-rangking.php?id=<?php echo $row['id_alternatif'] ?>" class="btn btn-warning text-white">
								<i class="fas fa-pencil-alt"></i>
							</a>
							<a href="hapus-rangking.php?id=<?php echo $row['id_alternatif'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger">
								<span class="fas fa-trash-alt"></span>
							</a>

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