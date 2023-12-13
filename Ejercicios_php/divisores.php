<?php
$Numeros=8.0;
echo "divisores del numero ".$Numeros.": ";
for ($i=1;$i<=$Numero;$i++){
    $residuo=$Numeros % $i;
    if($residuo==0)  
    {
     echo "[ ".$i." ] ";
    }
}
?>