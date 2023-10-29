<?php

$ejemplo =[1,1,2,3,4,5,6,6,7,7];
print_r($ejemplo);

echo"<br>";

$tamaño = count($ejemplo);

for ($i=0;$i<$tamaño+1;$i++) 
{
    $dupli=0;

    for($j=$i+1;$j<$tamaño;$j++)
    {
        if($ejemplo[$i]==$ejemplo[$j])
        {
            $dupli++;
            echo"Numero duplicados: $ejemplo[$j]<br>";
        }
    }


}

?>