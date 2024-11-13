<?php

    function insertionsort($array){
        for ($i=0; $i<count($array); $i++){

            $puntoInterseccion = $array[$i];
            //j sera la variable donde retrocedamos una posicion
            $j =$i -1;

            while($j > 0 && $puntoInterseccion < $array[$j]){
                //intercambios
                $array[$j +1] = $array[$j];
                $array[$j] = $puntoInterseccion;

                $j = $j - 1;
            }
        }
    }

    insertionsort([23,12,45,4,33,10]);

?>