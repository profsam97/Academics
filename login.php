 <?php
    include "includes/db.php";
    if(isset($_GET['reset'])){
        $reset = true;
    }
    else{
        $reset = false;
    }
    checkIfUserIsLoggedInAndRedirect('index.php');
    if(isset($_POST['signUp'])){
        $username = trim($_POST['username']);
        $pasword = trim($_POST['password']);
        $email = trim($_POST['email']);
        $role = $_POST['user_role'];
        include "includes/rand.php";
        register_user($username, $email, $pasword, $profile_pics,$role);
        $isTrue = true;
    }else{
        $isTrue = false;
    }
    if(isset($_POST['signIn'])){
        $username = trim($_POST['username']);
        $pasword = trim($_POST['password']);
         login_user($username, $pasword);
         if($pass_error="false"){
            $error = true;
         }else{
             
         }
    } else{
        $error ="";
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/all.css"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/movila.png">
    <title>Academics - Your Home of Knowledge</title></head>
<body>
<!--     
        <section>
            <div class="container">
                <div class="col-lg-10 mx-auto m-2">
                    <div class="row">
                    <div class="col-md-7">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="text-center" >
                                    Sign Up
                                </h4>
                            </div>
                            <div class="card-body">
                                <form class="my-2">
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>

                                        </div>
                                        <input type="text" class="form-control" placeholder="Choose username">
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email" >
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control"  placeholder="Password">
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password" >
                                    </div>
                                    <button type="submit" class="btn btn-outline-success btn-block">
                                        Sign Up
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="text-center" >
                                    Sign Up
                                </h4>
                            </div>
                            <div class="card-body">
                                <form class="my-2">
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>

                                        </div>
                                        <input type="text" class="form-control" placeholder="Choose username">
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Email" >
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control"  placeholder="Password">
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password" >
                                    </div>
                                    <button type="submit" class="btn btn-outline-success btn-block">
                                        Sign Up
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section> -->
        <div class="" id="id">
        <section class="back w-100">
            <div class="container ">
                <div class="col-lg-9 mx-auto  bg-light">
                    <div class="mt-5 pt-5 mb-0 pb-0">
                    <?php if($reset): ?>
                    <div class="alert alert-success alert-dismissible  fade show" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                       </button>
                      Please, login in with your new password.
                   </div>                    <?php endif?>
                    <?php if($isTrue): ?>
                    <div class="alert alert-success alert-dismissible  fade show" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                       </button>
                       <strong>Hello <?php echo $_SESSION['username'] ?> </strong> Thanks for signing up, please sign in.
                   </div>                    <?php endif?>
                   <?php if($error): ?>
                    <div class="alert alert-danger alert-dismissible  fade show" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Close</span>
                       </button>
                       <strong>Invalid password or username </strong> 
                   </div>                    <?php endif?>
                   <h1 class="text-danger text-center">
                   Academics
                   </h1> 
                   <p class="lead text-center text-muted">Kownledge is power. Start learning now</p>
                   </div>
                    <div class="row p-4 bg-light no-gutters mt-0 " >
                    <div class="col-md-7">
                        <div class="car  " style="border: none; background-color:w;">
                            <div >
                                <h4 class="text-center text-muted " >
                                    Sign Up
                                </h4>
                            </div>
                            <div class="card-body">
                                <form class="my-2" action="" method="post">
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>

                                        </div>
                                        <input type="text" v-model="username1" @blur="$v.username1.$touch()" class="form-control remove" name="username" placeholder="Choose username" 
                                      :class="[$v.username1.$error ? 'is-invalid' : 'is-valid']"  
                                     >
                                        <div  :class="[$v.username1.$invalid ? 'invalid-feedback' : 'valid-feedback'  ] ">
                        <p v-if="!$v.username1.minLen">
                            Must Be at Least 6 Characters
                           
                        </p>
                        
                        <p v-if="!$v.username1.unique">
                            Usersame is taken
                        </p>
                       
                        <p v-if="!$v.username1.$invalid"  >
                            Username is Available
                        </p>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="text"  @blur="$v.email.$touch()"
                                        v-model="email" name="email"  class="form-control remov" placeholder="Email" :class="[$v.email.$error ? 'is-invalid' : 'is-valid']" >
                                        <div class="" :class="[$v.email.$invalid ? 'invalid-feedback' : 'valid-feedback']">
                                            <p v-if="!$v.email.email">
                                               Email is invalid
                                            </p>                                        
                                 <p v-if="!$v.email.$invalid" class="empt">
                                           Email is available
                                        </p>
                                        <p v-if="!$v.email.unique" class="">
                                           Email is unavialable
                                        </p>
                                                            </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" name="password" class="form-control remo"  @blur="$v.password1.$touch()"
                                        v-model="password1" placeholder="Password"   :class="[$v.password1.$error ? 'is-invalid' : 'is-valid']" >
                                        <div class="" :class="[$v.password1.$invalid ? 'invalid-feedback' : 'valid-feedback']">
                                       <p class="" v-if="!$v.password1.minLen">
                                        Password must be at least Six Characters
                                       </p> 
                                       <p class="" v-if="!$v.password1.$invalid">
                                        Password is stronger
                                       </p>     
                                         </div>
                                    </div>
                                    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Role</label>
  </div>
  <select class="user_role" name="user_role" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="user">User</option>
    <option value="system_admin">System Admin</option>
    <option value="staff">Staff</option>
    <option value="admin">Admin</option>
  </select>
</div>
                                    <div class="input-group my-2">
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
                                    <button type="submit"  class="btn btn-success  btn-block mb-3" :disabled="$v.username1.$invalid || $v.email.$invalid || $v.password1.$invalid || $v.confirmPassword.$invalid" name="signUp">
                                        Sign Up
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="car " style="border: none;">
                            <div >
                                <h4 class="text-center text-muted" >
                                    Login
                                </h4>
                            </div>
                            <div class="card-body">
                                <form class="my-2" action="" method="post">
                                    <div class="input-group my-2 input " >
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>

                                        </div>
                                        <input type="text" v-model.trim="username" @blur="$v.username.$touch()" class="form-control" placeholder="Choose username"  name="username"
                                        :class="{'is-invalid' : $v.username.$error }"  
                                   >
                                        <div class="" :class="[$v.username.$invalid ? 'invalid-feedback' : 'valid-feedback']">
                                                In valid User name
                                            </div>
                                    </div>

                                   
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
                                    <br>
                                    <br>
                                    <a href="" class="unstyled">Forgot Password?</a>
                                    <button type="submit"  name="signIn"  :disabled="$v.username.$invalid || $v.password.$invalid" class="btn btn-primary btn-block  " >
                                        Login

                                    </button>
                                    <!-- {{allData}} -->
                                </form>
                                <!-- <input type="text" style="display: none;" name="" value="<?php echo $ans ?> " class="usernames"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="slick/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <script src="js/vuelidate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/validators.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
<style>

     /* .back{
        background: url("images/summer-movies-1587392939.jpg")  top center ;
        position: absolute;
        min-height: 100%;
    }  */
    .unstyled{
        text-decoration: none !important;
    }


  </style>
<script>

Vue.use(window.vuelidate.default)
            const { required, email, numeric, minValue, minLength, sameAs, requiredUnless } = window.validators
            
            
                // import { required, email, numeric, minValue, minLength, sameAs, requiredUnless } from "validators";
              var vm = new Vue({
                  el: "#id",
                data:{
                    email: '',
                    age: null,
                    password: '',
                    confirmPassword: '',
                    country: 'usa',
                    hobbyInputs: [],
                    terms: false,
                    username: "",
                    username1: "",
                    password1:"",
                    // see:"",
                    // result: result,
                  },
                validations: {
                  email: {
                    required,
                    email,
                    unique: val => {
                        if (val === '') return true
                     return   axios.post('email.php',{text: val})
                        .then(function(response){
                            console.log(response);
                            return Object.keys(response.data).length === 0
                            //  if(response = false) return true;
                        });
                      
                    }
            
                  },
                  username: {
                    required,
                    minLen: minLength(6),
                    
                  },
                  username1: {
                    required,
                    minLen: minLength(6),
                    unique: val => {
                        if (val === '') return true
                     return   axios.post('searchs.php',{val: val})
                        .then(function(response){
                            return Object.keys(response.data).length === 0
                            //  if(response = false) return true;
                        });
            
                      
                    }
                  },
                  password: {
                    required,
                    minLen: minLength(6)
                  },
                  password1: {
                    required,
                    minLen: minLength(6)
                  },
                  confirmPassword: {
            //        sameAs: sameAs('password')
                    sameAs: sameAs(vm => {
                      return vm.password1
                    })
                  },
                  terms: {
                    required: requiredUnless(vm => {
                      return vm.country === 'germany'
                    })
                  },
                },
                methods: {
                delayTouch($v) {
                  $v.$reset()
                  if (touchMap.has($v)) {
                    clearTimeout(touchMap.get($v))
                  }
                  touchMap.set($v, setTimeout($v.$touch, 1000))
                }
              },
              });
            
</script>
<!--  -->