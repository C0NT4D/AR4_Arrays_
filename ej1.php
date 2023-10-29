<?php
$ejemplo =[1,2,3,4,5,6,7];
print_r($ejemplo);
echo"<br>";

$array_in = [];

$tamaño= count($ejemplo);
for ($i = $tamaño - 1; $i >= 0; $i--) {
    $array_in[] = $ejemplo[$i];
}
foreach ($array_in as $numero) {
    echo "$numero" ;
}
?>