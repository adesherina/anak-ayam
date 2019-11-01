<!DOCTYPE html>
<html>
<head>
	<title>anak ayam</title>
	<style type="text/css">
		.ganjil{
			color: orange;
		}
		.genap{
			color: blue;
		}
	</style>
</head>
<body>

<?php
$anak_aym = 8;
echo "tek kotek kotek anak ayam ada $anak_aym <br>";
for ($i=$anak_aym-1; $i >=0 ; $i--) { 
	if($i%2 == 1){
		echo "<p class='ganjil'>mati 1 anak ayam turun $i</p><br>";
	}elseif($i==0){
		echo "Mati Satu habis semua T_T hiks";
	}else{
		echo "<p class='genap'>mati 1 anak ayam turun $i</p><br>";
}
}
?>
</body>
</html>