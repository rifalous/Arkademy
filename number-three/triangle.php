<?php

    $n = 11;

    echo "<center>";

    for ($i = $n; $i >= 0; $i--) {

        for ($j = 1; $j <= $i; $j++) {

            if ($i % 2 != 0) {
                if ($i == 11 || $i == 1) {
                    echo "&nbsp;*&nbsp;";
                } 
                else if ($i != 11 && $j == 1 ) {
                    echo "&nbsp;*&nbsp;";
                } 
                else if ($i != 11 && $j == $i ) {
                    echo "&nbsp;*&nbsp;";
                } 
                else {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                }
                
            }  

        }
        echo '<br>';
    }

    echo "</center>";
?>

 