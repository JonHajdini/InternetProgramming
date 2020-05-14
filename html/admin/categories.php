<?php include "includes/header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include "includes/navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>
                       
                       
                        <div class="col-xs-6">
 <?php

if(isset($_POST['submit'])){

    $kat_emri = $_POST['cat_title'];

    if($kat_emri == "" || empty($kat_emri)){

        echo "This field should not be empty";

    } else {

        $query = "INSERT INTO kategorite(kat_emri) ";
        $query .= "VALUE('{$kat_emri}')" ;

        $create_category_query = mysqli_query($connection, $query);

        if(!$create_category_query){

            die('QUERY FAILED' . mysqli_error($connection));

        }

    }

}

?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Add Category</label>
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category"> 
                                </div>

                            </form>       
                    </div>

                    <div class="col-xs-6">
 
                    

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                        </thead>
                        <tbody>

                    <?php 
 

                    // Marrja e informatave nga tabela kategorite 
                    $query = "SELECT * FROM kategorite";
                    $select_kategorite = mysqli_query($connection, $query);


                    while($row = mysqli_fetch_assoc($select_kategorite)){
                        
                        $kat_id = $row['kat_id'];
                        $kat_emri = $row['kat_emri'];

                        echo "<tr>";
                        echo "<td>{$kat_id}</td>";
                        echo "<td>{$kat_emri}</td>";
                        echo "<td><a href='categories.php?delete={$kat_id}'>Delete</a></td>";
                        echo "</tr>";

                    }

                    ?>

                    <?php 

                    if(isset($_GET['delete'])){

                        $get_kat_id = $_GET['delete']; 
                        
                        $query = "DELETE FROM kategorite WHERE kat_id = {$get_kat_id} ";
                        $delete_query = mysqli_query($connection, $query);

                        header("Location: categories.php"); //refresh page after delete
                    }

                    ?>

                        </tbody>
                    </table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/footer.php"; ?>
