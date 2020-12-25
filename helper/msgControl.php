<?php

    function msgControl( $action, $response )
    {
        if( $response )
        {
    
            $_SESSION[ "msg" ] = "Task ".$action." succesfuly";
            $_SESSION[ "msg_color" ] = "success"; 
            header( "location: ../index.php" );
        }
        else
        { 
            $_SESSION[ "msg" ] = "Query Fail";
            $_SESSION[ "msg_color" ] = "danger";
            header( "location: ../index.php" );
        };
    };

?>