<?php
    require_once "Persona.php";//instancia al archivo de Perona || con require_once hace que se introduzca codigo una sola vez
    require_once "Hogar.php";
    $unaPersona = new Persona("Joni","Mujica",21);
    $otraPersona = new Persona("pedro","gomez",37);

    $unHogar = new Hogar("Calle falsa 123");
    //$unaPersona->nombre = "Juan Ignacio"; // con "->" acceso a los atributos/operaciones del objeto 
    // echo $unaPersona->nombre;

    echo $unHogar->getDireccion();
    $unHogar->agregarHabitante($unaPersona);
    $unHogar->agregarHabitante($otraPersona);
    echo "<br>";
    echo $unHogar->obtenerHabitantes(); //ejercicio
    //var_dump($unHogar->)
    echo "<br>";
    echo "<br>";
   /* $unaPersona->setNombre("Jonathan");
    $unaPersona->setApellido("Mujica");
    $unaPersona->setEdad(21);*/
    echo $unaPersona->getNombre(); 
    echo "<br>";
    echo $unaPersona->getApellido();
    echo "<br>";
    echo $unaPersona->getEdad();

    echo "<br>";
    echo $otraPersona->getNombre(); 
    echo "<br>";
    echo $otraPersona->getApellido();
    echo "<br>";
    echo $otraPersona->getEdad();
?> 