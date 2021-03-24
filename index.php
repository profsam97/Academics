<?php include "includes/header.php"; ?>
<body id="main-nav">
<?php include "includes/navs.php"; ?>

<div class="d-none" id="trans">

<div class="carousel slide" id="myCarousel" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-slide-to="0" data-target="#myCarousel">

    </li>
    <li data-slide-to="1" data-target="#myCarousel">

    </li>
    <li data-slide-to="2" data-target="#myCarousel">

    </li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item carousel-image-1 active">
      <div class="container">
        <div class="carousel-caption d-none d-sm-block mb-5 text-right">
          <h1 class="display-3 text-light">Dream Up</h1>
          <p class="lead text-light">The sky is your starting point</p>
          <a href="login.php" class="btn btn-danger btn-lg">Enroll Now</a>
        </div>
      </div>
    </div>
    <div class="carousel-item carousel-image-2 ">
      <div class="container">
        <div class="carousel-caption d-none d-sm-block mb-5">
          <!-- <h1 class="display-3">Heading Two</h1> -->
          <p class="lead text-light display-4">Become the professional you're destined to be.</p>
          <a href="login.php" class="btn btn-info btn-lg">Discover</a>
        </div>
      </div>
    </div>
    <div class="carousel-item carousel-image-3">
      <div class="container">
        <div class="carousel-caption d-none d-sm-block mb-0 text-right">
          <h1 class="display-3">Be ahead of your mate</h1>
          <!-- <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, alias.</p> -->
          <a href="login.php" class="btn btn-danger btn-lg">Start Now</a>
        </div>
      </div>
    </div>
  </div>
  <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a href="#myCarousel" data-slide="next" class="carousel-control-next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</section>
<section id="home" class="py-1">
<div class="container">
  <div class="row">
    <div class="col-md-4 mb-4 text-center">
         <i class="fas fa-smile-wink fa-3x mb-2"></i>
         <h3>Dream Up</h3>
         <p>Learn the latest skills to reach your professional goals.</p>
    </div>
    <div class="col-md-4 mb-4 text-center">
      <i class="fas fa-book-open fa-3x mb-2"></i>
      <h3>Self paced learning</h3>
      <p>Learn on your schedule- whenever and wherever you want</p>
    </div>
    <div class="col-md-4 mb-4 text-center">
      <i class="fas fa-fist-raised fa-3x mb-2"></i>
      <h3>Empower Yourself</h3>
      <p>Free online courses from the world leading expert.</p>
    </div>
  </div>
</div>
</section>
    <!-- <div class="row">
        
    <div id="carouselId" class="carousel slide d-none d-md-block " data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="images/tech.jpg" class="img-fluid w-100"   style="max-height: 600px; " alt="First slide">
                    <div class="car  text-center " >
                        <div class="card-header d-none d-md-block ">
                            <h3 class="display-4 mur">Download High Resolution Movies</h3>
                            <small class="text-muted">Across All Devices</small>
                        </div>
                        <div class="card-body">
                            <div class="card-text me ">
                                Search for Anything
                            </div>
                        </div>
                        <div class="card-footer lead">
                         <a href="films" class="can" >Start Now</a>  
                        </div>
                    </div>
                  </div>
                </div>

            </div>          
        </div> -->
     
</section>
</div>


<section id="well" class="mt-5 clearfix">
            <div class="col-12 d-md-none ">
                <img src="images/thom-holmes-J2e34-1CVVs-unsplash.jpg"   alt="" class="img-fluid w-auto h-auto hig">
            </div>

</section>
<div class=" bg-danger w-auto  d-md-none p-3 m-3" id='access'>
<p class="lead text-light ">Get access to courses for free</p>
<form class="form-inline     d-sm-block  with1 my-lg-0 "name="ture"  action="search_results.php" method="get">
                <img src="images/iconfinder_icon-111-search_314807.png" class="ma1 my-1  position-absolute"  alt="">
                <input class="form-control my2 text-white w-100 w-sm-75 text-dark" id="searchssss" onkeyup=get_live_search(this.value)
                    
                type="text" placeholder="What do you want to watch..." name="search" autocomplete="off">
                <div class="search_res    col-sm-10 bg-dark "></div>

            </form>
</div>
<!-- <div class="q_iframe d-block"></div>    -->
<!-- <div class="favs"></div>
<section id="latest" class="">  
    <div class="container d-none">
    <h3 class="text-muted">Latest Release</h3>
    <div class="row  owl-carousel">
    <?php 
$select_query = mysqli_query($connection, "SELECT * FROM posts ORDER BY post_id DESC LIMIT 10");
confirmQuery($select_query);

?>
          

<div class="card  my-0 mx-1 opac whit " style="border: none;" id="<?php echo $post_id;?>">
<a   onclick="movieSelected('<?php echo $imdb; ?>', '<?php echo $indie; ?>',  '<?php echo $title; ?>')"  class="#">
<img src="<?php echo $cover_image;?>" alt=""   class="card-img-top rows img-fluid"></a>
<div class="card-bod whit">

<div class="d-flex d-row">
<h4 class="my-0"><?php echo $title; ?></h4>
<input type="text" value="<?php echo $post_id ?>"  class="d-none real_fav">
<span class="fav ml-auto" onclick="fav(<?php echo $post_id?>)">
<i class="fa fa-heart text-danger  fa-2x p-1 " ></i></span>
</div>
<a  onclick="movieSelected('<?php echo $imdb; ?>', '<?php echo $indie; ?>',  '<?php echo $title; ?>')"  class="text-dark">
    <h4 class="my-0 d-none"><?php echo $cast; ?></h4>
    <small class="text-muted"><?php echo $genre; ?></small>
    <div class="card-text">English</div>
    <?php echo $year; ?> <br>
            <span class="badge" style="background-color: #ffe799; color: #593d00;">PG <?php echo $pg; ?></span>
</div>
</a>
</div>


        </div>
    </div>
</section> -->
<!-- <div class="quick mb-5"></div> -->

<section id="latest" class="">  
<div class="container p-0">
    <!-- <div class="ran mr-auto blink_me"></div> -->
    <div class="mr-auto text-dark h4">Recently Added</div>
  <div class="d-flex d-row   myScroll">
    <?php 
    while ($row = mysqli_fetch_array($select_query)) {
      $post_id = $row['post_id'];
      $title = $row['post_title'];
      $dot = (strlen($title)>12?'...':'');
      $new_title = str_split($title,12);
      $tite = $new_title[0] . $dot;
      $content = $row['content'];
      $start_date = $row['start_dates'];
      $end_date = $row['end_date'];
      $hour = $row['hour'];
      $image = $row['images'];
      $tags = $row['tags'];
      $level = $row['levels'];
      $max = $row['max_no_of_part'];
      $enroll = $row['enroll'];
      $about = $row['about'];
      $view = $row['post_views_count'];
      $year = explode('-',$start_date);
      $year1 = explode('-',$end_date);
      if(empty($image)){
          $image = 'course_4.jpg';
      }
    
    ?>
  <div class="col-md-2 col-sm-4 col-5  no-gutters">
              <div class="card  my-0 mx-1 opac whit " style="border: none;" >
  <a   onclick="redirect('<?php echo $post_id; ?>')" class="d-none  d-sm-block">    <img src="images/<?php echo $image?>" alt=""   class="card-img-top   w-100 h-50 myBorder  img-fluid"></a>
  <a   onclick="redirect('<?php echo $post_id; ?>')" class="d-sm-none">    <img src="images/<?php echo $image?>" alt=""   class="card-img-top  w-75 h-25 myBorder  img-fluid"></a>
<div class="card-bod whit">
  
<a href="#"  class="text-dark">
<h4 class="my-0"><?php echo $tite ?></h4>
<p class="card-text">
<span class="badge p-1 m-0 " style="background-color: #000; color: #fff; border: 1px solid white;">  <?php echo $year[0] ?>  </span> &nbsp;<span class="badge p-1 " style="background-color: #ffe799; color: #593d00; border: 1px solid white;">  <?php echo $level;?></span>
                </p>
<h6 class="text-muted "><?php echo  $hour  . ' ' . 'hours'?> </h6>
</a>  
</div>
</div>
</div>
<?php 
 } 
?>

  </div>
</div>
</section>


<!-- <section id="latest" class="mb-5">  
    <div class="container">
        <div class="d-flex d-row">

    <h3 class="text-muted "></h3>
    </div>
   
</div>
        </div>
    </div>
</section> -->


<!--home heading section-->

<section class="info my-5">
 <div class="container">
   <div class="row">
     <div class="col-md-6 align-self-center" >
      <h3>Insights that gives you an egde</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam enim provident molestias excepturi. Nemo doloribus earum adipisci ut fugit dolores quam omnis neque delectus nobis, eveniet totam quisquam distinctio perferendis?</p>
      <a href="about.html" class="btn btn-outline-danger btn-lg">Learn More</a>

     </div>
 
   <div class="col-md-6">
     <img src="images/blog_2.jpg" alt="" class="img-fluid">
   </div>
 </div>
</div>
</section>
<section id="testimonail-slider" class="p-5 bg-dark text-white">
<div class="container">
  <h4 class="text-center">Testimonials</h4>
  <div class="row text-center">
    <div class="col">
    <div class="slider">
        <div>
          <blockquote class="blockquote">
        <p class="mb-0">This website has taken my skills to the next level</p>
        <footer class="blockquote-footer">
          Sam Smith From <cite title="Company 1">
            Company 1
          </cite>
        </footer>
      </blockquote>
    </div>
    <div>
      <blockquote class="blockquote">
    <p class="mb-0">Very fast and easy way to learn new skills, highly recommend</p>
    <footer class="blockquote-footer">
      Jan Look From <cite title="Company 2">
        Company 2
      </cite>
    </footer>
  </blockquote>
</div>
<div>
  <blockquote class="blockquote">
<p class="mb-0">just started some weeks back, and i glad i did, awesome website</p>
<footer class="blockquote-footer">
  Kadrick Willian From <cite title="Company 1">
    Company 3
  </cite>
</footer>
</blockquote>
</div>
    </div>
  </div>
</div>
</section>
<!--Author-->
<section id="authors" class="py-5 text-center">
<div class="container">
 <div class="row">
  <div class="col">
    <div class="info-header mb-5">
      <h1 class="text-primary pb-5">Meet the Team</h1>
      <p class="lead">Academics is lovely built and maintained by these fine folks.</p>
    </div>
  </div>
 </div>

    <div class="row">
    <div class="col-lg-3 col-md-6 mb-resp">
      <div class="card">
        <div class="card-body">
          <img src="images/person3.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="">
          <h3>Lucas Grey </h3>
          <h5 class="lead">Admin</h5>
          <p>Handle the vast majority of  the back-end operations and maintenance.</p>
          <div class="d-flex justify-align-content">
            <div class="p-4">
              <a href="facebook.com">
                <i class="fab fa-facebook"></i>
              </a>
            </div>
            <div class="p-4"> 
              <a href="twitter.com">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
            <div class="p-4">
              <a href="instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-resp">
      <div class="card">
        <div class="card-body">
          <img src="images/person2.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="">
          <h3>Grace Smith</h3>
          <h5 class="lead"> System Admin </h5>
          <p>Grace provides adminstrative support and has worked in a non-profit community.</p>
          <div class="d-flex justify-align-content">
            <div class="p-4">
              <a href="facebook.com">
                <i class="fab fa-facebook"></i>
              </a>
            </div>
            <div class="p-4"> 
              <a href="twitter.com">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
            <div class="p-4">
              <a href="instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-resp">
      <div class="card">
        <div class="card-body">
          <img src="images/person1.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="">
          <h3>Susan Willains</h3>
          <h5 class="lead"> Web Developer</h5>
          <p>Susan is a Web and software developer and an Academic Director.</p>
          <div class="d-flex justify-align-content">
            <div class="p-4">
              <a href="facebook.com">
                <i class="fab fa-facebook"></i>
              </a>
            </div>
            <div class="p-4"> 
              <a href="twitter.com">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
            <div class="p-4">
              <a href="instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card">
        <div class="card-body">
          <img src="images/person4.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="">
          <h3>Paul Moore</h3>
          <h5 class="lead"> Data Scientist  </h5>
          <p>Professionally, I am a Data Science management consultant.</p>
          <div class="d-flex justify-align-content">
            <div class="p-4">
              <a href="facebook.com">
                <i class="fab fa-facebook"></i>
              </a>
            </div>
            <div class="p-4"> 
              <a href="twitter.com">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
            <div class="p-4">
              <a href="instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
</div>
</section>
<script>

</script>
<div class="chec"></div>




<?php if(!isLoggedIn()):?>
<section id="well" class="mt-2 p-4   mysign text-white " >
    <div class="">
        <div class="container mt-5">
            <div class="col-3 ">
                <h2 class="font-weight-bold ">Join Today</h2>
                <a href="login.php"  class="btn btn-info mt-5" >
                    Sign Up Now
                </a>
        </div>
        </div>
    </div>
</section>
<?php endif;?>

</div>
<?php include "includes/footer.php"; ?>
<style>
    .magr{
        z-index: 1000;
    position: absolute;
   margin-top: -422px;
    /* display: block; */
    /* clear: both; */
    }


    .looprightend{
    right: -380px;
}
.looprighten{
    right: -430px;
}
.looprighte{
    right: -170px;
}
.loopright{
    left: 30px;
    top: -30px;
    position: relative;
}
</style>

<script>
     $('.today').click(function(){
        // $(this).addClass("act");
        // $(".week").removeClass("act");
        $('.trendToday').removeClass("d-none");
        $('.trendWeek').addClass("d-none");
        //  $(".trendWeek").removeClass("act");
      });
      $('.week').click(function(){
        // $(this).addClass("act");
        $('.trendWeek').removeClass("d-none");
        $('.trendToday').addClass("d-none");
        //  $(".today").removeClass("act");
      });
function fav(post_id){
    var login = $('.userval').val();
    $.ajax({
        url: "user_fav.php",
        type: "post",
        data: {post_id: post_id, login: login},
        cache: false,
        success: function(response){
            // console.log(response)
            $('.favs').html(response);
        }
    })
};
 $(document).mouseout(function(e){
  if(e.target.class != 'quick'){
      $('.quick').html("");
      $('.quick').removeClass('magr');
  }
});
  if($('.quick').hasClass('magr')){
    // console.log('fdsd');
}else{
    // console.log('dwdw');
}
$(document).ready(function(){
  if($('.quick').is(':empty')){
  $('.quick').removeClass("magr");
  // $('.treu').removeClass("valid-feedback");
  } else{
    $('.quick').addClass("magr");

  }
});
$('.quick').hover((e)=>{
    e.preventDefault();
})
    $('.quick').hover(()=>{
    $('.href').removeAttr('href');
    });

    //  $('.whit').hover(function(e){
    //     var post = $(this).attr('id');
    //     $.ajax({
    //         url: 'quick_watch.php',
    //         data: {post:post},
    //         cache: false,
    //         type:'post',
    //         success:function(response){
    //             $('.orgi').html(response);
    //             $('.quick').addClass('magr');
              
    //             var x = e.pageX;
    //             if(x >= 996){
    //                 $('.quick').addClass('looprightend');
    //             }else{
    //                 $('.quick').removeClass('looprightend');
    //             }
    //             if(x >778 && x < 995 ){
    //                 $('.quick').addClass('looprighten');
    //             }else{
    //                 $('.quick').removeClass('looprighten');
    //             }
    //             if(x >552 && x < 776 ){
    //                 $('.quick').addClass('looprighte');
    //             }else{
    //                 $('.quick').removeClass('looprighte');
    //             }
    //             if(x >330 && x < 551 ){
    //                 $('.quick').addClass('loopright');
    //             }else{
    //                 $('.quick').removeClass('loopright');
    //             }
    //         }
    //     })
    // })

    $('.whit').hover(function(){
        $(this).addClass("bg-white");
    });
 

$('.slider').slick({
      infinite: true,
      slideToShow: 1,
      slideToScroll: 1
    });

</script>

<style>
    .height{
        max-height: 261px;
    }
    .whit {
    text-decoration-color: #1a1a1a !important; 
    text-decoration: none !important;
    white-space: nowrap;
    cursor: pointer;
    box-sizing: border-box;
    text-decoration-line: none !important;

}
.my2{
    /* background-attachment: fixed; */
    text-indent: 20px;
    /* color: #fff; */
}
.my1{
    min-height: 220px;
}
.cursor{
    cursor: none;
}
.rows{
    max-height: 220px;
} 
.cols{
    max-height: 350px;

}
.mysign{
    background-image: url('images/hero_1.jpg');
    background-position: top center;
    background-size: cover;
    min-width: 1200px;
    background-attachment: scroll;
    background-repeat: no-repeat;
    min-height: 500px;
}
.thisScroll{
    overflow-x: auto;
   max-width: 1200px;
    height: auto;
    position: relative;
    overflow-y: hidden;
}
.thisScroll::-webkit-scrollbar {
  width: 10px;
  background-color: rgba(0,0,0,0);
}

.thisScroll::-webkit-scrollbar-thumb {
  background: rgba(255, 15, 38, 0.9);
  border-radius: 5px;
} 
.trendScroll{
    overflow-x: auto;
   max-width: auto;
    height: auto;
    position: relative;
    overflow-y: hidden;
}
.trendScroll::-webkit-scrollbar {
  width: 10px;
  background-color: rgba(0,0,0,0);
}

.trendScroll::-webkit-scrollbar-thumb {
  background: rgba(255, 15, 38, 0.9);
  border-radius: 5px;
} 
.myScroll{
    overflow-x: auto; 
   max-width: auto;
    height: auto;
    position: relative;
    overflow-y: hidden;
}
.myScroll::-webkit-scrollbar {
  width: 10px;
  background-color: rgba(0,0,0,0);
}

.myScroll::-webkit-scrollbar-thumb {
  background: rgba(255, 15, 38, 0.9);
  border-radius: 5px;
} 
.carousel-item {
    height: 450px;
  }
  
  .carousel-image-1 {
    background: url('images/origin.jpg');
    background-size: cover;
    background-position:center;
    min-height: 500px;
  }

  .carousel-image-2 {
    background: url('images/back.jpg');
    background-size: cover;
    min-height: 500px;
    background-position: top ;
  }
  .design{
    margin-top: 100px;
  }
  .carousel-image-3 {
    background: url('images/bg_1.jpg');
    background-size: cover;
    min-height: 500px;
  }
  
  .info-header {
    width: 50%;
    margin: auto;
    border-bottom: 1px #ddd solid; }
  
  #authors img {
    margin-top: -50px; }
  #authors .card:hover {
    background: #3292a6;
    color: #fff; }
  #authors .fab {
    color: #fff; }
  
  @media (max-width: 768px) {
    #showcase {
      min-height: 500px; }
      #showcase h1 {
        font-size: 4rem; }
  
    .mb-resp {
      margin-bottom: 1rem; } }
.blink_me{
    animation: blinker 2s linear infinite;
}
@keyframes blinker{
    50%{
        opacity: 0;
    }
}
.btn-group .btn.btn-danger .active{
      background: green;
    }
    .btn-group .btn.btn-danger{
      background: grey;
    }
   .myBorder{
    border-radius: 9px;
   }
   .bgs{
       background-color: #ffe799; color: #593d00;
   }
   
</style>

<script>
  $(document).ready(()=>{
      $('#trans').removeClass('d-none');
  })
  function redirect(p_id){
    window.location.href = 'movie2.php?p_id='+p_id+'';
  }

  $(".alert").alert();

</script>

