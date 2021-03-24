<?PHP
$connection = mysqli_connect("localhost", "root", "", "movilla"); //Connection variable
if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

// echo 'fwefw';
    
    $value = $_POST['id'];
    echo $value;
    $check_query = mysqli_query($connection, "SELECT * FROM posts WHERE imdb = '{$value}' ");
    // confirmQuery($check_query);
    $row = mysqli_fetch_array($check_query);
 echo   $movie_type = trim($row['indie']);


?>

