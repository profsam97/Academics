<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/css/all.css"
    crossorigin="anonymous">
      <link rel="stylesheet" href="../bootstrap-4.5.2/bootstrap-4.5.2/dist/css/bootstrap.css" 
      crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="slick/slick.css">
    <title>Document</title>
</head>
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
        <section class="back w-100 h-100">
            <div class="container ">
                <div class="col-lg-10 mx-auto mt-5 ">
                    <div class="row my-5 p-5 bg-light no-gutters " >
                    <div class="col-md-7">
                        <div class="car  " style="border: none; background-color:w;">
                            <div >
                                <h4 class="text-center text-muted " >
                                    Sign Up
                                </h4>
                            </div>
                            <div class="card-body">
                                <form class="my-2">
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>

                                        </div>
                                        <input type="text" v-model="username1" @blur="$v.username1.$touch()" class="form-control remove" placeholder="Choose username" 
                                      :class="[$v.username1.$error ? 'is-invalid' : 'is-valid']"  
                                      onkeyup="getlivesearch(this.value)">
                                        <div class="treu" :class="[$v.username1.$invalid ? 'invalid-feedback' : 'valid-feedback'  ] ">
                        <p v-if="!$v.username1.minLen">
                            Must Be at Least 6 Characters
                        </p>
                        <p v-if="!$v.username1.$invalid" class="empty">
                            Username is Available
                        </p>
                                        </div>
                                    </div>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="text"  @blur="$v.email.$touch()"
                                        v-model="email"  class="form-control remov" placeholder="Email" :class="[$v.email.$error ? 'is-invalid' : 'is-valid']" >
                                        <div class="" :class="[$v.email.$invalid ? 'invalid-feedback' : 'valid-feedback']">
                                            <p v-if="!$v.email.email">
                                               Email is invalid
                                            </p>                                        
                                 <p v-if="!$v.email.$invalid" class="empt">
                                           Email is available
                                        </p>
                                                            </div>
                                    </div>
                                    <span class="username"></span>
                                    <div class="input-group my-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control remo"  @blur="$v.password1.$touch()"
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
                                    <button type="submit" class="btn btn-success btn-block mb-3" :disabled="$v.username1.$invalid || $v.email.$invalid || $v.password1.$invalid || $v.confirmPassword.$invalid">
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
                                <form class="my-2 ">
                                    <div class="input-group my-2 input " >
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>

                                        </div>
                                        <input type="text" v-model.trim="username" @blur="$v.username.$touch()" class="form-control" placeholder="Choose username" 
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
                                        <input type="password" @blur="$v.password.$touch()" v-model="password" class="form-control" placeholder="Password" required
                                        :class="{'is-invalid' : $v.password.$error }" >
                                        <div class="" :class="[$v.password.$invalid ? 'invalid-feedback' : 'valid-feedback']">
                                           Password must be at least Six Characters
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <a href="" class="unstyled">Forgot Password?</a>
                                    <button type="submit"  :disabled="$v.username.$invalid || $v.password.$invalid" class="btn btn-primary btn-block  " >
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        </div>

    <script src="../Jquery/jquery.js" 
    crossorigin="anonymous"></script>
    <script src="slick/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
  
  <script src="../bootstrap-4.5.2/bootstrap-4.5.2/dist/js/bootstrap.bundle.min.js" 
    crossorigin="anonymous"></script>
    <script src="fontawesome-free-5.14.0-web/fontawesome-free-5.14.0-web/js/all.js"></script>
    <script src="vue.js"></script>
    <script src="vuelidate.min.js"></script>
    <script src="validators.min.js"></script>
</body>
</html>
<style>

    .back{
        background: url("summer-movies-1587392939.jpg")  top center ;
        position: absolute;
        min-height: 100%;
    }
    .unstyled{
        text-decoration: none !important;
    }

    .input.invalid label {
    color: red;
  }

  .input.invalid input {
    border: 1px solid red;
    background-color: #ffc9aa;
  }
  .dis{
      display: none;
  }

</style>
<script>
    Vue.use(window.vuelidate.default)
const { required, email, numeric, minValue, minLength, sameAs, requiredUnless } = window.validators


    // import { required, email, numeric, minValue, minLength, sameAs, requiredUnless } from "validators";
    
  new Vue({
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
        password1:""
      },
    validations: {
      email: {
        required,
        email,
        // unique: val => {
        //   if (val === '') return true
        //   return axios.get('/users.json?orderBy="email"&equalTo="' + val + '"')
        //     .then(res => {
        //       return Object.keys(res.data).length === 0
        //     })
        // }
      },
      username: {
        required,
        minLen: minLength(6)
      },
      username1: {
        required,
        minLen: minLength(6)
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

  $(document).ready(function(){

          if($('.remove').is(':empty')){
            $('.remove').removeClass("is-valid");
            $('.treu').removeClass("valid-feedback");
          }
          else{
            $(this).addClass("is-valid");
            // $('.empty').show();
          };
         
     
  });
  $(document).ready(function(){
if($('.remov').is(':empty')){
    $('.remov').removeClass("is-valid");
    // $('.treu').removeClass("valid-feedback");
  }
  else{
    $('.remov').addClass("is-valid");
    // $('.empty').show();
  }
       
});
$(document).ready(function(){
if($('.remo').is(':empty')){
    $('.remo').removeClass("is-valid");
    // $('.treu').removeClass("valid-feedback");
  }
  else{
    $('.remo').addClass("is-valid");
    // $('.empty').show();
  }
       
});
$(document).ready(function(){
if($('.rem').is(':empty')){
    $('.rem').removeClass("is-valid");
    // $('.treu').removeClass("valid-feedback");
  }
  else{
    $('.rem').addClass("is-valid");
    // $('.empty').show();
  }
       
});
function getlivesearch(value){
	$.get("../index.php", {query:value}, function(data) {
        $('.username').text(data);
});
}
</script>
