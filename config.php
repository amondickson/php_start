<?php

    $con = new mysqli('localhost', 'root', '', 'simple_app');

    if($con -> connect_error){
        die("connection failed ". $con -> connect_error);
    }

?> 