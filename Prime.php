<!DOCTYPE html>
<html>
<head>
	<title>PHP入門編</title>
</head>
<link rel="stylesheet" type="text/css" href="index.css">
<body>

<h1>Personal Home Page</h1>
<?php
$yaku = 0;
$sosu = 0;

for ($i=1; $i <=100 ; $i++) {
	for ($j=1; $j <= $i; $j++) { 
		if ($i % $j == 0 ) {
			$yaku = $yaku + 1;
				}
	}
	if ($yaku == 2) {
		print $i . " ";
		$sosu = $sosu + 1;
		}
		$yaku = 0;
}
print "<br>１から１００までの素数は" . $sosu . "個あります。"
?>
</body>
</html>
