<?php
  $nombre =$_POST['nombre'];
  $password=$_POST['password'];
  $genero=$_POST['genero'];
  $email=$_POST['email'];
  $asignatura=$_POST['asignatura'];
  $telefono=$_POST['telefono'];

&&!isempty($genero)&&!isempty($email)&&!isempty($asignatura)&&!isempty($telefono)

  if (!isempty($nombre)&&!isempty($password)){$conexion=mysqli_connect("localhost","root","","alumnos");

      $sql="INSERT INTO alumno (nombre,password,email,genero,telefono,asignatura) values(
     '{$_POST['nombre']}',
     '{$_POST['password']}',
     '{$_POST['email']}',
      '{$_POST['genero']}',
       {$_POST['telefono']},
      '{$_POST['asignatura']}'
    );";

      $resultado=mysqli_query($conexion,$sql);
                mysqli_close($conexion);
        

  }

?>
