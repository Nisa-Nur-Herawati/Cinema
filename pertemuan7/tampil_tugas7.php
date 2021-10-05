<html>
	<head>
		<title>Latihan If Else</title>
	</head>
	<body>
		<?php
		error_reporting(0);
		$na=$_POST['nilai1'];
		$nb=$_POST['nilai2'];
		$r=$_POST['rumus'];
		?>

		<h2>HASIL HITUNG RUMUS</h2>
		Nilai a adalah = <?php echo "$na"; ?> <br>
		Nilai b adalah = <?php echo "$na"; ?> <br>

		<?php
		if($na=="0" && $nb=="0")
		{
			echo "Tidak ada hasil perhitungan";
		}
		else
		{
			if($r=="s")
			{
				$hasil=(0.5*($na*$nb));
				echo "Rumus yang dipilih adalah = Segitiga<br>
				Hasil perhitungan rumus = $hasil";
			}
			else
			{
				$hasil=($na*$nb);
				echo "Rumus yang dipilih adalah = Persegi Panjang<br>
				Hasil perhitungan rumus = $hasil";
			}	
		}
		?>
</body>
</html>