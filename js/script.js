   
 
  
  
      $('#main-nav a').on('click', function (e) {
        // Check for a hash value
        if (this.hash !== '') {
          // Prevent default behavior
          e.preventDefault();
  
          // Store hash
          const hash = this.hash;
  
          // Animate smooth scroll
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function () {
            // Add hash to URL after scroll
            window.location.hash = hash;
          });
        }
      });
      $('.my').click(function(){
        $('#trans').toggleClass("trans")
      });
        $('.arrow').click(function(){
        $("#hideme").toggle();
      });
      $('.arrow').click(function(){
        $("#hideme2").toggle();
      });
      $("#trans").click(function(){
        $("#trans").removeClass("trans");
      });
      $('.imags').click(function(){
        $(this).addClass("act");
        $('#imags').show();
        $('#cast').hide();
        $('#info').hide();
        $('#comments').hide();
         $(".about").removeClass("act");
         $(".comments").removeClass("act")
        $('.cast').removeClass('act')
      });
      $('.cast').click(function(){
        $(this).addClass("act");
        $('#cast').show();
        $('#imags').hide();
        $('#info').hide();
        $('#comments').hide();
         $(".about").removeClass("act");
         $(".comments").removeClass("act")
         $(".imags").removeClass("act")
      });
      $('.comments').click(function(){
        $(this).addClass("act");
        $('#comments').show();
        $('#info').hide();
        $('#imags').hide();
        $('#cast').hide();
         $(".about").removeClass("act");
         $(".imags").removeClass("act");
         $('.cast').removeClass('act')
      });
      $('.about').click(function(){
        $(this).addClass("act");
        $('#info').show();
        $('#comments').hide();
        $('#imags').hide();
        $('#cast').hide();
        $(".comments").removeClass("act");
        $(".imags").removeClass("act");
        $('.cast').removeClass('act')
      });
  
      $('.sd').click(function(){
        $(this).addClass("acts");
        $('.for-sd').show();
        $('.for-fhd').hide();
        $('.for-hd').hide();
        $(".hd").removeClass("acts")
        $(".fhd").removeClass("acts")
      });
      $('.hd').click(function(){
        $(this).addClass("acts");
        $('.for-hd').show();
        $('.for-fhd').hide();
        $('.for-sd').hide();
        $(".sd").removeClass("acts")
        $(".fhd").removeClass("acts")

      });
      $('.fhd').click(function(){
        $(this).addClass("acts");
        $('.for-fhd').show();
        $('.for-hd').hide();
        $('.for-sd').hide();
        $(".sd").removeClass("acts")
        $(".hd").removeClass("acts")
      });
//  $(document).scroll(function(){
//    var y = $(this).scrollTop();
//    if(y > 700){
//      $(".showme").show();
//    }
//     else{
//      $(".showme").fadeOut();
//    }
//  })
 $(document).click(function(e){
if(e.target.class != 'search_res'){
  $('.search_res').html("");
}
 });
