<?php include "includes/header.php";?>

<body id="main-nav">
<?php include "includes/nav.php";?>
<?php 

   if(isset($_POST['create_user'])) {
       
            
            $user_firstname    = escape($_POST['user_firstname']);
            $user_lastname     = escape($_POST['user_lastname']);
            $user_role         = escape($_POST['user_role']);
            $username          = escape($_POST['username']);
            $user_email        = escape($_POST['user_email']);
            $user_password     = escape($_POST['user_password']);



            $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));    
              
            $query = "INSERT INTO users(user_firstname, user_lastname, user_role,username,user_email,user_password) ";
                 
            $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}', '{$user_password}') "; 
                 
            $create_user_query = mysqli_query($connection, $query);  
              
            confirmQuery($create_user_query); 
       
       
                 echo "User Created: " . " " . "<a href='users.php'>View Users</a> "; 
       
      
   
   }
    

    
    
?>
   <div class="mx-5">
<form action="" method="post" enctype="multipart/form-data">    
     
     
     
      <div class="form-group">
         <label for="title">Firstname</label>
          <input type="text" class="form-control" name="user_firstname">
      </div>
      
      
      

       <div class="form-group">
         <label for="post_status">Lastname</label>
          <input type="text" class="form-control" name="user_lastname">
      </div>
     
     
         <div class="form-group">
       
       <!-- <select name="user_role" id="">
        <option value="subscriber">Select Role</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
          <option value="subscriber">System Admin</option>
           
        
       </select> -->
       <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Role</label>
  </div>
  <select class="user_role" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="user">User</option>
    <option value="system_admin">System Admin</option>
    <option value="staff">Staff</option>
    <option value="admin">Admin</option>
  </select>
</div>
       
       
       
      </div>
      <div>
 
<!--
      <div class="form-group">
         <label for="post_image">Post Image</label>
          <input type="file"  name="image">
      </div>
-->

      <div class="form-group">
         <label for="post_tags">Username</label>
          <input type="text" class="form-control" name="username">
      </div>
      
      <div class="form-group">
         <label for="post_content">Email</label>
          <input type="email" class="form-control" name="user_email">
      </div>
      
      <div class="form-group">
         <label for="post_content">Password</label>
          <input type="password" class="form-control" name="user_password">
      </div>
      
      
      

       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
      </div>


</form>
</div>
<?php include "includes/footer.php";?>
