<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<h1>hola</h1>"; // interpreta el HTML
    ?>

    <!--
    <form method="get" action="prueba_formulario.php">
        <label for="">Nombre:</label><input type="text" name="nombre" id="" autocomplete="off"> <br>
        <label for="">Apellido:</label><input type="text" name="apellido" id="" autocomplete="off"> <br>
        <label for="">Email</label><input type="text" name="email" id="" autocomplete="off"><br> autocomplete no deja poner segerencias o historial antiguos
        <input type="submit" value="Enviar">
    </form>
    -->
    <form method="post" action="prueba_formulario.php">
        <label for="">Nombre:</label><input type="text" name="nombre" id="" autocomplete="off"> <br>
        <label for="">Apellido:</label><input type="text" name="apellido" id="" autocomplete="off"> <br>
        <label for="">Email</label><input type="text" name="email" id="" autocomplete="off"><br> autocomplete no deja poner segerencias o historial antiguos
        <input type="submit" value="Enviar">
    </form>

    <label for="">Nombre2:</label><input type="text" name="nombre2" id="" autocomplete="off"> <br>

</body>
</html>