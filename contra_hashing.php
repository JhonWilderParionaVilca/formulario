<?php
    $pass = "secret";

    $hash = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 10]);

    echo $hash;

    // if(password_verify($pass, $hash)){
    //     echo "contraseña correcta";
    // }else{
    //     echo "contraseña incorrecta";
    // }
?>