<?php 

require_once 'Producto.php';

$producto1 = new Producto('1234', 'Coca Cola 2 LT', 40.00);
$producto2 = new Producto('1111', 'pepsi', 50);
$producto3 = new Producto('1112', 'pepsi 2L', 50.00, -20);

echo $producto1->getExistencia();
echo '<br/>';

//$producto1->cambiarSku('2222');
echo '<br/>';
echo $producto1->precioConIva(0.08);
echo '<br/>';
echo $producto1->precioConIva(0.16);
