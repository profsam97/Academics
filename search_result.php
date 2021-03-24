<?php include "includes/header.php"; ?>

<body id="main-nav">
<?php include "includes/navs.php"; ?>
<?php 
         $var = $_GET['search'];
        $search_query = mysqli_query($connection, "SELECT * FROM posts WHERE post_title LIKE '%$var%' ORDER BY post_id DESC ");
        confirmQuery($search_query);
        $count = mysqli_num_rows($search_query);
 
?>
<div class="body">
<section id="">
         <?php if($count != 0): ?>
    <div class="container p-5   m-3">
        <h1><?php echo $count; ?> Results for "<?php echo $var; ?>"</h1>
        <div class="d-flex d-row font-weight-bold my-2">
    </div>

    </div>
</section>

<section class="right clear-fix ">
<div class="mb-5 ">
<h5 class="text-muted mr-5">
    <?php  echo $count;?> result(s)
</h5>
</div>
</section>
<section id="main">
    <div class="container d-flex d-row mx-0">
        
        <div class="col-md-12 col-lg-12 mb-4 general">
            <?php
              while($row = mysqli_fetch_assoc($search_query)){

                  $post_id = mysqli_real_escape_string($connection,$row['post_id']);
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
       ?>
   <div class="col-md-12 col-lg-11 d-flex d-row p-3 opac whit" onclick="redirect(<?php echo $post_id; ?>)">
  <img src="images/<?php echo $image ?>" alt=""  class="img-fluid justify-content-start h-50 mb-0 no-gutters max p-1 mr-2">
            <div class="ca mt-0 m-0 h-50" >
                    <div class="card-body p-0 m-0">
                        <div class="card-title p-0 mb-0 m-0 mt-0">
                         <h5 class="m-0 mt-0 p-0"><?php echo $row['post_title'] ?> <br class="d-sm-block d-md-none"><span class="badge  " style="background-color: #ffe799; color: #593d00;"> <?php echo $row['level']; ?></span></h5>
                         <p class="lead  m-0 p-0 d-none d-md-block"><?php echo $row['content'] ?></p>   
                         <p class="m-0" >tags: <?php echo $row['tags'] ?></p> 
                         <p class="text-muted m-0 p-0 d-md-none d-sm-block ">view more </p>
                        </div>
                            <div class="card-text mt-0 m-0">
                            <p class="m-0"></p>
     <small class="text-muted m-0"> <?php echo $year[0] ?> <?php echo $row['hour'] . 'hour(s)' ?></small>
                        </div>
                      
                </div>
                </div>
        </div>
        <div class="borders-top mx-4"></div>
<?php
              }
        
        ?>
    </div>
   

   

   
  
    </div>
</section>
<?php  endif?>
            <?php if($count == 0): ?>
<section id="empty_result" class="p-5">
    <div class="container">
        <div class="col">
            <h4 class="display-4 text-center">No result found</h4>
            <p class="lead">Oops... no result found... try to redefine your search</p>
        </div>
    </div>
</section>
         <?php endif; ?>
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
function redirect(post_id){
  window.location.href = 'movie2.php?p_id='+post_id+''
}
$(".alert").alert();

</script>