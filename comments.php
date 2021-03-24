<?php 
include ("includes/db.php");
$post_id=  $_POST['post_id'];
if(isset($_POST['comment'])){
 $comment =  mysqli_real_escape_string($connection,$_POST['comment']);
 $comment_author = mysqli_real_escape_string($connection,$_POST['name']);
 $date = date("Y-m-d H:i:s");

}
     
if($comment !== ""){
    $query = "INSERT INTO comments (comment_post_id, comment_author,  comment_content,comment_date) ";
    $query .= "VALUES('{$post_id}','{$comment_author}',  '{$comment}', '{$date}' )";
    $register_user_query = mysqli_query($connection, $query);

confirmQuery($register_user_query);
        echo "
        <div class='alert alert-primary  text-center  text-dark alert-dismissible fade show' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                <span class='sr-only'>Close</span>
            </button>
            <strong></strong> Comment posted successfully.
        </div>";
}
else{
echo "
<div class='alert alert-danger  text-center  text-dark alert-dismissible fade show' role='alert'>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        <span class='sr-only'>Close</span>
    </button>
    <strong></strong>Ha you need to put in some value.
</div>";
}
?>
