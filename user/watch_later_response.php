<?php
 include "../admin/includes/header.php";
 $user = get_user_name();
    
$select_query = mysqli_query($connection, "SELECT * FROM watch_later  inner join posts on watch_later.post_id = posts.post_id  WHERE user_name = '$user'");
while ($row = mysqli_fetch_array($select_query)) {
    $post_id = $row['post_id'];
    $cast = $row['casts'];
    $year = $row['year_date'];
    $genre = $row['genre'];
    $cast_image = $row['cast_images'];
    $trailer = $row['Trailer_id'];
    $cover_image = $row['post_image'];
    $pg = $row['PG'];
    $imdb = $row['imdb'];
    $indie =  trim($row['indie']);
    $title = trim($row['post_title']);
    $dots = (strlen($title)>12?'...':'');
    $dot = (strlen($genre)>20?'...':'');
    $newti = str_split($title,12);
    $newTitle = $newti[0].$dots;
    $newGenre = str_split($genre,28);
    $newGen = $newGenre[0].$dot;
    $image = $row['images'];
    $year = $row['year_date'];
    $about = $row['post_content'];
    $fhd = $row['download_link_FHD'];
    $hd = $row['download_link_HD'];
    $sd = $row['download_link_SD'];

echo ' 

'?>
 <div class="card col-5 col-sm-3  my-0 mx-1 p-4 opac " style="border: none;" > 
 <a onclick="movieSelecte('<?php echo $imdb ?>', '<?php echo $indie;?>')">
 <?php echo '
<img src="'.$cover_image.'" alt=""   class="card-img-top rows img-fluid "></a>
<div class="card-bod whit">
<a class="text-dark">
   <div class="d-flex d-row">
   <h4 class="my-0 d-none d-sm-block">'.$newTitle.'</h4>
   <p class="my-0 d-sm-none">'.$newTitle.'</p>
  <span class="ml-auto" onclick="del('.$post_id.')"> <i class="pl-5 text-danger fas fa-trash ml-auto my-1"></i></span>
   </div>  
    <small class="text-muted">'.$newGen.'</small> <br>
    '. $year.' <br>
            <span class="badge" style="background-color: #ffe799; color: #593d00;">PG '. $pg.'</span>
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
        url: 'watch_later_delete.php',
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