<?php
    echo "Hola mundo, soy el archimo INDEX";

    $conexionMySQL = mysqli_connect("127.0.0.1:3306","root","","telefonia");
    $resultado = mysqli_query($conexionMySQL,'SELECT * FROM usuario');

    while ($unaFila = mysqli_fetch_assoc($resultado)) 
    {
        print_r($unaFila);
        echo "<br>";
    }
    echo "<br>";
    /*
    print_r(mysqli_fetch_assoc($resultado)); //me devuelve el primer usuario
    echo "<br>";
    print_r(mysqli_fetch_assoc($resultado));*/

    $resultado = mysqli_query($conexionMySQL,"INSERT INTO usuario (usuario,nombre,nivel) VALUES ('JUAN4165','Juan Ignacio',3);");
    if ($resultado) {
        echo "Esta consulta salio bien";
        echo "<br>";
    }else {
        echo "Esta consulta salio mal!";
        echo "<br>";
    }
    
    mysqli_close($conexionMySQL); //siempre cerrar conexion


//ARRAYS    
    $miArray = [];
    $miArray2 = array(); //son equivalentes

    $nombres = ["Juan Ignacio","Lucas","Ezequiel"];
    
    array_push($nombres,"Jeferson"); //agregar valor a un array comun
    print_r($nombres);
    
    echo "<br>";
    
    $lucas = $nombres[1];
    print_r($lucas);

    echo "<br>";


    //Recorrer
    foreach ($nombres as $nombre) {
        # code...
        print_r($nombre);
        echo "<br>";
    }


//ARRAYS Asociativos
    $miArrayAsoc = [
        "nombre" => "Juan Ignacio",
        "apellido" => "Spadoni",
        "edad" => 30
    ];
    $miArrayAsoc["localidad"] = "Carapachay"; //agregar valor a un array asociativa
    print_r($miArrayAsoc);

    echo "<br>";

    //acceder a un valor del array asociativo
    print_r($miArrayAsoc["edad"]);

    echo "<br>";


    //recorrer
    foreach ($miArrayAsoc as $clave => $valor) {
        echo "Clave: ".$clave." Valor:".$valor;
        echo "<br>";
    }
    
?> 