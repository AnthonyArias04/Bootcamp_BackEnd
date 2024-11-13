<?php

    function bubblesort($array){
        //code..
        
        //EL BUBBLESORT UTILIZA 2 BUCLES FOR; EL PRIMERO SE ENCARGA DE IR EVALUANDO CADA ELEMENTO DE EL ARREGLO; EL SEGUNDO FOR EVALUA TODOS LOS ELEMENTOS Y VA INTERCAMBIANDO.
        //ciclo que verifica si tengo que entrar al segundo bucle
        for($i = 0; $i < count($array); $i++){
            //segundo ciclo itera los elemntos y hace intercambios
            for($j = 0; $j<count($array) - 1; $j++){
                if ($array[$j] > $array [$j + 1 ]){
                    //HARA INTERCAMBIO

                    //variable que captura la posicion j+1
                    $temporal = $array[$j + 1];
                    $array[$j + 1 ] = $array [$j];
                    $array[$j] = $temporal;
                }
            }
        }
        print_r($array);
    }    

    bubblesort ([23,12,45,4,33,10]);
?>