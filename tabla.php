<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla del ejercicio3</title>
</head>
<body>
    <p><h3>Tabla de multiplicar</h3></p>
  
    <?php
        $n=$_GET["num"];
        $a=0;
        echo "<table border='2'";
        for ($i=1; $i <=10 ; $i++) { 
            $a=$n*$i;
         
           echo" <tr>
                         <td>$n</td>
                         <td>*</td>
                         <td>$i</td>
                         <td>=</td>
                         <td>$a</td>
                       
                 </tr>";
        }
        echo"</table>";
    
    ?>
     <a href="index.html"><h3><b>Volver a la pagina principal</b></h3></a>
</body>
</html>