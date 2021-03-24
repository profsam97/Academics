<?php include "includes/db.php" ?>
<?php 
         $post_id = $_POST['value'];
         $c_id = $_POST['c_id'];
      
        $get_query = mysqli_query($connection, "SELECT * FROM comments WHERE comment_post_id = '$post_id'  AND $comment_id = '$c_id' ORDER BY comment_id  DESC ");
        confirmQuery($get_query);
        $row = mysqli_fetch_array($get_query);
        $date = $row['comment_date'];
        $author_name = $row['comment_author'] ;
        $comment = $row['comment_content'] ;
        $comment_image = $row['comment_image'];
        $comment_id = $row['comment_id'];
        $helpful = $row['helpful'];
        $user_helpful = $row['helpful_user'];
    
                if($helpful >1){
                    echo '
                    <p><button type="submit">  HelpFul?
                    </button> You and '. $helpful .' people  found this helpful </p>
               
                    ';
                }
                else{
                    echo '
                    <p class="disapper"><button type="submit">  HelpFul?
                    </button> '. $helpful.' people  found this helpful </p>
                    ';
                }
                
      

        ?>    
