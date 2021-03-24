
<?php 
 include "includes/header.php";
    $user = get_user_name();
    $p_id = $_POST['id'];
$delete_query = mysqli_query($connection, "DELETE FROM enrolled WHERE user_name = '{$user}' AND post_id = '$p_id'");
confirmQuery($delete_query);
//  redirect('watch_later.php');

?>