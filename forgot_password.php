<?php include "includes/header.php"; ?>
<body id="main-nav">
  <?php include "includes/navs.php"; ?>
<?php if(isLoggedIn())
redirect('index.php');

?>
<section id="" class="m-5 " >
        <div class="container m-5">
            <div class="row mt-5">
                <div class="col-lg-6 mx-auto p-5 mt-5">
                    <h4 class="lead ">Forgot Password?</h4>
                    <form class="form-inline mx-2 form" method="post" onsubmit="submit()">
                        <div class="form-group  clearfix">
                            <input type="email" name="email" required id="" class="form-control my-2" placeholder="Enter Your Email" aria-describedby="helpId">
                            <button class="btn btn-light mx-2 click" onsubmit="submit()" >Send</button>
                        </div> 
                    </form>
                <small class="form-text text-muted">We'd send you a link to reset it</small>
                </div>
            </div>
        </div>
</section>
<div class="div row mx-auto px-4">
<div class="progress  bg-dark " data-value='80'>
          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
          </span>
          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
          </span>
          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
            <div class="h4 text-light">80<sup class="small">%</sup></div>
          </div>    
        </div>
        <div class="col">
        <h4>User</h4>
          <h4>Score</h4>
        </div>

          </div>
<div class="email text-center col-md-12 mx-auto"></div>

<?php include "includes/footer.php" ;?>
<?php include "includes/style.php" ;?>

<script>
  $(function() {

$(".progress").each(function() {

  var value = $(this).attr('data-value');
  var left = $(this).find('.progress-left .progress-bar');
  var right = $(this).find('.progress-right .progress-bar');

  if (value > 0) {
    if (value <= 50) {
      right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
    } else {
      right.css('transform', 'rotate(180deg)')
      left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
    }
  }

})

function percentageToDegrees(percentage) {

  return percentage / 100 * 360

}

});

  $().button('toggle')	
  $('.yes').click(()=>{
    $('.me').removeClass('d-none');
    $('.here').addClass('d-none')
  })
  $('.true').click(()=>{
    $('.me').addClass('d-none');
    $('.here').removeClass('d-none')
  })
  $('.click').click((event)=>{
    event.preventDefault();
    var form =$('.form').serialize();
    $.ajax({
        url: "confirm_email.php",
        type: "POST",
        data: form,
        cache: false,
        success: function(response){
            $('.email').html(response);
            textarea.value = "";
        }
    })
  })
  $('#accordianId').on('shown.bs.collapse', function (e) {

var panelHeadingHeight = $('.panel-heading').height();
var animationSpeed = 500; // animation speed in milliseconds
var currentScrollbarPosition = $(document).scrollTop();
var topOfPanelContent = $(e.target).offset().top;

if ( currentScrollbarPosition >  topOfPanelContent - panelHeadingHeight) {
    $("html, body").animate({ scrollTop: topOfPanelContent - panelHeadingHeight }, animationSpeed);
}});
$('.toast').toast('show')
// var count = 6;
// var interval = setInterval(()=>{
//   count--;
//   $('count').text(count);
//   if(count == 1){
//     // alert(count)
//     clearInterval(interval)
//     window.location.href = 'index.php';
//   }
//   console.log(count)
//   $('.count').text('redirecting in' + ' ' + count + ' ' + 'seconds')
// },1000);
$(document).on('click', '[data-toggle="lightbox"]', function (event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });
</script>
<style>
  .progress {
  width: 90px;
  height: 90px;
  background: none;
  position: relative;
}

.progress::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 6px solid #eee;
  position: absolute;
  top: 0;
  left: 0;
}

.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}

.progress .progress-left {
  left: 0;
}

.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 6px;
  border-style: solid;
  position: absolute;
  top: 0;
}

.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}

.progress .progress-right {
  right: 0;
}

.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
}

.progress .progress-value {
  position: absolute;
  top: 0;
  left: 0;
}
    .btn-group .btn.btn-danger .active{
      background: green;
    }
    .btn-group .btn.btn-danger{
      background: grey;
    }
   

  .email{
    position: absolute;
    top: 100px;
      }
      .width{
        width: 4px !important;
      }
     
</style>