<?php 
// include 'includes/db.php';
include 'includes/header.php';


if(isset($_POST['right'])){
    $post_id = $_POST['right'];
    $post_id++;
}

$select_query = mysqli_query($connection, "SELECT * FROM posts WHERE post_id = $post_id ORDER BY post_id DESC");
confirmQuery($select_query);
$row = mysqli_fetch_array($select_query);
    $post_id = $row['post_id'];
    $title = $row['post_title'];
    $cast = $row['casts'];
    $year = $row['year_date'];
    $genre = $row['genre'];
    $cast_image = $row['cast_images'];
    $trailer = $row['Trailer_id'];
    $subtitle = $row['subtitles'];
    $cover_image = $row['post_image'];
    $pg = $row['PG'];
    $image = $row['images'];
    $year = $row['year_date'];
    $about = $row['post_content'];
    $indie = $row['indie'];
    $fhd = $row['download_link_FHD'];
    $hd = $row['download_link_HD'];
    $sd = $row['download_link_SD'];
    $dots = (strlen($about)>20) ? '...':'';
    $about = str_split($about, 120);
    $about = $about[0].$dots;
echo'    
        <div class="row mt-2">
            <div class="col-lg-4 mt-2">
                <img src="'.$cover_image.'" alt="" class="img-fluid my-2 heg" >
            </div>
            <div class="col-lg-4 mt-2">
                    <h4 class="text-white">About</h4>
                    <p class="lead text-white-50 mb-3">'.$about.' </p>
                    
                    <ul class="nav nav-pills atags points  borders mb-4">
                    <li class="nav-item">
                        <a  class="nav-link text-light acts fhd ">FHD</a>
                    </li>
                    <li class="nav-item  mx-2">
                        <a  class="nav-link text-light hd ">HD</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light sd">SD</a>
                    </li>
                </ul>
                    <button class="btn btn-success btn-block ">
                        <i class="fas fa-download"></i> Download
                    </button>
            </div>
            <div class="col-lg-4 mt-2">
                <h4 class="text-white">Cast</h4>
                <div class="row">
                <div class="col-lg-6 mx-0 ">
                        <img src="images/lee.png" alt="" class="img-fluid rounded-circle w-50">
                        <h5 class="text-light">Lee Min Hoo</h5>
                        <p class="text-muted">Main Cast</p>
                </div>
                <div class="col-lg-6 ">
                    <div class="">
                        <img src="images/lee.png" alt="" class="img-fluid rounded-circle w-50">
                        <h5 class="text-light">Lee Min Hoo</h5>
                        <p class="text-muted">Main Cast</p>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="">
                        <img src="images/lee.png" alt="" class="img-fluid rounded-circle w-50">
                        <h5 class="text-light">Lee Min Hoo</h5>
                        <p class="text-muted">Main Cast</p>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="">
                        <img src="images/lee.png" alt="" class="img-fluid rounded-circle w-50">
                        <h5 class="text-light">Lee Min Hoo</h5>
                        <p class="text-muted">Main Cast</p>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
       
        
        </div>
    ';
include 'includes/footer.php';

?>
<script>
    $('.close').click(()=>{
        $('#quic').addClass('d-none');
    });

</script>
