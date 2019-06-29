<?php

    function sortNumber($number) {
        $data = explode(0, $number);
        
        for ($i=0; $i<count($data); $i++) {
            $sorted_array = str_split($data[$i]);
            sort($sorted_array);
            echo implode('', $sorted_array);
        }
    }

    sortNumber(5956560159466056);

?>