<?php 
include ("includes/db.php");
 $post = $_POST['post'];
$values = explode(',',$post);
$comment_id = $values[0];
$post_id = $values[2];
$username = $values[1];
 $select_query = mysqli_query($connection, "SELECT * FROM comments WHERE comment_id = $comment_id AND comment_post_id = $post_id ");
 $row = mysqli_fetch_array($select_query);
 confirmQuery($select_query);
 $count = $row['helpful'];
 $comment_query = mysqli_query($connection, "UPDATE comments SET helpful = $count + 1, helpful_user = '$username'  WHERE comment_id = $comment_id AND comment_post_id = $post_id ");
confirmQuery($comment_query);
if($count > 1){
    echo "you and " .$count ." found this helpful";
}else{
    echo "you found this helpful";
}
   

?>


      