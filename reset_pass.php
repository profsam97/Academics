<?php 
include "includes/db.php";
 $username = $_POST['username'];
$password = trim($_POST['password']);
 $password = mysqli_real_escape_string($connection, $password);

 $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
$the_comment_id = $_GET['unapprove'];
    



$reset_query = mysqli_query($connection, "UPDATE users SET user_password = '{$password}'  WHERE username = '{$username}'");      
// confirmQuery($reset_query);
if(!$reset_query){
    die("QUERY FAILED ." . mysqli_error($connection));
}
    redirect('login.php');
?>