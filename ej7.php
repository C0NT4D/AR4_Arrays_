

    <?php
    $ejemplo=["2", "5", "7", "4", "0", "7","-5", "8", "0"];
    $mover = 0;
    $pos=array_search($mover, $ejemplo);
    
    if($pos !== false)
    {
        unset($ejemplo[$pos]);
        $ejemplo[]=$mover;
        print_r($ejemplo);
    } 
    else

    {
        echo "el numero no se encontro en el array";
    }

    ?>
