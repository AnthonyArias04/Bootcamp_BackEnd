<?php

    function quicksort($array){

        //validar que tenga por lo menos un elemento de el arreglo

        if(count($array) > 0){
            $pivote = $array[0];
            $array_left = [];
            $array_right = [];

            for ( $i = 1; $i < count($array); $i++){
                if($array[$i] < $pivote){
                    array_push($array_left, $array[$i]);
                }else{
                    array_push($array_right, $array[$i]);
                }
            }

            //funcion para concatenar o fusionar arreglos y utilizamos la recursion para hacer el mismo proceso.
            return array_merge(quicksort($array_left), array($pivote),  quicksort($array_right));

        }else{
            return $array;
        }
    }

    
    print_r(quicksort([23,12,45,4,33,10]));
?>