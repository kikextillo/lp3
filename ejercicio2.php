<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio2</title>
</head>
<body>
     <table width="400" border="2" >
         <tr>
            
             <td> Ejercicio2</td>
         </tr>
         <tr>
             
             <td>
                <center>
                     <?php
                          $p1=$_GET["dia"];
                          $p2=$_GET["mes"];
                          $p3=$_GET["anho"];
                          $a=0;
                          if ($p2==2) {
                              if($p1>28){
                                    $a=1;
                          }
                        }
                         
                        if ($p2==4) {
                              if($p1>30){
                                    $a=1;
                                }
                         }
                        
                            if ($p2==6) {
                                if($p1>30){
                                      $a=1;
                                  }
                           }
                           if ($p2==9) {
                            if($p1>30){
                                  $a=1;
                              }
                       }
                                                    
                              if ($p2==11) {
                                if($p1>30){
                                      $a=1;
                                  }
                           }
                           if ($a==0) {
                               echo"La fecha ".$p1."-".$p2."-".$p3."  es valida";
                           } else {
                                  echo"La fecha ".$p1."-".$p2."-".$p3." es invalida";
                              }
                        ?>
                 </center>
             </td>
        </tr>
     </table>  
     <a href="index.html"><h3><b>Volver a la pagina principal</b></h3></a> 
</body>
</html>