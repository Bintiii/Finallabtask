<?php
    $database= new mysqli("localhost","root","","library");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }
?>