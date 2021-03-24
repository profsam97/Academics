
<?php 
 include "../admin/includes/header.php";
    $user = get_user_name();
    $p_id = $_POST['id'];
$delete_query = mysqli_query($connection, "DELETE FROM watch_later WHERE user_name = '{$user}' AND post_id = '$p_id'");
confirmQuery($delete_query);
//  redirect('watch_later.php');

?>