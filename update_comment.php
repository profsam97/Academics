<?php
include "includes/db.php";
 $post_id = $_POST['post_id'];
  $comment_id =     mysqli_insert_id($connection);
    $comment = mysqli_query($connection, "SELECT * FROM comments WHERE comment_post_id = '$post_id' ORDER BY comment_id DESC ");
    confirmQuery($comment);
    $row = mysqli_fetch_array($comment);
    $date = $row['comment_date'];
    $author_name = $row['comment_author'] ;
    $comment = $row['comment_content'] ;
    $comment_image = $row['comment_image'];
    echo '
    <div class="container cons">
    <div class="media no-gutters">
        <div class="col-lg-1 w-50">
     <img src='.$comment_image.'  alt="" class="img-fluid w-100 p-1 h-25 rounded-circle">
     </div>
        <div class="media-body mr-auto">
            <div class="d-flex d-row">
        <h5> '.$author_name.'</h5>
            <p class="ml-auto">'.$date.'</p>
            </div>   
            <p class="lead mr-a">'.$comment.'</p>
        </div>
    </div>
    <form action="" method="post" class="form-group atags"><p><a href="" class="">HelpFul?</a> 2 people found this helpful</p>
    </form>
</div>
'
?>