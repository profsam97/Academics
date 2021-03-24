<?php include "includes/header.php";?>

<body id="main-nav">
<?php include "includes/nav.php";?>
<?php 

  if(isset($_POST['submit'])){
    $title = escape($_POST['title']);
    $start_date = escape($_POST['start_date']);
    $end_date = escape($_POST['end_date']);
    $max = $_POST['max_part'];
    $hour = $_POST['hour'];
    $tags = $_POST['tags'];
    $about = mysqli_real_escape_string($connection, $_POST['about'] ) ;
    $content = escape($_POST['content']);
    $venue = mysqli_real_escape_string($connection, $_POST['venue'] );
    $select_querys = "SELECT * FROM categories WHERE cat_title = '{$venue}' ";
  $conns = mysqli_query($connection, $select_querys);
  $row = mysqli_fetch_array($conns);
  confirmQuery($conns);
  $cat_id = $row['cat_id'];
  $unit = mysqli_real_escape_string($connection, $_POST['unit'] );
 $select_querys1 = "SELECT * FROM unit WHERE unit_title = '{$unit}' ";
  $conns1 = mysqli_query($connection, $select_querys1);
  $row1 = mysqli_fetch_array($conns1);
confirmQuery($conns1);
 $unit_id = $row1['unit_id'];
    $date = date("Y-m-d");
$uploads_dir = '/images';
     $level = $_POST['level'];
 

       $tmp_name = $_FILES["my_file"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["my_file"]["name"]);
        move_uploaded_file($tmp_name, "../images/$name");
    $query = "INSERT INTO posts(post_title,venue_id,unit_id,start_dates,end_date,max_no_of_part,about,images, content,hour, tags, levels) ";
             
    $query .= "VALUES('{$title}', '{$cat_id}','{$unit_id}','{$start_date}','{$end_date}','{$max}', '{$about}','{$name}','{$content}','{$hour}', '{$tags}', '{$level}' ) "; 
       
    $create_post_query = mysqli_query($connection, $query);  
        
    confirmQuery($create_post_query);

    $the_post_id = mysqli_insert_id($connection);
    $no_error = true;

  }
  else{
    $no_error = false;
  }
?>
<div class="col-md-10">
    <h4 class="display-4">Welcome, Prof</h4>
        <hr>
<div class="container">
    <!--##################START HERE#####################-->
    <?php  if($no_error):?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>
  Class Created. <a href='../post.php?p_id={$the_post_id}'>View Class </a> or <a href='posts.php'>Edit More Class</a>
    </strong> 
  </div>
  <?php endif ?>
  
  <script>
    $(".alert").alert();
  </script>
    <!-- FORM -->
    <form action="add_post.php" method="post" enctype="multipart/form-data">
        <!-- TEXT FIELD GROUPS -->
        <div class="form-group">
            <input class="form-control" name="title" type="text" id="name" placeholder="Enter Title">
        </div>      
        <div class='form-group '>  
            <input class="form-control" type="number" name="hour" id="no_of_hours" placeholder="no_of_hours">
          </div>
          <div class="form-inline">

        <div class="form-group">
       <?php 
$select_query = "SELECT * FROM categories";
$conn = mysqli_query($connection, $select_query);
        
       ?>
       <select name="venue" class="custom-select" id="">

         <option >Select Venue</option>
         
           <?php 
         while ($row = mysqli_fetch_assoc($conn)){
?>
        <option value="<?php echo $row['cat_title'] ?>"><?php echo $row['cat_title'] ?></option>

       <?php } ?>
       </select>
       
      </div>
      <div class="form-group mx-2 ">
       <?php 
$select_query = "SELECT * FROM unit";
$conn = mysqli_query($connection, $select_query);
        
       ?>
       <select name="unit" class="custom-select" id="">

         <option >Select Unit</option>
         
           <?php 
         while ($row = mysqli_fetch_assoc($conn)){
?>
        <option value="<?php echo $row['unit_title'] ?>"><?php echo $row['unit_title'] ?></option>

       <?php } ?>
       </select>
       
      </div>
      </div>
      <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile" name="my_file">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
<div class="form-check form-check-inline"> Level 
  <input class="form-check-input ml-3" type="radio" checked name="level" id="inlineRadio1" value="easy">
  <label class="form-check-label" for="inlineRadio1">Easy</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="level" id="inlineRadio2" value="Intermediate">
  <label class="form-check-label" for="inlineRadio2">Intermediate</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="level" id="inlineRadio3" value="hard" >
  <label class="form-check-label" for="inlineRadio3">Hard</label>
</div>

        <div class="form-inline">
          <div class='form-group'>
          <p class="lead mx-1  my-2">Start Date</p>
            <input class="form-control" type="date" name="start_date" id="start_date" placeholder="Start Date">
          </div>
          <div class='form-group ml-5'>
        <p class="lead px-2 mx-1 my-2">  End Date</p>
            <input class="form-control" type="date" name="end_date" id="end_date" placeholder="End Date">
          </div>
          <div class='form-group ml-auto'>  
            <input class="form-control" type="number" name="max_part" id="max_part" placeholder="Max no of Participants">
          </div>
        </div>

  
        <!-- SELECT -->
       
        <!-- TEXTAREA -->
        <div class="form-group">
          <label for="">Tags</label>
          <input type="text" name="tags" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Javascript, web designing e.t.c</small>
        </div>
        <div class="form-group">
            <label for="message">About</label>
            <textarea class="form-control" name="about" id="message" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="message">Content</label>
            <textarea class="form-control" name="content" id="message" rows="2"></textarea>
        </div>

        <button class="btn btn-primary btn-block" name="submit" type="submit">Create Post</button>
    </form>
    <br>
    <br>
</div>
</div>
</div>

<?php include "includes/footer.php";?>
<style>


</style>
<script>

</script>