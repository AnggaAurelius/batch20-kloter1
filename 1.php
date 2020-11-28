<!DOCTYPE html>
<html>
<body>

<?php

function olahraga($kalori) {
	if ( $kalori < 500){
	$kegiatan = " Renang";
	} elseif ( $kalori > 500 && $kalori < 750){
	$kegiatan = " Badminton";
	} else{
	$kegiatan = " Lari";
}
	
$hitung = $kalori/10;
$waktu = (int)$hitung;

echo "Jumlah kalori: $kalori kalori <br>";
echo "Jenis olahraga:  $kegiatan <br>";
echo "Waktu olahraga: $waktu menit";
}

olahraga(751);

?>

</body>
</html>
