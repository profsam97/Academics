<?php include "../admin/includes/header.php";?>
<body id="main-nav">
<?php include "../admin/includes/user_nav.php";?>

<?php
    if(isset($_POST['update'])){
        $new = escape($_POST['new']);
        $old = escape($_POST['old']);
        $username = get_user_name();
        if(isset($_POST['image'])){
            $image = escape($_POST['image']);
        }
        else {
            $image = '';
        }
        updateProfile($username, $new, $old, $image);
    
    }    
  
?> 
<div class="col-md-10 ">
    <h4 class="display-4 text-center">Welcome, <?php echo  get_user_name(); ?> </h4>
        <hr>
<div class="container ">
    <!--##################START HERE#####################-->
    <!-- FORM -->
    <img src="../<?php echo profilePic();?>" alt="" class="img-fluid rounded-circle im ml-5">
    <div class="ml-5" id="id">
    <a href="../admin/upload.php" class="btn btn-default">Change Profile pic</a>
    <form action="user_profile.php" method="post">
        
        <!-- TEXT FIELD GROUPS -->
        <div class="form-group">
            <label for="name">Username</label>
            <input class="form-control" type="text" disabled id="name" placeholder="<?php echo $_SESSION['username'] ?>">
</div>
                <div class="form-group">
                            <label for="name">Email</label>
                            <input class="form-control" type="text" disabled id="name" placeholder="<?php echo $_SESSION['user_email']?>">
                </div>
                    <div class="alert alert-danger alert-dismissible d-none error  fade show" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                       </button>
                       <strong>Incorrect password</strong> 
                   </div>         
                   <div class="alert alert-success alert-dismissible success d-none fade show" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                       </button>
                       <strong>Profile Updated successfully </strong> 
                   </div>

        <div class="form-group">
            <label for="Cast">Old Password</label>
            <input class="form-control old " type="password"  @blur="$v.oldPassword.$touch()" placeholder="password" v-model='oldPassword' name="old"  :class="[$v.oldPassword.$error ? 'is-invalid' : 'is-valid']">
            <div class="" :class="[$v.oldPassword.$invalid ? 'invalid-feedback' : 'valid-feedback']">
                <p v-if="!$v.oldPassword.minLen">Password should have at least six characters </p>
        </div> 
        </div>
        <div class="form-group">
            <label for="Cast">New Password</label>
            <input class="form-control new " name="new" type="password"   @blur="$v.newPassword.$touch()" placeholder="password" v-model='newPassword'  :class="[$v.newPassword.$error ? 'is-invalid' : 'is-valid']">
            <div class="" :class="[$v.newPassword.$invalid ? 'invalid-feedback' : 'valid-feedback']">
            <p v-if="!$v.newPassword.minLen">Password should have at least six characters </p>
            <p v-if="$v.$invalid">new password must be different from old</p>
        </div>
        </div>
       
        <button class="btn btn-primary" name="update" :disabled="$v.$invalid" type="submit">Update Profile</button>
    </form>
    <br>
    <br>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="../js/vuelidate.min.js"></script>
<script src="../js/validators.min.js"></script>

<script>
    

Vue.use(window.vuelidate.default)
            const { required, email, numeric, minValue, minLength, sameAs, requiredUnless } = window.validators
            
            
                // import { required, email, numeric, minValue, minLength, sameAs, requiredUnless } from "validators";
              var vm = new Vue({
                  el: "#id",
                data:{

                    newPassword: '',
                    oldPassword: '',
                    // see:"",
                    // result: result,
                  },
                validations: {
        
                  oldPassword: {
                    required,
                    minLen: minLength(6)
                  },
                  newPassword: {
                    required,
                    minLen: minLength(6),
                    notSameAs: val=> {
                      return val !== vm.oldPassword
                    }
                  },
                 
             
                },
           
              });
            
</script>
<script>

</script>
<?php include "../admin/includes/footer.php";?>
<style>
    .im{
        max-width: 13%;
    }
    
@media (max-width: 575px) {
    .matop{
    bottom:600px
}
        }
        @media (max-width: 1209px) {
            .matop{
    bottom:600px
}

        }
</style>