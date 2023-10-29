<?php
$notas = [4, 8, 6, 3, 7, 10, 2, 5, 1, 9];
print_r($notas);
echo "<br>";
echo "<br>";

foreach ($notas as $nota)
 {
    if (!is_numeric($nota)) 
    {
        echo "Error: el array contiene elementos no numéricos";
        
    }
}

$min = min($notas);
$max = max($notas);

$index_min = array_search($min, $notas);
$index_max = array_search($max, $notas);

if ($index_min === $index_max)
{
    unset($notas[$index_min]);
} 
else 

{
    unset($notas[$index_min]);
    unset($notas[$index_max]);
}
print_r ($notas);
echo "<br>";
echo "<br>";
$suma=0;
foreach($notas as $numero)
{
    $suma=+ $numero;
}
$tamaño=count($notas);

$media = $suma / $tamaño;

echo "Media de las notas: $media ";
?>