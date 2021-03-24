<?php 

?>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark  fixed-top  p-0" id="main-nav1">
    <div class="container mx-9 p-0 ">
    <a class="navbar-brand d-md-ml-6 font-weight-bold  text-danger" href="index.php" >
    <img src="images/logo.png" class="img-fluid h-25 w-25 d-md-none"  alt="">
    <!-- <img src="images/movi.png" class="img-fluid h-25 w-25"  alt=""> -->
    <div class="d-none d-md-block">Academics</div>
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavId">
        <ul class="navbar-nav  font p-1 text-light ">
            <li class="nav-item  mx-2 ">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-list-alt"></i>
                    Home</a>
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
            <form class="form-inline mr-auto d-none d-md-block ml-xl-1 pl-xl-5 w-md-75 with my-lg-0 "name="ture"  action="search_results.php"  >
                <img src="images/iconfinder_icon-111-search_314807.png" class="ma ml-xl-1 ml-lg-4 ml-md-4 mr-4 p-0 mt-1"  alt="">
                <input class="form-control my text-white w-100 ml-xl-1 ml-lg-4  ml-md-4  mr-sm-2" id="searchssss" onkeyup=get_live_search(this.value)
                    
                type="text" placeholder="Search ..." name="search" autocomplete="off">
                <div class="search_res  col-xl-3 offset-xl-5  col-lg-4  offset-lg-5   col-md-5 offset-md-4 col-sm-6 offset-sm-8  fixed-top bg-dark" id="search_res"></div>
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
<div class="modal fade" id="videoModal">
    <div class="modal-dialog">  
      <div class="modal-content">
        <div class="modal-body">
          <div class="modal-header">
            <button class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>

          </div>
          <iframe src="" frameborder="0" height="350" allowfullscreen width="100%">

          </iframe>
        </div>
      </div>
    </div>
  </div>
<script src="js/function.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
  var url      = window.location.pathname; 
  if(url == '/movilla/movie.php'){
      var nav = document.getElementById('main-nav1');
    nav.classList.remove('fixed-top');
  }else{
    nav.classList.add('fixed-top');
  }

// window.scroll({
//   top:1000,
//   left:0,
//   behavior:'smooth'
// });
// if(window.location.href = 'movies'){
//   alert('yes');
// }
// alert('yes')
$(document).click(function(e){
if(e.target.class != 'search_res'){
  $('.search_res').html("");
}
 });
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
    html{
      scroll-behavior: smooth;
    }
</style>
