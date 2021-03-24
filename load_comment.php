<?php include "includes/db.php" ?>
<?php 
         $post_id = $_POST['post'];
         $username = get_user_name() ;   
            $get_query = mysqli_query($connection, "SELECT * FROM comments WHERE comment_post_id = '$post_id' ORDER BY comment_id  DESC ");
            confirmQuery($get_query);
            $count = mysqli_num_rows($get_query);
            if(mysqli_num_rows($get_query)>=1){
                echo "<div class='h3 monospace'> $count  Comments</div>";
            while($row = mysqli_fetch_array($get_query)){
            $date = $row['comment_date'];
            $author_name = $row['comment_author'] ;
            $comment = $row['comment_content'] ;
            $comment_image = $row['comment_image'];
            $comment_id = $row['comment_id'];
            $helpful = $row['helpful'];
            $user_helpful = $row['helpful_user'];
            $date_time_now = date("Y-m-d H:i:s");
            $start_date = new DateTime($date); //Time of post
            $end_date = new DateTime($date_time_now); //Current time
            $interval = $start_date->diff($end_date); //Difference between dates 
            if($interval->y >= 1) {
                if($interval->y == 1)
                    $time_message = $interval->y . " year ago"; //1 year ago
                else 
                    $time_message = $interval->y . " years ago"; //1+ year ago
            }
            else if ($interval->m >= 1) {
                if($interval->d == 0) {
                    $days = " ago";
                }
                else if($interval->d == 1) {
                    $days = $interval->d . " day ago";
                }
                else {
                    $days = $interval->d . " days ago";
                }


                if($interval->m == 1) {
                    $time_message = $interval->m . " month ". $days;
                }
                else {
                    $time_message = $interval->m . " months ". $days;
                }

            }
            else if($interval->d >= 1) {
                if($interval->d == 1) {
                    $time_message = "Yesterday";
                }
                else {
                    $time_message = $interval->d . " days ago";
                }
            }
            else if($interval->h >= 1) {
                if($interval->h == 1) {
                    $time_message = $interval->h . " hour ago";
                }
                else {
                    $time_message = $interval->h . " hours ago";
                }
            }
            else if($interval->i >= 1) {
                if($interval->i == 1) {
                    $time_message = $interval->i . " minute ago";
                }
                else {
                    $time_message = $interval->i . " minutes ago";
                }
            }
            else {
                if($interval->s < 30) {
                    $time_message = "Just now";
                }
                else {
                    $time_message = $interval->s . " seconds ago";
                }
            }
echo '<div class="container">
                <div class="media no-gutters">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 w-50">
                 <img src="'. $comment_image.'" alt="" class="img-fluid w-100 p-1 h-25 rounded-circle">
                 </div>
                    <div class="media-body mr-auto">
                        <div class="d-flex d-row">
                    <h5><?php echo $author_name; ?></h5>
                        <p class="ml-auto">'. $time_message.'</p>
                        </div>   
                        <p class="lead mr-a">'. $comment.'</p>
                    </div>
                </div>
                <form  id="hselpful"  class="form-group atags">
                <input type="text" class="d-none" name="post_id" value="'. $post_id.'">
                <input type="text" class="d-none" name="helpful" value="'. $comment_id.'">
                <input type="text" class="d-none" name="username" value="'. $username.'">';
           
            if($helpful == 0 && isLoggedIn()){
          echo     ' <button class="formss"  type="submit" id="'. $comment_id.','.''. $username.','.$post_id.' ">HelpFul?
                </button> ';
            }
         
          elseif($helpful == 0 && !isLoggedIn()){
              echo'
              <p><button type="submit" disabled id="'. $comment_id.'"  name ="" class="forms">HelpFul? 
              </button> <small class="form-text text-muted">You must be logged in</small>
            </p>';
          }
          
                elseif($user_helpful == $username ){
                    echo '
                    <p><button type="submit" disabled id="'. $comment_id.'  name ="" class="forms">  HelpFul?
                    </button> You 
                    ';
                   if($helpful >1) echo ' and '.$helpful .' people ';
                   
                   echo 'found this helpful </p>'; 
                } 
                 
             elseif($helpful !== 0 && !isLoggedIn()){
                echo '
                <p ><button type="submit" disabled id="'. $comment_id.'  name ="" class="forms">HelpFul? 
        
                </button><small class="form-text text-muted">You must be logged in</small> '. $helpful.' people  found this helpful </p>';
             }
               
            else
            echo'
                 <p class="disapper"><button type="submit" id="'. $comment_id.'  name ="" class="forms">  HelpFul?
                </button>  '. $helpful.'  people  found this helpful </p>';
    
      
            echo '
            </form>
            </div> ';
            }
        } else{
            echo "
            ";
            if(isLoggedIn())
         echo " <div class='h3'> Be the first to comment</div> 
            ";else{
                echo " ";
            }
        }
        ?>    

 
  
<script>
     $(".formss").click(function(event){
    event.preventDefault();
    var forms = $('.formss').attr('id');
    // console.log(forms);
    $.ajax({
        url: "helpful.php",
        type: "post",
        data:  {post : forms},
        cache: false,
        success: function(response){
            // $('.helpful').html(response);
            // console.log(response);
            // $('disapper').fadeOut(1000);
        }
    })
});
</script>