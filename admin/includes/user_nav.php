
<body id="main-nav">
  
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top p-0 ">
      <div class="container-fluid">
      <a class="navbar-brand d-md-ml-6 font-weight-bold  text-danger" href="../index.php">Movilla  </a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="collapsibleNavId">
        
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user" aria-hidden="true"></i> Proftoby</a>
                      <div class="dropdown-menu bg-dark" aria-labelledby="dropdownId">
                          <a class="dropdown-item " href="../includes/logout.php"><i class="fas fa-power-off    "></i> Log off</a>
                      </div>
                  </li>
                  <li class="nav-item d-none">
                      <a href="" class="nav-link  d-lg-block">
                       <i class="fa fa-bell   bg-white h-75"></i>       Notifications
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <div class="row mt-4">
  <div class="col-md-2 bg-dark ver sticky-top d-none d-sm-block ">
  <ul class="nav flex-column p-2 atags">
      <li class="nav-item my-2 ">
        <a class="nav-link text-light " href="#"> Dashboard</a>
      </li>   
      </li>
    
      <li class="nav-item my-2">
        <a class="nav-link text-light" href="../user/user_profile.php" tabindex="-1" aria-disabled="true">Profile</a>
      </li>
      <li class="nav-item my-2">
          <a class="nav-link text-light" href="../user/favourites.php" tabindex="-1" aria-disabled="true">Enrolled</a>
        </li>
    </ul>
  </div>
  
  <ul class="nav nav-pills nav-stacked  d-sm-none my-auto pt-2">
    <li class="nav-item">
    <a class="nav-link  " href="../user/user_profile.php" aria-disabled="true">Profile</a>    </li>
    <li class="nav-item">
    <a class="nav-link  " href="../user/favourites.php" aria-disabled="true">Enrolled
    <span class="badge badge-pill badge-warning">  
        <?php
        $username = get_user_name();
        $count_select = mysqli_query($connection, "SELECT * FROM enrolled WHERE user_name = '{$username}' AND enrolled = 'yes'");
        echo $count = mysqli_num_rows($count_select);
        confirmQuery($count_select);
        
        ?>
        
        </span>
    </a>    </li>
   </ul>

  <style>
      body{
          overflow-x: hidden;
      }
      .ver{
    min-height: 639px;
    max-height: 870px;
    max-width: min-content;
}
  </style>