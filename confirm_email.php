<?php 
include ("includes/db.php");
$email = trim($_POST['email']);
$email_confirm = mysqli_query($connection, "SELECT * FROM users WHERE user_email = '{$email}' ");
confirmQuery($email_confirm);
$count = mysqli_num_rows($email_confirm);
if($count >=1){
    $row = mysqli_fetch_assoc($email_confirm);
    $username = $row['username'];
    $token = rand();
    $to = $email;
    $header = "from:" . "movillla@movillla.com";
    $message = 'from Movilla.. you requested a change of password. click on the link below to change <br>';
    $message += 'Please ignore if you didnt request';
    $message += 'movilla/reset_password.php?token='.$token;
    mail($header, $message, $to);
    $update_query = mysqli_query($connection, "UPDATE users SET token = '{$token}' WHERE username = '{$username}'");
    confirmQuery($update_query);
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Link sent Successfully</strong> 
</div>
    ';
}else{
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>That email dont exists in our system</strong> 
  </div>
    ';
}
?>


<script>
  $(".alert").alert();
</script>