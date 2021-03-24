<?php include "includes/header.php";?>
<body id="main-nav" class="respect">
<?php include "includes/nav.php";?>
<?php

if(isset($_GET['p_id'])){
    $p_id = $_GET['p_id'];
    $user_names = get_user_name();
    $check_status = "SELECT * FROM enrolled WHERE post_id = $p_id AND user_name = '{$user_names}' ";
    $check_query = mysqli_query($connection, $check_status);
    $row = mysqli_fetch_array($check_query);
    confirmQuery($check_query);
    $val = $row['enrolled'];
   $edit_query = mysqli_query($connection, "SELECT * FROM posts WHERE post_id = '$p_id' ");
   confirmQuery($edit_query);
   $row = mysqli_fetch_array($edit_query);
   $post_id = $row['post_id'];
   $title = $row['post_title'];
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
    if($enroll >= $max){
        $tru = true;
    }else{
        $tru = false;
    }
   $insert_query = mysqli_query($connection, "UPDATE posts SET post_views_count = $view + 1 WHERE post_id = $p_id ");
   confirmQuery($insert_query);
 }

//  $username = get_user_name();
//  $check_watch_later = mysqli_query($connection, "SELECT * FROM watch_later WHERE post_id = $post_id AND user_name = '$username' ");
//  confirmQuery($check_watch_later);
//  if(mysqli_num_rows($check_watch_later) >= 1 ){
//      $count = true;
//  }
//  else{
//      $count = false;
//  }

?>
<!--   
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed p-0 h-0">
    <div class="container mx-9 p-1 ">
    <a class="navbar-brand d-md-ml-6 font-weight-bold  text-danger" href="#" >Movilla</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavId">
        <ul class="navbar-nav  font p-1 text-light ">
            <li class="nav-item active mx-2 justify-content-center ">
                <a class="nav-link  display-inline" href="#">
                    <i class="fas fa-home text-danger  "></i>
                Home  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  mx-2 ">
                <a class="nav-link" href="#">
                    <i class="fa fa-list-alt"></i>
                    Genre</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">
                    <i class="fas fa-film"></i>
                    Movies</a>
            </li>
            <li class="nav-item  mx-2 ">
                <a class="nav-link" href="#">
                    <i class="fa fa-file-video"></i>
                    Series</a>
            </li>
        </ul>
            <form class="form-inline mr-auto   my-lg-0 with  ">
                <img src="iconfinder_icon-111-search_314807.png" class="ma mr-4"  alt="">
                <input class="form-control my  text-white w-100 mr-sm-2" 
                    
                type="text" placeholder="Search ...">
            </form>
            <br>
            <ul class="navbar-nav ">
                <button class="btn btn-outline-info look mx-1 ">Login</button>
                <div class="mx-2 my-2 d-lg-none" ></div>
                <button class="btn btn-outline-danger">Sign Up</button>
                <li class="nav-item d-none">
                    <a href="" class="nav-link  d-lg-block">
                     <i class="fa fa-bell   bg-white h-75"></i>       Notifications
                    </a>
                </li>
            </ul>

    </div>
    </div>      
</nav> -->
<?php 
         $current_date = date("Ymd");
         $start_dat = $year[0].$year[1].$year[2];
         $end_dat = $year1[0].$year1[1].$year1[2];
         if($current_date >= $start_dat && $current_date <= $end_dat){
            $status = 'Active';
        } elseif($current_date <= $start_dat && $current_date <= $end_dat){
            $status = 'Not Started'; 
                 }
         elseif($current_date > $end_dat) {
            $status = 'Ended'; 
                         }else{
          $status = ''; 
                         }

    //      $todayObj = date('Y-m-d', strtotime($current_date));
    //   echo   $start_dat = date('Y-m-d', strtotime("$year[0] / $year[1] / $year[2]"));
    //     echo $end_dat = date('Y-m-d', strtotime("$year1[0] / $year1[1] / $year1[2]"));
    //     //  $end_dat = strtotime("$year1[2] - $year1[1] - $year1[0]");
    //      if($current_date >= $start_dat && $current_date < $end_dat){
    //          echo 'yes';
    //      }
    //    elseif($current_date < $start_dat){
    //        echo 'no'; 
    //      }elseif($current_date > $end_dat) {
    //          echo 'das';
    //      }

         ?>
<?php $user = get_user_name() ?>
<div id="tras">
    <section id="main">
</section>
    <div class="d-md-block d-lg-none  mb-0" style="background-color: #1a1a1a;">
        <img src="images/<?php echo $image; ?>" alt="" class="img-fluid h-25 w-100 iam">
    </div>
<section id="cover" class="d-lg-flex   d-lg-row bg-dark">
        <div class="col-lg-2" ></div>
    <div class="col-lg-6 d-none d-lg-block wids w-100">
        <img src="images/<?php echo $image; ?>" alt="" class="img-fluid wid mb-0  h-100 ml-3 w-100" style="border: 0px">
    </div>
</section>
<div class="container m-lg-3 d-none d-lg-block  w-100 p-3 col-lg-4 pos1  col-md-12 ">
    <div class="car mt-0   "style="color:white">
        <div class="card-body p-4">
            <h4 class="card-title"> <?php echo $title;?></h4>
            <p class="card-text"> 
                 <span class="badge p-1 m-0 " style="background-color: #000; color: #fff; border: 1px solid white;">  <?php echo $year[0] ?>  </span> &nbsp;<span class="badge p-1 " style="background-color: #ffe799; color: #593d00; border: 1px solid white;">  <?php echo $level;?></span>
            </p>
            <div class="" style="color:rgba(255, 255, 255, 0.7)">
            <div class="d-flex d-row my-auto" >
            <p class="text-muted">tags</p> &nbsp;  <?php echo $tags;?>
        </div>     
        </div>
    </div>
        </div>
    </div>
    <div class="yike"></div>
<div class="cont"></div>
    <div class="watch"></div>
    <div class="container d-lg-none d-sm-block w-100 size no-gutters p-2 col-md-12 col-sm-12 col-xs-12" style="background-color: #1a1a1a;">
        <div class="car p-2 mt-0  "style="color:white">
            <div class="card-body p-3">
                <h3 class="card-title d-md-text-center"><?php echo $title;?></h3>
                <p class="card-text">
                <span class="badge p-1 m-0 " style="background-color: #000; color: #fff; border: 1px solid white;">  <?php echo $year[0] ?>  </span> &nbsp;<span class="badge p-1 " style="background-color: #ffe799; color: #593d00; border: 1px solid white;">  <?php echo $level;?></span>
                </p>
                <div class="" style="color:rgba(255, 255, 255, 0.7)">
                <div class="d-flex d-row" >
                <h4 class="text-muted">Status</h4> &nbsp; 
                <?php if($status == 'Ended'): ?> 
          </span> &nbsp;<span class="badge  bg-danger">  <?php echo $status;?></span>
         <?php elseif($status == 'Not Started'): ?>
          </span> &nbsp; <br><span class="badge " style=' background-color: #ffe799; color: #593d00;'>  <?php echo $status;?></span>
         <?php elseif($status == 'Active'):?>
         </span> &nbsp; <br>  <span class="badge bg-success  py-2">  <?php echo $status;?></span>
         <?php  endif;?>
            </div>
            <div class="d-flex d-row">
                <p class="text-muted">Currently Enrolled:</p> &nbsp; <?php echo $enroll;?>
            </div>
            <div class="d-flex d-row">
                <p class="text-muted">Date</p> &nbsp;
                <?php ;
                  $months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
                  $month = $months[$year[1] -1];
                  $month1 =  $months[$year1[1] -1];
echo $month  . ' '.   $year[2] . ', ' . $year[0]  . ' - ' . $month1  . ' '.   $year1[2] . ', ' . $year1[0]  ;
                ?>
            </div>
            <div class="d-sm-flex d-row mb-2">
            <?php if(isLoggedIn() && $val == 'yes'):  ?>
            <button class="btn btn-primary  btn-block " disabled >Already Enroll</button>
            <?php elseif($tru): ?>
    <button class="btn btn-primary  btn-block enroll" disabled >This Class is Full</button>
    <?php elseif($status == 'ended'): ?>
    <button class="btn btn-primary  btn-block enroll" disabled>This class has Ended</button>
    <?php elseif(isLoggedIn()): ?>
    <button class="btn btn-primary  btn-block enroll" onclick="disabled()">Enroll</button>

<?php  else: ?>
    
    <button class="btn btn-primary  btn-block " onclick="redirect()">Enroll</button>
    <?php  endif; ?>            </div>
        
            
            </div>
        </div>
            </div>
        </div>

  <section id="sticky" class="sticky-top text-center bg-dark p-2 text-light  showme">
      <div class="">
          <h4 class=""><?php echo $title;?> 9.3(333)
        </h4>
      </div>
  </section>
<section id="info" class="bg-light mt-0 p-4 ">
    <div class="row my-4">
        <div class="col-lg-8 mx-auto order-sm-2 order-lg-1">
            <h4 class="">Summary</h4>
            <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem totam modi necessitatibus, minima adipisci quibusdam saepe alias quisquam suscipit nisi et nam ad eligendi fugiat officia non eveniet nemo ex nostrum nulla vel sequi omnis? A rerum facere eveniet modi sed itaque sequi neque, iure recusandae, labore fuga dolores, iusto similique enim consectetur provident impedit obcaecati! Consequatur illum odit facere mollitia distinctio ex molestias, fuga doloribus itaque, maiores ipsa neque id necessitatibus quo repudiandae nostrum atque ut quisquam. Necessitatibus, consequatur. Vero quasi assumenda delectus minima iste dolor facilis asperiores. A doloribus harum tempora dicta ipsum at consequuntur tempore accusantium fuga.
            </p>
        </div>
        <div class="col-lg-4 d-none d-md-block offset-lg-8 text-light my-3 col-sm-12 col-md-12 order-sm-1 order-lg-2 pos1">
            <h4 class="">About</h4>
         <p class="lead">
           <?php echo $about; ?>
         </p>
         <div class="d-flex d-row">
               <div class="col-md-6">
         <h6 class="ml-auto">Hours :  <p class="text-muted"><?php echo $hour; ?></p></h6>
         </div>
     <?php if($status == 'Ended'): ?> 
         <div class="col-md-6">
         <h6 class="">Status :  </span> &nbsp;<span class="badge p-1 bg-danger">  <?php echo $status;?></span></h6>
         </div>
         <?php elseif($status == 'Not Started'): ?>
            <div class="col-md-6">
         <h6 class="">Status :  </span> &nbsp; <br><span class="badge p-1 " style=' background-color: #ffe799; color: #593d00;'>  <?php echo $status;?></span></h6>
            </div>
         <?php elseif($status == 'Active'):?>
            <div class="col-md-6">
        <h6 class="">Status :  </span> &nbsp; <br>  <span class="badge p-1 bg-success" style=" border: 1px solid white;">  <?php echo $status;?></span></h6>
         </div>
         <?php  endif;?>
         </div>
         <div class="d-flex d-row">
             <div class="col-md-6">
         <h6 class="">Currently Enrolled: <p class="text-muted"><?php echo $enroll; ?></p></h6>
         </div>
         <div class="col-md-6">
         <h6 class="ml-auto">Max no of Participarts :  <p class="text-muted"><?php echo $max; ?></p></h6>
         </div>
         </div>
         <div class="col-md-12">
         <h6 class="">Duration :  <p class="text-muted">
<?php    $months = ["January","February", "March", "April", "May", "June", "July", "August", "Sept","Oct","Nov", "Dec"];
                  $month = $months[$year[1] -1];
                  $month1 =  $months[$year1[1] -1];
echo $month  . ' '.   $year[2] . ', ' . $year[0]  . ' - ' . $month1  . ' '.   $year1[2] . ', ' . $year1[0]  ; ?></p></h6>
         </div>
      
         <div class="container fixed mt-5 pt-5 stay">
<?php if(isLoggedIn() && $val == 'yes'):  ?>
            <button class="btn btn-primary  btn-block " disabled >Already Enroll</button>
            <?php elseif($tru): ?>
<button class="btn btn-primary  btn-block enroll" disabled >This Class is Full</button>
<?php elseif($status == 'Ended'): ?>
    <button class="btn btn-primary  btn-block enroll" disabled>This class has Ended</button>
<?php elseif(isLoggedIn()):  ?>
<button class="btn btn-primary  btn-block enroll" onclick="disabled()">Enroll</button>
<?php  else: ?>
    <button class="btn btn-primary  btn-block " onclick="redirect()">Enroll</button>
    <?php  endif; ?>
</div>
    </div>
</div>
</section>


</div>  
    <!-- <div class="res"></div>
    <div class="yes"></div> -->
    
    <section id="comm" class="bg-light my-3 ">
        <div class="container">
        <?php if(isLoggedIn()): ?>
            <!-- <h5 class="h3">Login or Register to Comment</h5> -->
           <form action="" class="form-group  w-75" id="forms">
               <textarea name="message" onkeyup="keyup(value)" class="form-control" id="text_area"  placeholder="Comment as <?Php echo get_user_name(); ?> "></textarea>
               <input type="text" class="d-none" name="profile" value="<?Php echo profilePic(); ?>">
               <input type="text" class="d-none" id="user_name" name="username" value="<?Php echo get_user_name(); ?>">
               <input type="text" class="d-none" name="post_id" id="post_id" value="<?php echo $p_id ?>">
               <button type="submit" class="btn btn-primary btn-block my-2 sub"  onclick="processComment()">Comment</button>
           </form>
           <?php else: ?>
                <div class="col-lg-6 mx-auto m-4 p-2">
                <h2 class="whit text-center">You have to login to comment</h2>
                <p class="whit text-center"><a href="login.php">Click here to login or register</a></p>
                </div>
    <?php endif?>
    
<div class="d-flex d-row m-5 " >
            <div class=" col-md-6 col-sm-12 rew">
            
            </div>
            <div class="container col-md-6 d-none d-md-block review">      
                
            </div>
            </div>
  
    </div>
    </section>


  
<!-- <footer id="main-footer" class="px-5 m-2 mt-5">
    <div class="well bg-white main-footer fixed-bottom">
        <div class="container">
            <div class="col">
                <div class="row">
    <a class="navbar-brand d-md-ml-6 mr-auto font-weight-bold  text-danger" href="#" >Movilla</a>
                    <div class="ml-auto text-muted mt-2">
                        &copy; 2020 Movilla 
                    </div>
                </div>
            </div>
        </div>
</footer> -->

    <?php include "includes/footer.php" ?>
    <?php include "includes/style.php" ;?>

<!-- <script src="slick/slick.js"></script> -->
</body>
</html>
<style>

</style>

<?php
if(isLoggedIn()){
    $loggenIn = get_user_name();
    $islog =  1;
}
else{
    $loggenIn = 0;
    $islog =  0;
}

?>


<style>
.whits a{
    text-decoration-color: #1a1a1a !important; 
    text-decoration: none !important;
    cursor: pointer;
    text-decoration-line: none !important;
}
.max{
    max-height: 360px;
    max-width: 300px;
}
.opacs{
    cursor: pointer;
}
.opacs:hover{
    transition: opacity linear 100ms;
    opacity: .8;
}
.watch{
    bottom: 500px;
    z-index: 1000;
    position: absolute;
}
.simiScroll{
    overflow-x: auto;
    max-width: auto;
    height:     auto;
    position: relative;
    overflow-y: hidden;
}
.simiScroll::-webkit-scrollbar {
  width: 10px;
  background-color: rgba(0,0,0,0);
}

.simiScroll::-webkit-scrollbar-thumb {
  background: rgba(255, 15, 38, 0.9);
  border-radius: 5px;
} 

.imgScroll{
    overflow-x: auto;
    max-width: auto;
    height:     auto;
    position: relative;
    overflow-y: hidden;
}
.imgScroll::-webkit-scrollbar {
  width: 10px;
  background-color: rgba(0,0,0,0);
}

.imgScroll::-webkit-scrollbar-thumb {
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
.roundeds{
    max-width: 30px;
}
/* .hello{
    max-height: 400px;
    background-position: top;
    background-size: contain;
    background-attachment: fixed;
    top: 200px;
} */
.favour{
    bottom: 500px;
    z-index: 1000;
    position: absolute;

}

.lightBoxyes{
    height: 52px;
    position: absolute;
    width: 50px;
    cursor: pointer;
    left: -5px;
    top: 200px !important;
    border-radius: 25px;
    padding: 9px;
    color: #f8f9fa;
    background-color: #da2345;
}

.lightBoxno{
    height: 52px;
    position: absolute;
    width: 50px;
    cursor: pointer;
    right: -5px;
    top: 200px !important;
    border-radius: 25px;
    padding: 9px;
    color: #f8f9fa;
    background-color: #da2345;
    
}
.myBorder{
    border-radius: 9px;
   }
   .pos1{
    position: absolute;
    top: 50px;
    mix-blend-mode: lighten;
}
.stay{
    margin-top: 50px;
    /* position: absolute; */
}
</style>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script> -->

<script>


// $("#videoModals").on('show.bs.modal', function (e) { // on closing the modal
//   // stop the video
//   $("#videoModals iframe").Attr("src");
// });

function favFunction(){

$.ajax({
url: "user_favs.php",
type: "post",
data: {post_id: p_id, login: login},
cache: false,
success: function(response){
    // console.log(response)
    $('.favour').html(response);
    let output = `
    <i class="fas favsheart d-none text-danger  fa-heart"></i>&nbsp; Added To Favourites
    ` 
    // $('.watch_later').prop("disabled", true);
    if($('.comms').hasClass('add')){
        $('.favourites_false').html(output);
        $('.favourites_false').attr('disabled', true);
        // $('.favheart').addClass('d-none');
        $('.favsheart').removeClass('d-none');
    };
}
})
}
$('.enroll').click(()=>{
        $('.enroll').attr('disabled', 'disabled')
        event.preventDefault(); 
        var name = document.getElementById('user_name').value;
        var post_id = document.getElementById('post_id').value;
      
       $.ajax({
        url: "enroll.php",
        type: "POST",
        data: {name: name,  post_id : post_id},
        cache: false,
        success: function(response){
            $('.yike').html(response);
            // console.log(response);
            textarea.value = "";
        }
    })
})  
function redirect(){
    window.location.href = 'login.php';
}
$(document).ready(function(){
    setInterval(() => {
        var post_id = document.getElementById('post_id').value;
          $.ajax({
        url: "load_comment.php",
        type: "post",
        data:  {post : post_id},
        cache: false,
        success: function(response){                
            $('.rew').html(response);
        }
          }) 
    }, 300);
})
  

  var request;

// Bind to the submit event of our form
function keyup(value){
       var message =  value;
       return message;
    }
    function   processComment(){
       event.preventDefault(); 
       var comment = document.getElementById('text_area').value;
        var name = document.getElementById('user_name').value;
        var post_id = document.getElementById('post_id').value;
        if(comment == ''){
            this.attr('disabled');
        }
       $.ajax({
        url: "comments.php",
        type: "POST",
        data: {name: name, comment: comment, post_id : post_id},
        cache: false,
        success: function(response){
            $('.cont').html(response);
            // console.log(response);
            textarea.value = "";
        }
    })
    }
$("#form").submit(function(event){
    alert('dwd');
    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();
    var post_id = sessionStorage.getItem('p_id');
    // Abort any pending request
    if (request) {
        request.abort();
    }
 document.getElementById('post_id').value = post_id;
    // setup some local variables
    var $form = $(this);
    var textarea = $('#text');
    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();
    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "comments.php",
        type: "post",
        data:  serializedData,
        cache: false
    });

    // Callback handler that will be called on success
    request.done(function (response,textStatus, jqXHR){
        // Log a message to the console
        $('.res').html(response);
        // console.log(response);
    });
    $.ajax({
        url: "update_comment.php",
        type: "POST",
        data: {name: 'name', post_id : post_id},
        cache: false,
        success: function(response){
            $('.cont').html(response);
            // console.log(response);
            textarea.value = "";
        }
    })
    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});

$('.alert').alert();
    // if($(text).is(':empty')){
    //     console.log("hdw");
    //     $('.sub').prop("disabled", true)
    // } else{
    //     $('.sub').prop("disabled", false)
    // }
    // $(document).ready(function(){
$('#text').keyup(() =>{
$('.sub').prop("disabled", false);
// $('.treu').removeClass("valid-feedback");
});

// $(document).ready(function(){
//     setInterval(function()
//     {
//         $.ajax({
//             type:"GET",
//             // data: {"data": "data"},
//             url: "update_comment.php",
//             function(response){
//                 $('.yes').html(response);
//             }
//         });
//     }),5000
// });

$('.cons').fadeIn(1000);
if($('.comm').hasClass('.add')){
    // console.log('ture');
    $('.watch_later').prop("disabled", true);
}
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


</script>