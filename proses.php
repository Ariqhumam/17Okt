<html>
<head>
<style type="text/css">
	font.a{color: #00ced1}
	font.b{color: #a9a9a9}
</style>
</head>
<body>
<?php
$riq1=$_POST["isi1"];
$riq2=$_POST["isi2"];
$riq3=$_POST["isi3"];
$riq4=$_POST["isi4"];
$has1=$_POST["jk1"];
$has2=$_POST["jk2"];
$has3=$_POST["jk3"];
$has4=$_POST["jk4"];

if ($has1=="pria") {
	$hh1="<font class=b>$has1</font>";
}
else {
	$hh1="<font class=a>$has1</font>";
};
echo $riq1," ",$hh1,"<br>";
if ($has2=="pria") {
	$hh2="<font class=b>$has2</font>";
}
else {
	$hh2="<font class=a>$has2</font>";
};
echo $riq2," ",$hh2,"<br>";
if ($has3=="pria") {
	$rr3="<font class=b>$has3</font>";
}
else {
	$hh3="<font class=a>$has3</font>";
};
echo $riq3," ",$hh3,"<br>";
if ($has4=="pria") {
	$hh4="<class=b>$has4</font>";
}
else {
	$hh4="<font class=a>$has4</font>";
};
echo $riq4," ",$hh4,"<br>";
?>
</body>
</html>