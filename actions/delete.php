<?php

    include( "../dataBase/db.php" );
    include( "../helper/msgControl.php" );
    //////////////////////////////////////

    if( isset( $_GET[ "id" ] ) )
    {
        
        $id = $_GET[ "id" ];

        $query = "DELETE FROM task WHERE id = '$id' ";

        $response = mysqli_query( $connectionDB, $query );
        
        msgControl( $action = "deleted", $response );
      
    };
    
?>