<?php include "includes/header.php";?>
<body id="main-nav" class="respect">
<?php include "includes/navs.php";?>
<?php 
if(isLoggedIn()){
    $username = get_user_name(); 
}else{
    $username = 0;
}
?>
<div class="contact_us d-md-none  myrow mt-3 col-md-4 mx-auto"></div>
<div class="contact_us rows text-center d-none d-md-block mt-3 col-md-6 offset-md-3"></div>
          <!-- Contact  SECTION -->
        <section id="aboutus" class="py-5 my-5">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card p-3">
                    <img class="card-img-top img-fluid" src="images/contact.jpg">
                  <div class="card-body">
                    <h4> Get in Touch</h5>
                    <p class="card-text">We'd love to hear from you.
                    </p>
                    <h5>Email</h5>
                    <p>academia@academic.com</p>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="text-center">
                        Please fill out this form to contact us

                      </h4>
                      <hr>
                      <div class="row id">
                            <form action="#" class="form" method="post">
                                <div class="form-row">
                                <?php if(isLoggedIn()):?>
                            <h4 class="lead">Contact as <?php echo $username;?> </h4>
                          <?php else:?>
                      <div class="col">
                        <div class="form-group">
                          <input type="text" name="name"  aria-required="required" class="form-control name"     placeholder="First Name" id="">
                        </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <input  type="email" name="email" required class="form-control email remov" placeholder="Email" id="" >
                        </div>
                      </div>
                          <?php endif;?>
                       <div class="col-md-12">
                        <div class="form-group">
                          <textarea  name="message" required class="form-control message remove"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                              <button class="btn btn-outline-danger btn-block click" name="submit">
                                  Submit
                              </button>                       
                              </div>
                            </div>
                            </div>
                            </form>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- FORM -->
     
<?php include "includes/footer.php"; ?>


  <script>

            

  $('.click').click((event)=>{
    event.preventDefault();
    var textarea = $('.message').val();
    var form =$('.form').serialize();
    $.ajax({
        url: "confirmcontact.php",
        type: "POST",
        data: form,
        cache: false,
        success: function(response){
            $('.contact_us').html(response);
            textarea.val = " ";
        }
    })
  })
    // $('#year').text(new Date().getFullYear());

    // $('.slider').slick({
    //   infinite: true,
    //   slideToShow: 1,
    //   slideToScroll: 1
    // });
  </script>
  <style>
      .myrow{
          bottom: 200px;
          position: absolute;
          z-index: 100;
      }
      .rows{
          top: 30px;
          position: absolute;
          z-index: 100;
      }
  </style>
</body>

</html>