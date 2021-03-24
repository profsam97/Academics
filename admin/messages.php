<?php include "includes/header.php";?>

<body id="main-nav">
<?php include "includes/nav.php";?>
<?php 
if(isset($_POST['checkBoxArray'])) {

    foreach($_POST['checkBoxArray'] as $postValueId ){
        if(isset($_POST['bulk_options'])){

        $bulk_options = $_POST['bulk_options'];
                $query = "DELETE FROM messages WHERE id = {$postValueId}  ";
                $update_to_delete_status = mysqli_query($connection,$query);
                confirmQuery($update_to_delete_status);
              redirect('messages.php');
    
            }

    }
    
    }
    
$username = get_user_name();
$user_query = mysqli_query($connection, "SELECT * FROM messages ORDER BY id DESC " );
confirmQuery($user_query);

?>
<div class="col-md-10">
    <h4 class="display-4">Welcome, Prof</h4>
        <hr>
        <form action="" method="post">
        <div class="row my-3">
        <div id="bulkOptionContainer" class="col-md-4 ">
            <input type="submit" class="btn btn-danger" name="bulk_options" value="Delete">
        </div>
        </div>
<div class="row mx-2">
    <div class="col">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>message</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>
            </thead>
            <?php    while ($row = mysqli_fetch_array($user_query)) {
    $comment_author = $row['username'];
    $email= $row['email'];
    $comment_content = $row['messages'];
    $date = $row['messages_date'];
            ?> 
            <tbody>
                <tr>
                <td>
                        <input type="checkbox" class="checkBoxes" id="" name='checkBoxArray[]' value='<?php echo $row['id']; ?>'>
                   </td>
                    <th scope="row"> <?php echo $row['id'] ?> </th>
                    <td> <?php echo  $comment_author;  ?> </td>
                    <td><?php echo  $email;  ?></td>
                    <td><?php echo  $comment_content;  ?></td>
                    <td><?php echo  $date;  ?></td>
                    <td><a href='users.php?delete=delete&u_id=<?php echo $row['id']?>' data-target="#" class="delete_link" id="<?php echo $row['id'] ?>"  data-toggle="modal" >Delete</a></td>
      
                </tr>
            
            </tbody>
            <?php 
           } ?>
        </table>
    
    </div>
    <!-- TABLE HEAD INVERSE -->
    
    <br>

    </div>
    </form>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Are you Sure you want to delete this message
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
            var delete_url = "messages.php?delete="+ id +" ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#myModal").modal('show');
        });


</script>

<?php

if(isset($_GET['delete'])){
    $del_id = $_GET['delete'];
      $query = "DELETE FROM messages WHERE id = {$del_id} ";
     $delete_query = mysqli_query($connection, $query);
    header("Location: messages.php");
           
}
           ?>


