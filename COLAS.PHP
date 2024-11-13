<?php

$arreglo_productos = ["mouse", "audifonos", "tablet", "celular"];

array_push($arreglo_productos, "tv", "laptop");

//QUITANDO UN ELEMENTO DE LA COLA:

//SE UTILIZA EL ELEMENTO shift
//shift = ELIMINA EL PRIMER ELEMENTO DEL ARRAY: array_shift

array_shift($arreglo_productos);

//CON LA CLASE PHP SERIA:

$cola = new SplQueue();
//agregando elementos a la cola
$cola->enqueue("Next.js");
$cola->enqueue("SpringBoot");
$cola->enqueue(".net");
$cola->dequeue();

print_r($cola);
?>