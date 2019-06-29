<?php

    function is_email_valid($email) {
        $chek_email = (preg_match("/^([A-Za-z0-9]*[A-Za-z0-9\-\.\_]{2})\@([A-Za-z]*[A-Za-z0-9\-\_]{2})(\.[A-Za-z]*[A-Za-z0-9]{2})+$/", $email)) ? TRUE : FALSE;
        return $chek_email;
    }

    function is_phone_valid($phonenumber) {
        $chek_phone = (preg_match('/^[+]62/', $phonenumber)) ? TRUE : FALSE;
        return $chek_phone;
    }

    function is_uname_valid($username) {
        $chek_username = (preg_match('/^[a-z]{5,9}/', $username)) ? TRUE : FALSE;
        return $chek_username;
    }
    
    function is_pass_valid($password) {
        $chek_password = (preg_match('/([A-Z]*[a-z]*[0-9]*[!\@\$\%\^\&]*#)/', $password)) ? TRUE : FALSE;
        return $chek_password;
    }

    //Validate Email
    if(is_email_valid("rifalous@gmail.com")) {
        echo "Email is Valid";
    }
    else {
        echo "Email is Invalid";
    }
    
    echo "<br>";

    //Validate Phone Number
    if(is_phone_valid("+6282218392248")) {
        echo "Phone Number is Valid";
    }
    else {
        echo "Phone Number is Invalid";
    }

    echo "<br>";
    
    //Validate Username
    if(is_uname_valid("rifalous")) {
        echo "Username is Valid";
    }
    else {
        echo "Username is Invalid";
    }

    echo "<br>";

    //Validate Password
    if(is_pass_valid("p@ssW0rd#")) {
        echo "Password is Valid";
    }
    else {
        echo "Password is Invalid";
    }

 ?>