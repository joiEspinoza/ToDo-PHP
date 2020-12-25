<?php include( "dataBase/db.php" ) ?>

<?php include( "includes/header.php" ) ?>


<!------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------->

<nav class="navbar navbar-dark bg-dark">

    <div class="container-fluid">

        <span class="navbar-brand mb-0 h1">To Do</span>

    </div>

</nav>

<body>
    
    <div class="container p-4">

        <div class="row">

            <div class="col-md-4">

                <?php if ( isset( $_SESSION[ "msg" ] ) )  {   ?>

                    <div class="alert alert-<?= $_SESSION[ "msg_color" ] ?> alert-dismissible fade show" role="alert">

                        <?= $_SESSION[ "msg" ] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>

                <?php session_unset(); /* limpia datos de sesion */ } ?>


                <div class="card">

                    <div class="card-body">
                        
                        <form action="actions/save.php" method="POST">
                        
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" placeholder="Task Title"/>
                        </div>

                        <div class="form-group mt-2">
                            <textarea class="form-control" name="description" placeholder="Task description"></textarea>
                        </div>

                        <div class="form-group mt-2">
                           <input class="btn btn-outline-primary form-control" name="saveTask" type="submit" value="Save Task"  />
                        </div>
                        
                        
                        </form>

                    </div>
                    
                </div>

            </div>

            <div class="col-md-8">

                <table class="table table-hover">

                    <thead>

                        <tr>
                            <th scope="col" class="text-center">Title</th>
                            <th scope="col" class="text-center">Description</th>
                            <th scope="col" class="text-center">Create Date</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php
                        
                            $query = "SELECT * FROM task";
                            $response = mysqli_query( $connectionDB, $query );
                            
                            while( $row = mysqli_fetch_array( $response ) )
                            {

                        ?>

                        <tr>
                            <td class="text-center"><?php echo $row[ "title" ]?></td>
                            <td class="text-center"><?php echo $row[ "description" ]?></td>
                            <td class="text-center"><?php echo $row[ "create_date" ]?></td>
                            <td class="text-center">
                                <a href="actions/update.php?id=<?php echo $row[ "id" ]?>"><i class="fa fa-retweet btn btn-outline-warning" aria-hidden="true"></i></a>
                                <a href="actions/delete.php?id=<?php echo $row[ "id" ]?>"><i class="fa fa-trash btn btn-outline-danger" aria-hidden="true"></i></a>
                            </td>
                        </tr>


                        <?php  } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>


    <?php include( "includes/footer.php" ) ?>

</body>


</html>










