<?php include "includes/header.php";?>
<body id="main-nav">
<?php include "includes/nav.php";?>
<?php 
$username = get_user_name();
$user_query = mysqli_query($connection, "SELECT * FROM users ORDER BY user_id DESC " );
confirmQuery($user_query);

?>
<div class="col-md-10">
    <h4 class="display-4">Welcome, Prof</h4>
        <hr>
        <div class="container mx-2 my-2">

              <button class="btn btn-primary ">
         <a href="add_user.php" class="text-light">Add Users</a> 
        </button>
        </div>
<div class="row mx-2">
    <div class="col">
        <table class="table">
            <thead class="thead-dark">
     <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Image</th>

                </tr>
            </thead>
            <?php    while ($row = mysqli_fetch_array($user_query)) {
    $username = $row['username'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
            ?> 
            <tbody>
                <tr>
               <?php     
                    ?>
                    <th scope="row"><?php echo $row['user_id'] ?> </th>
                    <td><?php echo $username; ?> </td>
                    <td><?php echo $user_email; ?></td>
                    <td> <img src="../<?php echo $user_image; ?>" alt="" class="rounded-circle" height="60px" width="120px" srcset="">  </td>
                    <td><a class="delete_link" id="<?php echo $row['user_id'] ?>"  data-toggle ="modal" data-target="#"   href='users.php?delete=delete&u_id=<?php echo $row['user_id']?>'>Delete</a></td>
                    <td><a class="delete_link" id="<?php echo $row['user_id'] ?>"  data-toggle ="modal" data-target="#"   href='edit_user.php?edit=edit&u_id=<?php echo $row['user_id']?>'>Edit</a></td>
               <?php }       ?>
                </tr>
               
            </tbody>
        </table>
    
    </div>
    <!-- TABLE HEAD INVERSE -->
    
    <br>

    </div>
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
<?php include "includes/footer.php";?>
<script>
        $(".delete_link").on('click', function(){
            var id = $(this).attr("id");;
            var delete_url = "users.php?delete="+ id +" ";
            $(".modal_delete_link").attr("href", delete_url);
            $("#myModal").modal('show');

        });


</script>

<?php

if(isset($_GET['delete'])){
    $del_id = $_GET['delete'];
      $query = "DELETE FROM users WHERE user_id = {$del_id} ";
     $delete_query = mysqli_query($connection, $query);
    header("Location: users.php");
           
}
           ?>
