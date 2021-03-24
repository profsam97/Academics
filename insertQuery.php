<?php 
include ("includes/db.php");
$title = mysqli_real_escape_string($connection, $_POST['title']);
$about =  mysqli_real_escape_string($connection,$_POST['about']);
$genre = $_POST['genre'];
$images = $_POST['images'];
$rated = $_POST['rated'];
$Year = $_POST['Year'];
$castImages = $_POST['castImages'];
$Indie = $_POST['Indie'];
$date = date("Y:m:d");
$imdbId = $_POST['movieId'];
  $actors = mysqli_real_escape_string($connection,$_POST['actors']);
$rates = $_POST['rates'];
$check_query = mysqli_query($connection, "SELECT * FROM posts WHERE post_title = '$title'");
confirmQuery($check_query);
$row = mysqli_num_rows($check_query);
if(mysqli_num_rows($check_query) == 0 ){
    $insert_query = mysqli_query($connection, "INSERT INTO posts (post_title,year_date, PG, post_content,post_image,imdb,genre,post_date, casts, rating,indie,cast_images) VALUES('{$title}', '{$Year}', '{$rated}', '{$about}', '{$images}', '{$imdbId}', '{$genre}', '{$date}', '{$actors}', '{$rates}', '{$Indie}',  '{$castImages}')" );
    confirmQuery($insert_query);
 echo   $p_id = mysqli_insert_id($connection);
}else{
    $row = mysqli_fetch_array($check_query);
   echo $p_id = $row['post_id'];
}
?>