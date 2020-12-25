<?php


    session_start();
    /////////// -> inicio de variable global sesion

    $connectionDB = mysqli_connect( "localhost", "root", "", "db_todo" );
    //////// -> conexion DB

    /*
    if( isset( $connectionDB ) )
    {
        echo "DB Online";
    }
    else
    {
        echo "Somthing is wrong";
    };
    */

?>