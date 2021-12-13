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
    
    mysqli_close($conexionMySQL); //siempre cerrar conexion.
?>