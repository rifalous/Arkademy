<?php

    function calculate($height, $year) {
        $treeHeight = $height;

        for($i=1; $i<=$year; $i++) {
            $treeHeight += 1;
            $treeHeight *= 3;
            $treeHeight -= 1.5;
            $treeHeight += $treeHeight * 0.15;
            
            if ($i % 2 == 0) {
                $treeHeight /= 2;
            }
        }
        return $treeHeight;
    }

    $mytree = calculate(2,2);
    echo $mytree.'m';

 ?>
