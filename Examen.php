<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
$Telefonos = array('Iphone' => 25000,'Samsung' => 20000,'Huawei' => 15000,'Oppo' => 10000,'Vivo' => 10000);


$indexado = array();
foreach ($Telefonos as $marca => $precio) {
    $indexado[] = array('Marca' => $marca, 'Precio' => $precio);
}





$Carros = array();
foreach ($indexado as $item) {
    $Telefonos[$item['Marca']] = $item['Precio'];
}


print_r($Telefonos);
asort($Telefonos);
print_r($Telefonos);
?>


</body>
</html>