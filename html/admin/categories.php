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
                            <form action="">
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

                    <?php 

                    // Marrja e informatave nga tabela kategorite 
                    $query = "SELECT * FROM kategorite";
                    $select_kategorite = mysqli_query($connection, $query);

                    ?>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                        </thead>
                        <tbody>

                    <?php 

                    while($row = mysqli_fetch_assoc($select_kategorite)){
                        
                        $kat_id = $row['kat_id'];
                        $kat_emri = $row['kat_emri'];

                        echo "<tr>";
                        echo "<td>{$kat_id}</td>";
                        echo "<td>{$kat_emri}</td>";
                        echo "</tr>";

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
