<?php
if(isLoggedIn()){
    if(get_role() != 'user'){

    }else{
        redirect('../index.php');
    }
}
else{
    redirect('../index.php');
}
?>

<body id="main-nav">
  
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed p-1 ">
    <div class="container-fluid">
    <a class="navbar-brand d-md-ml-6 font-weight-bold  text-danger" href="../" >Academics  </a><span class="text-light">Admin</span>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavId">
            <ul class="navbar-nav ml-auto">
            <div class="text-light m-2">Users Online: <span class="usersonline"></span></div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, <?php echo strtoupper(get_user_name()); ?>  <i class="fa fa-user" aria-hidden="true"></i> </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="dropdownId">
                        <a class="dropdown-item " href="../includes/logout.php"><i class="fas fa-power-off    "></i> Log off</a>
                    </div>
                </li>
             
            </ul>
        </div>
    </div>
</nav>
<div class="row">
<div class="col-md-2 bg-dark ver sticky-top">
<ul class="nav flex-column p-2 atags">
    <li class="nav-item my-2 ">
      <a class="nav-link text-light " href="dashboard.php"> Dashboard</a>
    </li>
    
    <li class="nav-item my-2">
    <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown" class="text-light mx-3">Class</a>
        <ul id="posts_dropdown" class="collapse list-unstyled">
            <li class="atags ml-4 my-1">
                <a href="view_all_posts.php" class="text-light"> View All Classes</a>
            </li>
            <?php if(get_role() != 'staff'): ?>

        <hr>     <li class="atags ml-4 my-1">
                <a href="add_post.php" class="text-light">Add Class</a>
            </li>
            <?php  endif;?>

        </ul>
    </li>
    <?php if(get_role() != 'staff'): ?>
    <li class="nav-item my-2">
      <a class="nav-link text-light" href="cat.php">Venues</a>
    </li>
    <li class="nav-item my-2">
      <a class="nav-link text-light" href="unit.php">Units</a>
    </li>
    <li class="nav-item my-2">
      <a class="nav-link text-light" href="users.php" tabindex="-1" aria-disabled="true">Users</a>
    </li>
    <li class="nav-item my-2">
        <a class="nav-link text-light" href="comments.php" tabindex="-1" aria-disabled="true">Comments</a>
      </li>
      <li class="nav-item my-2">
        <a class="nav-link text-light" href="messages.php" tabindex="-1" aria-disabled="true">Messages</a>
      </li>
      <?php  endif;?>
      <li class="nav-item my-2">
        <a class="nav-link text-light" href="profile.php" tabindex="-1" aria-disabled="true">Profile</a>
      </li>
      <li class="nav-item my-2">
        <a class="nav-link text-light" href="enroll.php" tabindex="-1" aria-disabled="true">Enrolled Course <span class="badge badge-pill badge-warning">  
        <?php
        $username = get_user_name();
        $count_select = mysqli_query($connection, "SELECT * FROM enrolled WHERE user_name = '{$username}' AND enrolled = 'yes'");
        echo $count = mysqli_num_rows($count_select);
        confirmQuery($count_select);
        
        ?>
        
        </span></a>
       
      </li>
  </ul>
</div>
<script>
    function loadUsersOnline() {


$.get("function.php?onlineusers=result", function(data){

    $(".usersonline").text(data);


});



}


setInterval(function(){

loadUsersOnline();


},500);

</script>