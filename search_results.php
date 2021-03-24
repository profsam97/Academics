<?php include "includes/header.php"; ?>

<body id="main-nav">
<?php include "includes/navs.php"; ?>
   <?php if(isset($_GET['search'])){
  echo   $value = $_GET['search'];
  $empty = 1;
  $empt = 1;

 }
    else $value = '';
    $empty = '';
    $empt = '';
 ?>

<div class="body">
<section id="" class="d-none d-md-block">
    <div class="container p-5   m-3">
        <h1 class="d-flex">   
        <?php if($empty == ''):?>
 <div class="count"></div>
 <?php endif ;?>
 <?php if($empt == ''): ?>
    <div class="counts"></div>
  <?php endif ;?>
&nbsp;result(s)
 for "
 <?php if($empty == ''):?>
    <div class="value"></div>
    <?php endif ;?>
 <?php if($empt == ''): ?>
    <?php   echo   $value ;;
 ?>
 <?php endif ;?>
 "</h1>
    

    </div>
</section>

<section class="right clear-fix mt-5">
<div class="mb-5 ">
<h5 class="text-muted mr-5 d-flex d-row">
   &nbsp; 
<?php if($empty == ''):?>
 <div class="count"></div>
 <?php endif ;?>
 <?php if($empt == ''): ?>
   <div class="counts"></div>
  <?php endif ;?>
 &nbsp; result(s)
</h5>
</div>
</section>
<section id="main">
    <div class="container d-flex d-row mx-0">
        <div class="col-lg-3 d-none d-lg-block p-3" id ='type_class'>
     
       
        </div>
        <div class="col-md-12 col-lg-12 mb-4 general" id="general">
    
    </div>
    <div class="col-md-12 col-lg-12 mb-4 genera d-none" id="genera">
    
    </div>
    <div class="col-md-12 col-lg-12 mb-4 gener d-none" id="gener">
    
    </div>
    <!-- <div class="col-md-12 col-lg-12 mb-4 genera">
    
    </div> -->
    
</section>

<section id="empty_result" class="p-5">
  
</section>
<?php include "includes/footer.php"; ?>
<?php include "includes/style.php" ;?>

<style>
        .whit a{
    text-decoration-color: #1a1a1a !important; 
    text-decoration: none !important;
    cursor: pointer;
    text-decoration-line: none !important;

}
.sifi{
  margin-left: 600px;

}
</style>
<script>
function showfun() { 
  
  var genera = document.getElementById('genera');
  var general = document.getElementById('general');
  var gener = document.getElementById('gener');
  genera.classList.toggle('d-none');
  general.classList.toggle('d-none');
  gener.classList.toggle('d-none');

};
function showfu() { 
  
  var genera = document.getElementById('genera');
  var general = document.getElementById('general');
  var gener = document.getElementById('gener');
  if (genera.classList.contains('d-none')) {
    genera.classList.add('d-none');
}else{
  genera.classList.remove('d-none');

}

  general.classList.toggle('d-none');
  gener.classList.toggle('d-none');

};
        var value = '<?php echo $value;?>';
    if(value == ''){
        getMovies();
    }else{
        var values = '<?php echo $value;?>';
        getMoviess(values);
        console.log(values);
    }
$('#movies').click(() =>{
  $('.genera').removeClass('d-none');
  alert('fwfw');
  var checkbox = $(this).attr('checked');
    $('.action').toggleClass('d-none');
    $('.general').toggleClass('d-none');
    if(checkbox === true){
      $('#romance').attr('checked',false);
    }else{
      $('#romance').removeAttr('checked');
    }
});
$('#adventure').click(() =>{
    $('.adventure').toggleClass('d-none');
    $('.general').toggleClass('d-none');
});
$('#thriller').click(() =>{
    $('.thriller').toggleClass('d-none');
    $('.general').toggleClass('d-none');
});
$('#romance').click(() =>{
  var checkbox = $(this).attr('checked');
    $('.romance').toggleClass('d-none');
    $('.general').toggleClass('d-none');
    if(checkbox === true){
      $('#action').attr('checked',false);
    }else{
      $('#action').removeAttr('checked');
    }
});
$('#scifi').click(() =>{
    $('.scifi').toggleClass('d-none');
    $('.general').toggleClass('d-none'); 
});$('#comedy').click(() =>{
    $('.comedy').toggleClass('d-none');
    $('.general').toggleClass('d-none');
});$('#historical').click(() =>{
    $('.historical').toggleClass('d-none');
    $('.general').toggleClass('d-none');
});$('#high').click(() =>{
    $('.high').toggleClass('d-none');
    $('.general').toggleClass('d-none');
});
$(".alert").alert();

</script>