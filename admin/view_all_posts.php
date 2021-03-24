<?php include "includes/header.php";?>
<?php
if(isset($_SESSION['user_role'])){

}else{
  redirect('../index.php');
}
if(isset($_POST['checkBoxArray'])) {

foreach($_POST['checkBoxArray'] as $postValueId ){
    $bulk_options = $_POST['bulk_options'];
    switch($bulk_options) {
        case 'delete':     
            $query = "DELETE FROM posts WHERE post_id = '{$postValueId}' ";
            $update_to_delete_status = mysqli_query($connection,$query);
            confirmQuery($update_to_delete_status);
            break;
        case 'clone':
            $query = "SELECT * FROM posts WHERE post_id = '{$postValueId}' ";
            $select_post_query = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_array($select_post_query)) {
              $post_id = $row['post_id'];
              $title = $row['post_title'];
              $content = $row['content'];
              $start_date = $row['start_dates'];
              $end_date = $row['end_date'];
              $hour = $row['hour'];
              $level = $row['levels'];
              $image = $row['images'];
              $tags = $row['tags'];
              $max = $row['max_no_of_part'];
              $enroll = $row['enroll'];
              $about = $row['about'];
              $units = $row['unit_id'];
              $venue_id = $row['venue_id'];
              $view = $row['post_views_count'];
            }
              $query = "INSERT INTO posts(post_title,venue_id,unit_id,start_dates,end_date,max_no_of_part,about,images, content,hour, levels, tags, post_views_count, enroll) ";
             
              $query .= "VALUES('{$title}', '{$cat_id}','{$units}','{$start_date}','{$end_date}','{$max}', '{$about}','{$image}','{$content}','{$hour}', '{$level}', '{$tags}' , '{$post_views_count}', '{$enroll}') "; 
            $copy_query = mysqli_query($connection, $query);
            confirmQuery($copy_query);

            if(!$copy_query ) {

                die("QUERY FAILED" . mysqli_error($connection));
            }
            break;

    }

}

}


?>
<body id="main-nav">
<?php include "includes/nav.php";?>
<?php 
$post_query = mysqli_query($connection, "SELECT * FROM posts ORDER BY post_id DESC " );
confirmQuery($post_query);
if(isset($_GET['p_id'])){
   $p_id = mysqli_real_escape_string($connection,$_GET['p_id']);
  $edit_query = mysqli_query($connection, "SELECT * FROM posts WHERE post_id = '$p_id' ");
  confirmQuery($edit_query);
  $row = mysqli_fetch_array($edit_query);
  $post_id =  $row['post_id'];
  $title1 = $row['post_title'];
  $start_date1 = $row['start_dates'];
  $end_date1 = $row['end_date'];
  $hour1 = $row['hour'];
  $image1 = $row['images'];
  $tags1 = $row['tags'];
  $max1 = $row['max_no_of_part'];
  $enroll1 = $row['enroll'];
  $content1 = mysqli_real_escape_string($connection,$row['content']);
  $about1 = mysqli_real_escape_string($connection,$row['about']);
  $units1 = $row['unit_id'];
  $view1 = $row['post_views_count'];
}
if(isset($_POST['submit1'])){
  $p_id = $_POST['post_id'];
  $title = $row['post_title'];
  $start_date = $row['start_dates'];
  $end_date = $row['end_date'];
  $hour = $row['hour'];
  $image = $row['images'];
  $tags = $row['tags'];
  $max = $row['max_no_of_part'];
  $enroll = $row['enroll'];
  $content = mysqli_real_escape_string($connection,$row['content']);
  $about = mysqli_real_escape_string($connection,$row['about']);
  $units = $row['unit_id'];
  $view = $row['post_views_count'];
  $query = "UPDATE posts SET post_title = '{$title}', content = '{$content}', about = '{$about}', images = '{$image}', end_date = '{$end_date}', tags = '{$tags}',max_no_of_part = '{$max}',start_dates = '{$start_date}',hour = '{$hour}' WHERE post_id = '$p_id' ";
    $update_query = mysqli_query($connection, $query);
    confirmQuery($update_query);
    $no_error = true;
    redirect("view_all_posts.php");
}else{
  $no_error ='';
}

?>
<div class="col-md-10 real">
    <h4 class="display-4 mme">Welcome, <?php echo ucfirst(get_user_name()); ?></h4>
        <hr>
        <form action="" method="post">
          <div class="row my-3">
        <div id="bulkOptionContainer" class="col-md-4 ">
            <select class="form-control" name="bulk_options" id="">
                <option value="">Select Options</option>
                <option value="delete">Delete</option>
                <option value="clone">Clone</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="submit" name="submit" class="btn btn-success" value="Apply">
        </div>
        </div>
<div class="row mx-2">
    <div class="col">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                     <th>    
                        <input type="checkbox" class="form" name="" id="" value="checkedValue">
                   </th>   
                    <th>#</th>
                    <th>Title</th>
                    <th>About</th>
                    <th>Enrolled</th>
                    <th>Units</th>
                    <th>Status</th>
                    <th>Year</th>
                    <th>View Post</th>
                    <?php if (is_admin()): ?>
                    <th>Edit</th>
                    <th>Delete</th>
                    <?php endif; ?>
                    <th>Views</th>
                </tr>
            </thead>
            <?php    while ($row = mysqli_fetch_array($post_query)) {
    $post_id = $row['post_id'];
    $title = $row['post_title'];
    $content = $row['content'];
    $start_date = $row['start_dates'];
    $end_date = $row['end_date'];
    $hour = $row['hour'];
    $image = $row['images'];
    $tags = $row['tags'];
    $max = $row['max_no_of_part'];
    $enroll = $row['enroll'];
    $about = $row['about'];
    $units = $row['unit_id'];
    $view = $row['post_views_count'];
    // $status = 'ongoing';
    $year = explode('-',$start_date);
    $year1 = explode('-',$end_date);
    $current_date = date("Ymd");
    $start_dat = $year[0].$year[1].$year[2];
    $end_dat = $year1[0].$year1[1].$year1[2];
    if($current_date >= $start_dat && $current_date <= $end_dat){
       $status = 'Active';
    } elseif($current_date <= $start_dat && $current_date <= $end_dat){
       $status = 'Prep'; 
            }
    elseif($current_date > $end_dat) {
       $status = 'Ended'; 
                    }else{
     $status = ''; 
                    }
                    if($status == 'Active'){
                      $color = 'bg-success';
                    }
                    elseif ($status == 'Prep'){
                      $color = 'bg-warning';
                    }
                    elseif ($status == 'Ended'){
                      $color = 'bg-danger';
                    }else{
                      $color = '';
                    }
              $unit_query = "SELECT * FROM unit WHERE unit_id = ${units}";
              $conn = mysqli_query($connection, $unit_query);
              $row = mysqli_fetch_array($conn);
              confirmQuery($conn);
              $unit = $row['unit_title'];
            ?> 
            <tbody>
                <tr>
                    <td>
                        <input type="checkbox" class="checkBoxes" id="" name='checkBoxArray[]' value='<?php echo $post_id;?>'>
                   </td>
                    <th scope="row"><?php echo $post_id;?></th>
                    <td><?php echo $title;?></td>
                    <td><?php echo $about;?></td>
                    <td><?php echo $enroll;?></td>
                    <td><?php echo $unit;?></td>
                    <td><p class="<?php echo $color; ?> text-light  text-center border-rounded" > <?php echo $status;?></p></td>
                    <td><?php echo $year[0];?></td>
                    <td><a type="button" href="../movie2.php?p_id=<?php echo $post_id ?>"  class="btn btn-primary">View</a></td>
                   <?php if(is_admin()): ?> <td><a   href='view_all_posts.php?p_id=<?php echo $post_id;?>' class="btn btn-info "  id=""  >Edit</a></td>
                    <td><a class="btn btn-danger delete_link" id="<?php echo $post_id;?>"  data-toggle ="modal" data-target="#myModal3"   href='view_all_posts.php?delete=delete&p_id=<?php echo $post_id;?>'>Delete</a></td>
                    <?php endif; ?>
                    <td>
                      
                    <?php echo  $view?></td>
                </tr>
            </tbody>
            <?php 
            }
            ?>
        </table>
    
    </div>
    <!-- TABLE HEAD INVERSE -->
    
    <br>

    </div>
    </form>
</div>      <?php if($no_error): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Posts updated successfully</strong> 
            </div>
            <scrip>
              $(".alert").alert();
            </scrip>
            <?php endif ?>
<!-- Button trigger modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          Are you Sure you want to delete this Post
      </div>
      <div class="modal-footer">
          <form action="" method="post">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No Cancel</button>
        <a type="button" name="yes" class="btn btn-danger modal_delete_link">Yes Delete</a>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleIds" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="" method="post" id="edit_post" enctype="multipart/form-data">
        <div class="form-group">
            <input class="form-control" value="<?php echo trim($title1) ?>" name="title" type="text" id="name" placeholder="Enter Title">
        </div>  
        <div class="form-group">
            <input class="form-control" hidden  value="<?php echo trim($p_id) ?>" name="p_id" type="text" id="name" placeholder="Enter Title">
        </div>       
        <div class='form-group'>  
            <input class="form-control" type="number" name="hour" id="no_of_hours" placeholder="no_of_hours" value="<?php echo $hour ?>">
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

<div class="form-group">
  <label for=""></label>
  <input type="file" class="form-control-file" name="image" id="" placeholder="" aria-describedby="fileHelpId">
  <small id="fileHelpId" class="form-text text-muted">Not more than 3mb</small>
</div>
          <div class='form-group'>
          <p class="lead ">Start Date</p>
            <input class="form-control" value="<?php echo $start_date1; ?>" type="date" name="start_date" id="start_date" placeholder="Start Date">
          </div>
          <div class='form-group'>
        <p class="lead ">  End Date</p>
            <input class="form-control" type="date" value="<?php echo $end_date1; ?>" name="end_date" id="end_date" placeholder="End Date">
          </div>

        <div class='form-group ml-auto'>  
            <input class="form-control" type="number" value="<?php echo $max1 ?>" name="max_part" id="max_part" placeholder="Max no of Participants">
          </div>
        <!-- SELECT -->
       
        <!-- TEXTAREA -->
        <div class="form-group">
          <label for="">Tags</label>
          <input type="text" name="tags" value="<?php echo $tags1 ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">Javascript, web designing e.t.c</small>
        </div>
        <div class="form-group">
            <label for="message">About</label>
            <textarea class="form-control" name="about" id="message" rows="2"><?php echo htmlspecialchars($about1) ?>
            </textarea>
        </div>
        <div class="form-group">
            <label for="message">Content</label>
            <textarea class="form-control" name="content" id="message" rows="2"><?php echo htmlspecialchars($content1) ?>
</textarea>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" name="submit1" class="btn btn-primary" onclick="reload()"> Edit Post</button>
            </div>
            </form>     

        </div>

    </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<!-- <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          Are you Sure you want to delete this Post
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No Cancel</button>
        <button type="button" class="btn btn-danger">Yes Delete</button>
      </div>
    </div>
  </div>
</div>
</div> -->
<?php include "includes/footer.php";?>
<script>
        $(".delete_link").on('click', function(){
            var id = $(this).attr("id");
            var delete_url = "view_all_posts.php?delete="+ id +" ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#myModal3").modal('show');
        });
        function reload () {
          $.ajax({
            type: 'post',
            data: $('#edit_post').serialize(),
            url: 'edit_post.php',
            success: function(response){
              console.log(response);
            }
          })
          window.location.href = 'view_all_posts.php';
        };
</script>
<style>
  .border-rounded{
    border-radius: 10%;
  }
  </style>
<script>

<?php
if(isset($_GET['p_id'])){
?>
  $("#modelId").modal('show');

</script>
<?php
}
?>
<?php

?>
<?php 
if(isset($_GET['delete'])){
    $del_id = $_GET['delete'];
      $query = "DELETE FROM posts WHERE post_id = {$del_id} ";
     $delete_query = mysqli_query($connection, $query);
    header("Location: view_all_posts.php");
           
}
           ?>