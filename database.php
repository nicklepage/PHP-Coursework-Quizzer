<?php
    $db_host = 'localhost';
    $db_name = 'quizzer';
    $db_user = 'root';
    $db_pass = '';

    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if($mysqli->connect_error){
        printf("Connection Failure: %s\n", $mysqli->connect_error);
    }
?>