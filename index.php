<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos a PHP</h1>
    <?php
    //UTILIZANDO ECHO PARA IMPRIMIR CADENAS
    echo "<strong>SINTAXIS DE PHP</strong>";

    //No es profesional inyectar HTML puro desde el echo cuando ya estas trabajando en HTML
    echo "<p>Inyectando html puro desde el echo</p>";

    #TIPO DE DATOS
    //ASIGNANDO UNA VARIABLE
    /**
     * COMENTARIO LARGO....
     */
    $titulo = "PHP"; //STRING
    $int = 45;
    // double o float
    echo $titulo;

    //EN PHP CONCATENAMOS CON EL PUNTO.

    //ECHO NO IMPRIME ARREGLOS Y OBJETOS

    $verduras = ["zanahorias", "pera"];
    //OTRA FORMA PARA ESCRIBIR
    print_r($verduras);
    var_dump($verduras);

    $animal = new stdClass();
    $animal->nombre="pancho";
    $animal->especie="Felino";

    $animal2 = new stdClass();
    $animal2->nombre = "Lencho";


    class Persona{
        public $nombre;
        public $apellido;
        public $edad;
        public $telefono;
    }

    $persona = new Persona();
    $persona-> nombre ="Kenia";
    $persona-> apellido ="Paiz";
    $persona-> edad = 26;
    ?>
</body>
</html> 