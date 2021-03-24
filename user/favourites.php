<?php include "../admin/includes/header.php";?>

<body id="main-nav">
<?php include "../admin/includes/user_nav.php";?>
<div class="col-10  matop my-4 ">
    <h4 class=" d-sm-block d-none text-center">Enrolled Courses</h4>
        <section id="latest" class="">  
    <div class="container ">
    <div class="row response">
    </div>
</div>
</section>
</div>
</div>
<?php include "../admin/includes/footer.php";?>
<style>
    .whit, .whit a{
    text-decoration-color: #1a1a1a !important; 
    text-decoration: none !important;
    /* white-space: nowrap; */
    cursor: pointer;
    box-sizing: border-box;
    text-decoration-line: none !important;

}

.opac{
    cursor: pointer;
}
.opac:hover{
    transition: opacity linear 100ms;
    opacity: .8;
}
</style>
<script>
    setInterval(()=>{
        $.ajax({
        type: 'post',
        url: 'favourite_response.php',
        success: function(response){
            $('.response').html(response);
        }
    })
    },500)
 
</script>