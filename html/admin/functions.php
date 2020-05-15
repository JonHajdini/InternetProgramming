<?php

function insert_categories(){
    global $connection;

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
}


function findAllCategories(){
    global $connection;

    $query = "SELECT * FROM kategorite";
    $select_kategorite = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_kategorite)){
                        
        $kat_id = $row['kat_id'];
        $kat_emri = $row['kat_emri'];

        echo "<tr>";
        echo "<td>{$kat_id}</td>";
        echo "<td>{$kat_emri}</td>";
        echo "<td><a href='categories.php?delete={$kat_id}'>Delete</a></td>";
        echo "<td><a href='categories.php?edit={$kat_id}'>Edit</a></td>";
        echo "</tr>";

    }

}


function deleteCategories(){
    global $connection;

    if(isset($_GET['delete'])){

        $get_kat_id = $_GET['delete']; 
        
        $query = "DELETE FROM kategorite WHERE kat_id = {$get_kat_id} ";
        $delete_query = mysqli_query($connection, $query);

        header("Location: categories.php"); 
    }
}


function confirmQuery($result) {
    
    global $connection;

    if(!$result ) {
          
          die("QUERY FAILED ." . mysqli_error($connection));
    
      }
    

}


?>
