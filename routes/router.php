<?php
if (isset($_GET['url'])) {
	$url = $_GET['url'];

	switch($url) {
		case 'alternatif':
			include 'alternatif.php';
			break;

		case 'tambahalternatif':
			include 'tambahalternatif.php';
			break;

		case 'editalternatif':
			include 'editalternatif.php';
			break;

		case 'kriteria':
			include 'kriteria.php';
			break;

		case 'tambahkriteria':
			include 'tambahkriteria.php';
			break;

		case 'editkriteria':
			include 'editkriteria.php';
			break;

		case 'mtrxkeputusan':
			include 'mtrx_keputusan.php';
			break;

		case 'tambahnilai':
			include 'tambahnilai.php';
			break;

		case 'mtrxternormalisasi':
			include 'mtrx_ternormalisasi.php';
			break;

		case 'nilaipreferensi':
			include 'nilaipreferensi.php';
			break;
	}
} else {
	?>
	<style>
		.bg-welcome {
			background-image: url('assets/img/suw.jpg'); /* pastikan path ini benar */
			background-size: cover;
			background-position: center;
			padding: 50px;
			color: white;
			border-radius: 20px;
			text-align: center;
		}

		.bg-overlay {
			background-color: rgba(0, 0, 0, 0.5); /* efek gelap agar teks lebih terbaca */
			background-size: cover;
			background-position: center;
			border-radius: 20px;
			background-repeat: no-repeat;
			min-height: 80vh; /* full height */
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
		}
	</style>

	<br>
	<div class="bg-welcome">
		<div class="bg-overlay">
			<div class="h3 mb-0 font-weight-bold">
				SISTEM PENDUKUNG KEPUTUSAN JURUSAN TERBAIK <br>
				Metode SAW (Simple Additive Weighting) <br>
				<hr style="border-color: white;">
				Selamat Datang <?php echo $_SESSION['username']; ?> !
			</div>
		</div>
	</div>

<?php  
}
?>
