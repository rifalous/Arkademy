<?php

    $mybiodata =
        array(
            "name" => "Rivaldy Fauzan Mutaz",
            "age" => 22,
            "address" => "Jl. Pajagalan 1, Gg. Pajagalan 1 RT 01 / RW 12, Banjaran, Kec. Banjaran, Kab. Bandung",
            "hobbies" => array("Futsal", "Nonton Filem"),
            "is_married" => false,
            "list_school" => array(
                    array(  "name" => "SMK Negeri 1 Katapang", 
                            "year_in" => "2014", 
                            "year_out" =>  "2018", 
                            "major" => "Teknik Komputer dan Jaringan"),
                    array(  "name" => "Universitas Telkom", 
                            "year_in" => "2016", 
                            "year_out" =>  "2018", 
                            "major" => "Teknik Informatika"),
            ),
            "skills" => array(
                    array(  "name" => "Android Development", "level"=>"Advanced"),
                    array(  "name" => "Web Development", "level"=>"Advanced"),
            ),
            "interest_in_coding" => true
        );

    function formatJson($mybiodata){
        return json_encode($mybiodata);;
    }
    
    echo formatJson($mybiodata);

 ?>
