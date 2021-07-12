<?php

     $_POST['boton']=="Guardar")
    {$anio=$_POST['anio'];

    $conexion=mysqli_connect("localhost","root","","premios");

    $resultado=mysqli_query($conexion,$sql);

    mysqli_close($conexion);

        $mifichero=fopen("libros.txt","a");
        fputs($mifichero,$titulo);
        fclose($mifichero);

        $resultado=mysqli_query($conexion,$sql);
   
        while($fila=mysqli_fetch_assoc($resultado)){
              echo $fila["anio"];

        }};
 ?>
