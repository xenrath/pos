<!DOCTYPE html>
<html>
<head>
	<title>QR-Code Product <?= $row->barcode ?></title>
</head>
<body>
	<?php 
		$qrCode = new Endroid\QrCode\QrCode($row->barcode);
		$qrCode->writeFile('uploads/qr-code/item-'.$row->barcode.'.png');
	 ?>
	<img src="uploads/qr-code/item-<?= $row->barcode ?>.png" style="height:150px">
	<br><br>
	<?= $row->barcode ?>
</body>
</html>