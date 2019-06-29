<?php

    function calculate($treeHeight, $year) {

        $treeHeight = 1;

        for($i=1; $i<=$year; $i++) {
            $spring = $treeHeight + 1;
            $summer = $spring * 3;
            $autumn = $summer - 1.5;
            $winter = ($autumn * 0.15) + $autumn;

            $treeHeight = $winter + $treeHeight;
            
            if ($i % 2 == 0) {
                $treeHeight = $treeHeight / 2;
            }
        }
    
        return $treeHeight;
    }

    $mytree = calculate(2,2);
    echo $mytree.'m';

 ?>