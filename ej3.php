<?php

$ejemplo =[1,2,3,4,5,6,7,8,9,10];
$tamaño= count($ejemplo);

$pares=[];
$impares=[];

$pospar=0;
$posimpar=0;

foreach($ejemplo as $numero)
{
    if ($numero % 2 == 0)
    {
        $pares[$pospar]=$numero;
        $pospar++;
    }
    else
    {
        $impares[$posimpar]=$numero;
        $posimpar++;
    }
}

print_r($pares);
echo "<br>";
print_r($impares);


?>