<?php

    include( "../dataBase/db.php" );

    include( "../helper/msgControl.php" );

    if( isset( $_GET[ "id" ] ) )
    {
        
        $id = $_GET[ "id" ];

        $query = "SELECT * FROM task WHERE id = '$id'";

        $response = mysqli_query( $connectionDB, $query );

        if( mysqli_num_rows( $response ) == 1 )
        {
            $row = mysqli_fetch_array( $response );

            $title = $row[ "title" ];
            $description = $row[ "description" ];
        };
      
    };

    if( isset( $_POST["update"] ) )
    {
        $newTitle = $_POST[ "titleUpdate" ];

        $newDescription = $_POST[ "descriptionUpdate" ];

        $query = "UPDATE task set title = '$newTitle', description = '$newDescription' WHERE id = '$id'";

        $response = mysqli_query( $connectionDB, $query );

        msgControl( $action = "updated", $response );

    };
    
?>

<?php include( "../includes/header.php" ) ?>

<?php include( "../includes/ui/navBar.php" ) ?>

<div class="container p-4">

        <div class="row">

            <div class="col-md-4 mx-auto">


                <div class="card">

                    <div class="card-body">
                        
                        <form action="update.php?id=<?=$id?>" method="POST">
                        
                        <div class="form-group">
                            <input class="form-control" type="text" name="titleUpdate" placeholder="Task Title" value="<?=$title?>"/>
                        </div>

                        <div class="form-group mt-2">
                            <textarea class="form-control" name="descriptionUpdate" placeholder="Task description"><?=$description?></textarea>
                        </div>

                        <div class="form-group mt-2">
                           <button class="btn btn-outline-warning form-control" name="update" >Update Task</button>
                        </div>
                        
                        
                        </form>

                    </div>
                    
                </div>

            </div>

        </div>

    </div>

<?php include( "../includes/footer.php" ) ?>

</body>


</html>

