<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio4</title>
</head>
<body>
    <?php
      $n=0;
    echo"<h3> <b> Sus programas seleccionados son </b> </h3>";
    if(isset($_GET["sistema1"])){
        echo"<li>Windows</li>";
        $n=1;
    }
    if(isset($_GET["sistema2"])){
        echo"<li>Linux</li>";
        $n=1;
    }
    if(isset($_GET["sistema3"])){
        echo"<li>Corel Draw</li>";
        $n=1;
    }
    if(isset($_GET["sistema4"])){
        echo"<li>Open Office</li>";
        $n=1;
    }
    if(isset($_GET["sistema5"])){
        echo"<li>Microsoft Office</li>";
        $n=1;
    }
    ?>
    <?php
        if ($n==0) {
           echo"<h3><b>No se ha seleccionado ningun programa</b></h3>";
        }
    ?>

 <?php

?>

        <?php
        echo"<hr>";
             $usuario=$_GET["usu"];
             $marca=$_GET["marca"];
              $placa=$_GET["placa"];
              $disco=$_GET["disco"];
              $ram=$_GET["ram"];
              echo"Su usuario es $usuario";
             echo" <br>";
             echo"Su marca es es $marca";
             echo" <br>";
             echo"Su placa es $placa";
             echo" <br>";
             echo"Su disco es ". $disco." de tamaño";
             echo" <br>";
             echo"Su ram es  ".$ram." GB";
             echo" <br>";
        ?>
         <a href="index.html"><h3><b>Volver a la pagina principal</b></h3></a>
</body>
</html>