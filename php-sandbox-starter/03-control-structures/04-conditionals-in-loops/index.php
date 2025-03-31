<?php

    $x = 1;

    while($x <= 10){
        echo $x . '<br>';
        if($x == 7){
            echo 'x reached 7!';
            break;
        }
        $x++;
    }

?>