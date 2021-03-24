<?php include "includes/header.php";?>

<body id="main-nav">
<?php include "includes/nav.php";?>
<?php 
$username = get_user_name();
$user_query = mysqli_query($connection, "SELECT * FROM comments ORDER BY comment_id DESC " );
confirmQuery($user_query);

?>
<div class="col-md-10">
    <h4 class="display-4">Welcome, Prof</h4>
        <hr>
<div class="row mx-2">
    <div class="col">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Comment</th>
                    <th>Date</th>
                    <th>View</th>
                </tr>
            </thead>
            <?php    while ($row = mysqli_fetch_array($user_query)) {
    $comment_author = $row['comment_author'];
    $comment_post_id = $row['comment_post_id'];
    $comment_content = $row['comment_content'];
    $date = $row['comment_date'];
            ?> 
            <tbody>
                <tr>
                    <th scope="row"> <?php echo $row['comment_id'] ?> </th>
                    <td> <?php echo  $comment_author;  ?> </td>
                    <td><?php echo  $comment_content;  ?></td>
                    <td><?php echo  $date;  ?></td>
                    <td><a href="../posts.php?p_id=<?php echo $comment_post_id; ?>" class="btn btn-info">link</a></td>
                    <td><a href='users.php?delete=delete&u_id=<?php echo $row['comment_id']?>' data-target="#" class="delete_link" id="<?php echo $row['comment_id'] ?>"  data-toggle="modal" >Delete</a></td>
      
                </tr>
            
            </tbody>
            <?php 
           } ?>
        </table>
    
    </div>
    <!-- TABLE HEAD INVERSE -->
    
    <br>

    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Are you Sure you want to delete this Comment
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No Cancel</button>
          <a type="button" class="btn btn-danger modal_delete_link">Yes Delete</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "includes/footer.php";?>
<script>
        $(".delete_link").on('click', function(){
            var id = $(this).attr("id");;
            var delete_url = "comments.php?delete="+ id +" ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#myModal").modal('show');

        });


</script>

<?php

if(isset($_GET['delete'])){
    $del_id = $_GET['delete'];
      $query = "DELETE FROM comments WHERE comment_id = {$del_id} ";
     $delete_query = mysqli_query($connection, $query);
    header("Location: comments.php");
           
}
           ?>


