<?php

    include( "../dataBase/db.php" );
    ////////////////////////////////// -> DB conn

    include( "../helper/msgControl.php" );
    ///////////////////////////////// -> helper


    $title = $_POST[ "title" ];
    $description = $_POST[ "description" ];
    ///////////////////////////////////////// -> Recuperacion datos form


    $query = "INSERT INTO task ( title, description ) VALUES ( '$title', '$description' )";
    $response = mysqli_query( $connectionDB, $query );
    ///////////////////////////////////////// -> insercion en DB
    
    msgControl( $action = "saved", $response );
    //////////////////////////////////////////// -> resultado request



?> 