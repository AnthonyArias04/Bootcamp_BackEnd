<?php

    //PILAS SIGUEN EL PRICIPIO ULTIMO DE ENTRAR, PRIMERO EN SALIR.

    $arreglo_productos = ["mouse", "audifonos", "tablet", "celular"];

    //AGREGANDO UN ELEMENTO AL FINAL DE EL ARREGLO.

    array_push($arreglo_productos, "tv", "laptop");

    //QUITANDO UN ELEMENTO DE EL ARREGLO

    array_pop($arreglo_productos); //EL ELEMENTO POP QUITA EL ULTIMO ELEMENTO DE EL ARREGLO



    //CLASES DE PHP:

    $pila = new SplStack(); //CREANDO UN OBJETO DE TIPO PILA
    $pila->push("Angular");
    $pila->push("Laravel");
    $pila->push("FastApi");

    //ELIMINANDO UN DATO DE LA COLA:
    $pila->pop(); //ELIMINA EL ULTIMO ELEMENTO DE LA COLA: "FASTAPI"

    print_r($pila);
?>

