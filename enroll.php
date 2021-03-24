<?php 
include ("includes/db.php");
$post_id=  $_POST['post_id'];
 $comment_author = mysqli_real_escape_string($connection,$_POST['name']);
     

    $query = "INSERT INTO enrolled (post_id, user_name,  enrolled)";
    $query .= "VALUES('{$post_id}','{$comment_author}',  'yes')";
    $register_user_query = mysqli_query($connection, $query);

confirmQuery($register_user_query);
$query1 =  "UPDATE posts SET enroll = + 1 WHERE post_id = '$post_id' ";
$register_user_query1 = mysqli_query($connection, $query1);

confirmQuery($register_user_query1);
        echo"
        <div class='alert alert-primary  text-center  text-dark alert-dismissible fade show' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                <span class='sr-only'>Close</span>
            </button>
            <strong></strong> You have successfully enrolled for this course.
        </div>";

?>
