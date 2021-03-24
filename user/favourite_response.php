<?php
 include "../admin/includes/header.php";
 $user = get_user_name();
    
$select_query = mysqli_query($connection, "SELECT * FROM enrolled  inner join posts on enrolled.post_id = posts.post_id  WHERE user_name = '$user'");
while ($row = mysqli_fetch_array($select_query)) {
    $post_id = $row['post_id'];
    $title = $row['post_title'];
    $content = $row['content'];
    $start_date = $row['start_dates'];
    $end_date = $row['end_date'];
    $hour = $row['hour'];
    $image = $row['images'];
    $tags = $row['tags'];
    $level = $row['levels'];
    $max = $row['max_no_of_part'];
    $enroll = $row['enroll'];
    $about = $row['about'];
    $view = $row['post_views_count'];
    $year = explode('-',$start_date);
    $year1 = explode('-',$end_date);
    if(empty($image)){
        $image = 'course_4.jpg';
    }

echo ' 

'?>
 <div class="card col-5 col-sm-3  my-0 mx-1 p-4 opac whit " style="border: none;" > 
 
<a href="../movie2.php?p_id=<?php echo $post_id ?>">
<?php echo '
<img src="../images/'.$image.'" alt=""   class="card-img-top rows img-fluid opac "></a>
<div class="card-bod whit">
<a class="text-dark">
   <div class="d-flex d-row">
   <h4 class="my-0 d-none d-sm-block">'.$title.'</h4>
   <p class="my-0 d-sm-none">'.$title.'</p>
  <span class="ml-auto" onclick="del('.$post_id.')"> <i class="pl-5 text-danger fas fa-trash ml-auto my-1"></i></span>
   </div>  
    <small class="text-muted">'.$tags.'</small> <br>
    '. $year[0].' <br>
            <span class="badge" style="background-color: #ffe799; color: #593d00;">'. $level.'</span>
</div>
</a>
</div>';
}
;

?>
<script>
   function del(id){
    $.ajax({
        type: 'post',
        data:{id:id},
        url: 'favourite_delete.php',
        success: function(response){
            $('.response').html(response);
        }
    })    }
</script>
<style>
    .rows{
    max-height: 220px;
} 


@media (max-width: 575px) {
    .matop{
    top:-20px
}
        }
        @media (max-width: 769px) {
            .matop{
    bottom:600px
}


        }
   
</style>