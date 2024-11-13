<?php

    //BUSQUEDA BINARIA: LA BUSQUEDA EMPIEZA POR EL ELMENTO DE EN MEDIO Y EVALUA SI EL VALOR DE EN MEDIO ES EL VALOR BUSCADO Y PARA ELLO SE HACE UNA CONDICION EN BASE AL ELEMENTO DE EN MEDIO SI EL VALOR QUE SE BUSCA ES MAYOR O MENOR

    function busquedaBinaria($array, $value){
        $inicio = 0;
        $fin = count($array) -1;
        while($array){
            $valor_medio = intval(($inicio + $fin) / 2);

            if( $array[$valor_medio] == $value){
                return $valor_medio;
            }

            if ($array[$valor_medio] >  $value){
                $fin = $valor_medio -1;
            }else{
                $inicio = $valor_medio +1;
            }
        }
        return -1;
    }

    $results = busquedaBinaria([3,5,1,4,7,10], 1);
    if($results != -1){
        echo "El elemento se encontro en la posicion $results <br>";
    }else{
        echo "No se encontro el elemento";
    }

?>