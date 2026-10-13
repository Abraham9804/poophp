<?php 

require_once 'Producto.php';

$producto1 = new Producto('1234', 'Coca Cola 2 LT', 40.50, 10);
$producto2 = new Producto('1111', 'sabritas 40 gr', 20.00, 5);

//$producto1->descontarExistencia(5);

echo '<br/>';
echo $producto1->getExistencia();
echo '<br/>';
var_dump($producto1->hayExistencia(10));
echo '<br/>';
echo $producto2->getExistencia();
