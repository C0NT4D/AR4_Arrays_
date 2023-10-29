<?php

$ejemplo =[1,2,3,4,5,6,7,8,9,10];
$tamaño= count($ejemplo);

$parimpar=[[]];

$pospar=0;
$posimpar=0;

foreach($ejemplo as $numero)
{
    if ($numero % 2 == 0)
    {
        $parimpar[$pospar]=$numero;
        $pospar++;
    }
    else
    {
        $parimpar[$posimpar]=$numero;
        $posimpar++;
    }
}

print_r($parimpar[$pospar]);
echo"<br>";
print_r($parimpar[$posimpar]);


?>