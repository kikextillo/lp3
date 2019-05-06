<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio3</title>
</head>
<body>
    <?php
    $n=$_GET["n"];
    $c=1;
    $n=$n+1;
    echo "<table border='2'";
        while ($c <= 10) {
            if ($n%3==0) {
               
                echo" <tr>
                <td>$c</td>
                <td> <a href='tabla.php?num=$n'>$n</a></td>
                 </tr>";
                $n=$n+1;
                $c=$c+1;
                

            } else {
                if ($n%5==0) {
               
                    echo" <tr>
                    <td>$c</td>
                    <td> <a href='tabla.php?num=$n'>$n</a></td>
                    </tr>";
                    $n=$n+1;
                    $c=$c+1;
                    }else {
                        $n=$n+1;
                    }
                
            }
            
        }
         
        echo"</table>";
        
      
    ?>
    <a href="index.html"><h3><b>Volver a la pagina principal</b></h3></a>
    
</body>
</html>