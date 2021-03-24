<?php include "includes/header.php"; ?>
<body id="main-nav">
  <?php include "includes/navs.php"; ?>
  <?php 
  if(isLoggedIn()){
    redirect('index.php');
  }
  else{
    if(isset($_GET['token'])){
      $token = $_GET['token'];
      $user_token = mysqli_query($connection, "SELECT * FROM users WHERE token = '{$token}'");
      $count = mysqli_num_rows($user_token);
      $row = mysqli_fetch_assoc($user_token);
     echo $username = $row['username'];
      confirmQuery($user_token);
      if($count == 1){  
      
      
      }
      else{
        redirect('index.php');

      }
      
    } 
    else{
    redirect('index.php');
  }
  }
  
  ?>
  <section class="my-5">
<div class="card  py-5" id="id" style="border: none;">
<div >
    <h4 class="text-center text-muted" >
        Reset Password
    </h4>
</div>
<div class="card-body">
    <form class="my-2 form" method="post">
        <div class="input-group input"  :class="{invalid: $v.password.$error}">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name="password" @blur="$v.password.$touch()" v-model="password" class="form-control" placeholder="Password" required
            :class="{'is-invalid' : $v.password.$error }" >
            <div class="" :class="[$v.password.$invalid ? 'invalid-feedback' : 'valid-feedback']">
               Password must be at least Six Characters
            </div>
        </div>
        <div class="input-group my-2">
        <input type="text" name="username" class="d-none" value="<?php echo $username;?>" id="username">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control rem"  @blur="$v.confirmPassword.$touch()"
                                        v-model="confirmPassword" placeholder="Confirm Password" 
                                        :class="[$v.confirmPassword.$error ? 'is-invalid' : 'is-valid']" >
                                        <div class="" :class="[$v.confirmPassword.$invalid ? 'invalid-feedback' : 'valid-feedback']">
                                          <p v-if="!$v.confirmPassword.sameAs">
                                            Passwords dont match
                                          </p>
                                          <p v-if="!$v.confirmPassword.$invalid">
                                            Passwords match
                                          </p>  
                                         </div>
                                    </div>
        <br>
        <br>
        <button type="submit"   name="reset"  :disabled="$v.$invalid" class="btn btn-primary reset btn-block  " >
            Reset

        </button>
        <!-- {{allData}} -->
    </form>
                 
    <div class="email"></div>
</div>
</div>

</section>
<!-- <div class="result"></div> -->
<?php include "includes/footer.php" ;?>
<?php include "includes/style.php" ;?>
<div class="chec"></div>
<script>
  $(document).ready(()=>{
   var user = $('#username').val();
   console.log(user);
    $('.reset').click((event)=>{
      console.log('cfd');
    event.preventDefault();
    var form =$('.form').serialize();
    $.ajax({
        url: "reset_pass.php",
        type: "post",
        data: form,
        cache: false,
        success: function(response){
            // console.log(response)
            window.location.href = 'login.php?reset=true'
        }
    })
  })
  })
  
Vue.use(window.vuelidate.default)
            const { required, email, numeric, minValue, minLength, sameAs, requiredUnless } = window.validators
            
            
                // import { required, email, numeric, minValue, minLength, sameAs, requiredUnless } from "validators";
              var vm = new Vue({
                  el: "#id",
                data:{
                    password: '',
                    confirmPassword: '',
                  },
                validations: {
                  password: {
                    required,
                    minLen: minLength(6)
                  },
                  confirmPassword: {
            //        sameAs: sameAs('password')
                    sameAs: sameAs(vm => {
                      return vm.password
                    })
                  },
                
                },
               
              });
            
</script>
<style>
  .email{
    position: absolute;
    top: 100px;
      }
</style>