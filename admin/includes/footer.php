<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- <script src="../js/vuelidate.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- <script src="../js/validators.min.js"></script> -->
    <script src="../js/login.js"></script>
    <script>

    if($('.re').hasClass('success')){
     $('.success').removeClass('d-none');
 }
 if($('.re').hasClass('error')){
     $('.error').removeClass('d-none');
 }
 $(document).ready(function(){
if($('.old').is(':empty')){
$('.old').removeClass("is-valid");
// $('.treu').removeClass("valid-feedback");
}
else{
$('.old').addClass("is-valid");
// $('.empty').show();
}
 });
$(document).ready(function(){
if($('.new').is(':empty')){
$('.new').removeClass("is-valid");
// $('.treu').removeClass("valid-feedback");
}
else{
$('.new').addClass("is-valid");
// $('.empty').show();
}
});
 </script>
<script src="../js/function.js" ></script>

<!-- <script src="slick/slick.js"></script> -->
</body>
</html>