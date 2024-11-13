
 
<?php
    //EJERCICIO DE LA FUNCION FIBONACCI

    /**function fibonacci ($n)
    {
        $fibonacci = [0,1];
        //Empezara desde el indice numero 3 hasta llegar a ser igual a n
        for($i =2; $i <= $n; $i++ )
        {
            //Aca el primer elemento se retrocedera un espacio y lo sumara con el siguiente elemento que se retrocedera dos espacio lo cual es: Ejemplo [0+1] = 1 <- este valor lo agrega al array fibonacci y lo repite hasta llegar al valor n
            $fibonacci[] = $fibonacci[ $i -1 ] + $fibonacci[$i-2];
        }
        echo $fibonacci[$n];
    }
    fibonacci(15);**/
?>


<?php
    //EJERCICIO DE LA FUNCION DE LOS NUMEROS PRIMOS

/**function esPrimo($n){
    $numeroPrimo = [];
    $numero_no_primo = [];

    for( $i=2; $i <= $n; $i++ ){
        
        if($i==2 || $i%2!=0){
            $numeroPrimo[] = $i;
        }else{
            $numero_no_primo[]=$i;
        }
    }
    print_r ($numeroPrimo);
    print_r ( $numero_no_primo);

}
    esPrimo(10);**/
?>

<?php

    function esPalindromo($texto){
        
        $texto = strtolower($texto);
        $texto = preg_replace('/[^a-z0-9]/', '', $texto);
        $newText = strrev($texto);
        

        if($newText == $texto){
            echo "<br>Es un texto Palindromo";
        }else{
            echo "<br>No es un texto Palindromo";
        }
    }

    esPalindromo("EL SALVADOR");
    esPalindromo("Se verlas al reves");
?>





