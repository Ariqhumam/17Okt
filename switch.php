<html>
<head>
<style>
</style>
</head>

<body>
<?php
$bulan =$_POST["isi"];
$tahun =$_POST["isi2"];
$hari;
switch ($bulan) {
	case '1':
	case '3':
	case '5':
	case '7':
	case '8':
	case '10':
	case '12':
		$hari=31;
		break;
	case '4':
	case '6':
	case '9':
	case '11':
		$hari=30;
		break;
	case '2':
		if(($tahun%4)==0){
			$hari=29;
		}else{
			$hari=28;
		}
		break;
}
echo "Jumlah hari pada bulan $bulan pada tahun $tahun adalah sebanyak $hari hari!!";
?>
</body>
</html>