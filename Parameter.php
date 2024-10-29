<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter</title>
</head>
<body>
<?php
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

$panjang = 10;
$lebar = 5;
$luas = hitungLuasPersegiPanjang($panjang, $lebar);

echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah $luas.";
?>
</body>
</html>