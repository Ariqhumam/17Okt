<html>
<head>
<style>
b {color: red;}
</style>
</head>

<body>
<?php
$has1 =$_POST["isi"];
$has2 =$_POST["isi2"];
$has3 =$_POST["isi3"];
$hds;
	if ($has1>$has2) {
		if ($has1>$has3) {
			echo "$has1", " ";$hs=$has1;
				if ($has2>$has3) {
					echo "$has2 ","$has3";
				} else {
					echo "$has3 ","$has2";
				}
		}else{
			echo "$has3"," ";$hs=$has3;
				if ($has2>$has1) {
					echo "$has2 ","$has1";
				} else {
					echo "$has1 ","$has2";
				}
	}
	}elseif ($has2>$has3) {
		echo "$has2"," ";$hs=$has2;
				if ($has3>$has1) {
					echo "$has3 ","$has1";
				} else {
					echo "$has1 ","$has3";
				}
	}else{
		echo "$has3"," ";$hs=$has3;
				if ($has2>$has1) {
					echo "$has2 ","$has1";
				} else {
					echo "$has1 ","$has2";
				}
	}
echo "<br>Angka terbesar adalah : $hs";
?>
</body>
</html>