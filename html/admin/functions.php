<?php

function redirect($location){

    header("Location:" . $location);
    exit;

}


function ifItIsMethod($method=null){

    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){

        return true;

    }

    return false;

}



function isLoggedIn(){

    if(isset($_SESSION['user_role'])){

        return true;

    }

   return false;

}



function checkIfUserIsLoggedInAndRedirect($redirectLocation=null){

    if(isLoggedIn()){

        redirect($redirectLocation);

    }

}


function escape($string) {

    global $connection;
    
    return mysqli_real_escape_string($connection, trim($string));
      
}


function is_admin($username) {

    global $connection; 

    $query = "SELECT user_role FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    $row = mysqli_fetch_array($result);


    if($row['user_role'] == 'admin'){

        return true;

    }else {


        return false;
    }

}


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


function findAllMessages(){

    global $connection;

    $query = "SELECT * FROM mesazhet";
    $select_messages = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_messages)){
                        
        $msg_id    = $row['id'];
        $msg_emri  = $row['emri'];
        $msg_email = $row['emaili'];
        $msg_txt   = $row['mesazhi'];
        $msg_koha  = $row['koha'];

        echo "<tr>";
        echo "<td>{$msg_id}</td>";
        echo "<td>{$msg_emri}</td>";
        echo "<td>{$msg_email}</td>";
        echo "<td>{$msg_txt}</td>";
        echo "<td>{$msg_koha}</td>";
        echo "<td><a href='messages.php?delete={$msg_id}'>Delete</a></td>";
        
        echo "</tr>";

    }

}


function deleteMessages(){

    global $connection;

    if(isset($_GET['delete'])){

        $get_msg_id = $_GET['delete']; 
        
        $query = "DELETE FROM mesazhet WHERE id = {$get_msg_id} ";
        $delete_query = mysqli_query($connection, $query);

        header("Location: messages.php"); 
    }
}



function confirmQuery($result) {
    
    global $connection;

    if(!$result ) {
          
          die("QUERY FAILED ." . mysqli_error($connection));
    
      }
    
}



function username_exists($username){

    global $connection;

    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    if(mysqli_num_rows($result) > 0) {

        return true;

    } else {

        return false;

    }

}


function email_exists($email){

    global $connection;

    $query = "SELECT user_email FROM users WHERE user_email = '$email'";
    $result = mysqli_query($connection, $query);
    confirmQuery($result);

    if(mysqli_num_rows($result) > 0) {

        return true;

    } else {

        return false;

    }

}


function register_user($username, $email, $password){

    global $connection;

        $username = mysqli_real_escape_string($connection, $username);
        $email    = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);

        $password = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 12));
            
            
        $query = "INSERT INTO users (username, user_email, password, user_role) ";
        $query .= "VALUES('{$username}','{$email}', '{$password}', 'subscriber' )";
        $register_user_query = mysqli_query($connection, $query);

        confirmQuery($register_user_query);

}

function login_user($username, $password)
 {

     global $connection;

     $username = trim($username);
     $password = trim($password);

     $username = mysqli_real_escape_string($connection, $username);
     $password = mysqli_real_escape_string($connection, $password);


     $query = "SELECT * FROM users WHERE username = '{$username}' ";
     $select_user_query = mysqli_query($connection, $query);
     if (!$select_user_query) {

         die("QUERY FAILED" . mysqli_error($connection));

     }


     while ($row = mysqli_fetch_array($select_user_query)) {

         $db_user_id = $row['user_id'];
         $db_username = $row['username'];
         $db_user_password = $row['password'];
         $db_user_firstname = $row['user_firstname'];
         $db_user_lastname = $row['user_lastname'];
         $db_user_role = $row['user_role'];


         if (password_verify($password,$db_user_password)) {

             $_SESSION['username'] = $db_username;
             $_SESSION['firstname'] = $db_user_firstname;
             $_SESSION['lastname'] = $db_user_lastname;
             $_SESSION['user_role'] = $db_user_role;

             redirect("../admin");


         } else {

             return false;

         }

     }

     return true;

 }




?>
