<?php 
include ("includes/db.php");
if(isLoggedIn()){
    $username = get_user_name();
    $query = mysqli_query($connection, "SELECT * FROM  users WHERE username = '{$username}'");
    confirmQuery($query);
    $row = mysqli_fetch_assoc($query);
    $email = $row['user_email'];
}else{
    $username = trim($_POST['name']);
    $email = trim($_POST['email']);
}

echo $message = $_POST['message'];
if($message != '' && $username !='' && $email !=''){
$message = $username .' ' . '    sent the following message'.' ' . trim($_POST['message']);
    $header = "from:" .$email;
    mail($email, $message, $header);
    $message = trim($message);
    $email = mysqli_real_escape_string($connection, $email);
    $message = mysqli_real_escape_string($connection, $message);
    // $date = date("Y-m-d H:i:s");
    $insert_query = mysqli_query($connection, "INSERT INTO messages(email,username,messages,messages_date)
    VALUES ( '{$email}', '{$username}','{$message}', now()) ");
    confirmQuery($insert_query);
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>message sent Successfully</strong> 
</div>
    ';
}else{
  echo '
  
  <div class="alert alert-danger pt-4 mt-5 alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Please,  fill all fields</strong> 
</div>
';
}
?>


<script>
  $(".alert").alert();
</script>