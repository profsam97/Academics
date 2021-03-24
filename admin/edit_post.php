<?php 
// include ("db.php");
$connection = mysqli_connect("localhost", "root", "", "movilla"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}   
    $p_id = $_POST['p_id'];
    $title = $_POST['title'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $hour = $_POST['hour'];
    // $tmp = $_FILES['image']['tmp_name'];
    $upload_dir = '../images';
    $tags = $_POST['tags'];
    $max = $_POST['max_part'];

    $tmp_name = $_FILES["image"]["tmp_name"];
    // basename() may prevent filesystem traversal attacks;
    // further validation/sanitation of the filename may be appropriate
    $name = basename($_FILES["image"]["name"]);
    move_uploaded_file($tmp_name, "../images/$name");
    $up = mysqli_real_escape_string($connection, $name);
    $content = mysqli_real_escape_string($connection,$_POST['content']);
    $about = mysqli_real_escape_string($connection,$_POST['about']);
    $query = "UPDATE posts SET post_title = '{$title}', content = '{$content}', images = '{$up}',about = '{$about}', end_date = '{$end_date}', tags = '{$tags}',max_no_of_part = '{$max}',start_dates = '{$start_date}',hour = '{$hour}' WHERE post_id = '$p_id' ";
      $update_query = mysqli_query($connection, $query);
    //   confirmQuery($update_query);
      $no_error = true;
    //   redirect("view_all_posts.php");

?>
