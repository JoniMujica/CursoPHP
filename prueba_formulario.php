<?php
/*
    if (isset($_GET["nombre"])) //isset verifica que el GET contenga un valor  (si esciste la key o si hay valor = true, sino =false)
    {
        echo $_GET ["nombre"];
    }*/
    if (isset($_POST["nombre"])) //isset verifica que el GET contenga un valor  (si esciste la key o si hay valor = true, sino =false)
    {
        echo $_POST ["nombre"];
    }
    // echo $_GET ["email"];
?>