<?php
$user_name= "root";
    $host_name= "localhost";
    $password= '';
    $database_name = "rakib";

    $db_connection = mysqli_connect($host_name, $user_name, $password, $database_name);
        if(!$db_connection){
            echo "error db connection";
        }
?>