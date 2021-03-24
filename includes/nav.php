    <?php if(isset($_GET['p_id'])):?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark p-0" id="main-nav">
    <?php else:?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark  fixed-top  p-0" id="main-nav">
    <?php endif;?>
    <div class="container mx-9 p-0 ">
    <a class="navbar-brand d-md-ml-6 font-weight-bold  text-danger" href="index.php" >Movilla</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavId">
        <ul class="navbar-nav  font p-1 text-light ">
            <li class="nav-item active mx-2 justify-content-center d-none d-lg-block d-sm-block d-md-none">
                <a class="nav-link  display-inline" href="#home">
                    <i class="fas fa-home text-danger  "></i>
                Home  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  mx-2 ">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-list-alt"></i>
                    current</a>
            </li>
            <li class="nav-item mx-2  movies d-lg-block d-sm-block d-md-none">
                <a class="nav-link" href="about.php">
                    <i class="fas fa-film"></i>
                    About</a>
            </li>
            <li class="nav-item  mx-2 d-lg-block series d-sm-block d-md-none">
                <a class="nav-link" href="contact_us.php">
                    <i class="fa fa-file-video"></i>
                    Contact</a>
            </li>
        </ul>
            <form class="form-inline mr-auto d-none d-md-block ml-xl-1 pl-xl-5 w-md-75 with my-lg-0 "name="ture"  action="search_result.php" method="get">
                <img src="images/iconfinder_icon-111-search_314807.png" class="ma ml-xl-3 ml-lg-4 ml-md-4 mr-4 p-0 mt-1"  alt="">
                <input class="form-control my text-white w-100 ml-xl-3 ml-lg-4  ml-md-4  mr-sm-2" id="searchssss" onkeyup=get_live_search(this.value)
                    
                type="text" placeholder="Search ..." name="search" autocomplete="off">
                <div class="search_res  col-xl-3 offset-xl-6  col-lg-4  offset-lg-6   col-md-5 offset-md-4 col-sm-6 offset-sm-8  fixed-top bg-dark" id="search_res"></div>
            </form>
            <?php if (isLoggedIn() && get_role() == 'user'):?>
                <ul class="navbar-nav ml-xl-2 pl-xl-1  ml-lg-3 ml-md-4 pl-lg-2">
                <img src="<?php echo profilePic(); ?> " class="ma ml-2 mr-2 rounded-circle mt-1"  alt="">
                <li class="nav-item dropdown ml-5">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Welcome, <?php echo  ucfirst($_SESSION['username']) ?> </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="user/user_profile.php">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="includes/logout.php">Logout</a>
        </div>
       
    </li>
            </ul>
            <?php elseif (isLoggedIn() && get_role() != 'user'):?>
              <ul class="navbar-nav ml-xl-2 pl-xl-1  ml-lg-3 ml-md-4 pl-lg-2">
                <img src="<?php echo profilePic(); ?> " class="ma ml-2 mr-2 rounded-circle mt-1"  alt="">
                <li class="nav-item dropdown ml-5">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Welcome, <?php echo  ucfirst($_SESSION['username']) ?> </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="admin/profile.php">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="includes/logout.php">Logout</a>
        </div>
       
    </li>
            </ul>
            <?php else:?>
                <ul class="navbar-nav ">
                <a class="btn btn-outline-info look mx-1 ml-md-4" href='login.php'>Login</a>
                <div class="mx-2 my-2 d-lg-none" ></div>
                <a class="btn btn-outline-danger" href='login.php'>Sign Up</a>
            </ul>
                <?php endif ;?>


    </div>
    </div>
</nav>  
<script>
function get_live_search(value){
$.ajax({
    url:"live_search_result.php",
    type: "POST",
    data: {value: value},
    cache: false,
    success: function(response){
        console.log(response);
        $('.search_res').html(response);
    }
})
}
</script>
<style>
    #search_res{
        z-index: 100;
        top: 48px;
        min-width: auto !important;
        /* position: relative; */
    }
</style>