<?php include "includes/db.php" ?>
<?php 
         $value = $_POST['value'];
        //  $name = explode("", $value);
  
        // $search_query = mysqli_query($connection, "SELECT * FROM posts WHERE post_title LIKE '%$name[0]%' OR '%$name[1]%' ORDER BY post_id DESC LIMIT 6 ");

            $search_query = mysqli_query($connection, "SELECT * FROM posts WHERE post_title LIKE '%$value%' ORDER BY post_id DESC LIMIT 5 ");
            $search_query_count = mysqli_query($connection, "SELECT * FROM posts WHERE post_title LIKE '%$value%' ");
        confirmQuery($search_query);
        $count = mysqli_num_rows($search_query_count);

            if($value !== ""){
                while($row = mysqli_fetch_assoc($search_query)){
          
             $post_id = $row['post_id'];
                $title = $row['post_title'];
            $content = $row['content'];
              $start_date = $row['start_dates'];
              $end_date = $row['end_date'];
              $hour = $row['hour'];
              $image = $row['images'];
              $tags = $row['tags'];
              $max = $row['max_no_of_part'];
              $year = explode('-',$start_date);
              $enroll = $row['enroll'];
              $level = $row['levels'];
              $about = $row['about'];
              $units = $row['unit_id'];
              $venue_id = $row['venue_id'];
              $view = $row['post_views_count'];
                echo "<div class='col-md-6 col-lg-4 d-flex d-row opac whit p-1 m-0'>
                    <img src='images/".$image ."'  alt=''  class='img-fluid rounded-circle  justify-content-start h-75   w-50 h-25 h-md-25  max p-1 mr-2 '> 
                    <div class='ca mt-0 m-0 h-50 '>
                           <a href='movie2.php?p_id=".$post_id."'  class='text-dark'>
                           <div class='card-body p-0 m-0'>
                                <div class='card-title p-0 mb-0 m-0 mt-0'>
                                 <h5 class='m-0 mt-0 p-0 text-light'>".$title." <br class='d-sm-block d-md-none'><span class='badge  ' style='background-color: #ffe799; color: #593d00;'> ".$level."</span></h5>
                                 <p class='m-0 text-light' >Unit: ".$units."</p> 
                                 <p class='text-muted m-0 p-0 d-md-none d-sm-block '>view more </p>
                                </div>
                                    <div class='card-text mt-0 m-0'>
                                    <p class='m-0'></p>
                                    <small class='text-muted m-0'> ".$year[0]."".$row['subtitles'] .". ".$tags ."</small>
                                </div>
                                </a> 
                        </div>
                        </div>
                </div>
                <div class='borders-top mx-2'></div>";
            }   if($count > 5)
                echo "<a href ='search_result.php?search=".$value."' class='btn btn-success btn-block p-2 m-2'>About $count results; Click here to see all </a>";
        }
        
  
       ?>
       
            </div>

<!-- <section id="empty_result" class="p-5">
    <div class="container">
        <div class="col">
            <h4 class="display-4 text-center">No result found</h4>
            <p class="lead">Oops... no result found... try to redefine your search</p>
        </div>
    </div>
</section> -->

<style>
        .whit a{
    text-decoration-color: #1a1a1a !important; 
    text-decoration: none !important;
    cursor: pointer;
    text-decoration-line: none !important;

} 

</style> 
<!-- <script>


</script> -->
 <!-- <div class="body">
// <section id="">
// </section>
//        
 <div class="col-md-4 col-lg-4 mb-1 general"> 
    <div class='col-md-6 col-lg-6 d-flex d-row opac whit p-1'>
                <a href='movie2.php?p_id= '.$post_id.'' class=''>
                    <img src='".$image ."'  alt=''  class='img-fluid rounded-circle  justify-content-start h-50 mb-0 no-gutters max p-1 mr-2 '> </a>
                    <div class='ca mt-0 m-0 h-50 '>
                           <a href='movie2.php?p_id=".$post_id."'  class='text-dark'>
                           <div class='card-body p-0 m-0'>
                                <div class='card-title p-0 mb-0 m-0 mt-0'>
                                 <h5 class='m-0 mt-0 p-0'>".$title." <br class='d-sm-block d-md-none'><span class='badge  ' style='background-color: #ffe799; color: #593d00;'>PG ".$row['PG']."</span></h5>
                                 <p class='m-0' >Casts: ".$row['casts']."</p> 
                                 <p class='text-muted m-0 p-0 d-md-none d-sm-block '>view more </p>
                                </div>
                                    <div class='card-text mt-0 m-0'>
                                    <p class='m-0'></p>
                                    <small class='text-muted m-0'> ".$row['year_date'].". ".$row['subtitles'] .". ".$row['genre'] ."</small>
                                </div>
                                </a> 
                        </div>
                        </div>
                </div>