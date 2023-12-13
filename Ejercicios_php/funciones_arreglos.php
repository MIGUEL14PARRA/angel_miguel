
<html>
<head> <title> menu de arreglos </title> <head>
<body>
    <form method="POST">
        <label>selecciones una opcion</label>
        <input type="radio" value=1 name="opcion" required>vectores
        <input type="radio" value=2 name="opcion" required>matrices
        <input type="submit" value="enviar">
    </form>
</body>
</html>


<?php
    if ($_POST){
        $opcion=$_POST[´opcion´];
           switch($opcion){
               case 1:
                  echo "<strong>vectores</strong><br><br>";
                  $vector1[0]=1; $vector1[1]=2; $vector1[2]="3"; $vector1[3]='a';
$vector1[4]='hola' ;
                     foreach ($vector1 as $valor )
                          echo $valor."  ";

                     echo "<br><br><em>Otra forma<em> <br>";
                     $vector2['COLOMBIA']='BOGOTA';  $vector2['VENEZUELA']='CARACAS';
                     $vector2['CHILE']='SANTIAGO';  $vector2['URUGUAY']='MONTEVIDEO';
                     $vector2['PERU']='LIMA'; 
                     foreach ($vector2 as $valor  )
                         echo $valor."  ";

                     echo "<br><br><em>Otra forma<em> <br>";
                     $vector3=array(1,2,"3",'a','hola');
                     foreach($vector3 as $valor )
                         echo $valor."  ";

                     echo "<br><br><em>Otra forma<em> <br>";
                     $vector4[]=1; $vector4[]=2; $vector4[]="3"; $vector4[]='a';
$vector4[]='hola';
                     foreach ($vector4 as $valor )
                         echo $valor."  ";
                  break
             
                   case 2:
                      echo "<strong>matrices</strong><br><br>";
                      $matriz1[0][0]=1;  $matriz1[0][1]=2;
                      $matriz1[1][0]="3";  $matriz1[1][1]='a';
                      foreach ($matriz1 as $filas){
                          foreach ($filas as $celdas)
                             echo $celdas."  ";
                          echo "<br>";
                      }
                      echo "<br><br><em>Otra forma<em> <br>";
                      $matriz2=array(array(1,2),array('a','3'));
                      $i=0;

                      for ($fil=0;$fil<2;$fil++){
                           for($col=0;$col<2;$col++)
                              echo $matriz2[$fil][$col];
                           echo "<br>";
        
                       }
                    break;
                    default:
                        echo "error en el programa";
                    break;
            } 
      }
?>