<?php include "includes/header.php";?>

<body id="main-nav">
<?php include "includes/nav.php";?>

<div class="col-md-10">
    <div class="row">
        <div class="col-md-6">
        <h4 class="display-4">Welcome,  <?php echo get_user_name();?> </h4>
        </div>
        <div class="col-md-4 ml-auto d-flex mt-4 text-dark">
       System Role: &nbsp; <p class="text-muted"><?php echo get_role();?></p>
        </div>
    </div>
        <hr>
        <div class="d-flex d-row">
<div class="col-md-3">
    <div class="card bg-success">
        <div class="card-bod mx-2 mt-2  no-gutters mb-0">
            <div class="d-flex">
                <i class="fas fa-file-alt fa-5x  text-white "></i>
                <div class="ml-auto text-light">
                    <span class="text-center mb-2 mx-3 font"><?php echo get_all_posts() ?> </span>
                    <h4 class="card-title mt-1 ">Classes</h4>
                </div>
            </div>
        </div>
        <div class="card-fooer bg-light p-2 text-dark mt-1  atags">
            <a href="view_all_posts.php" class="text-dark-50  mx-2 d-flex d-row" role="button">
           View Details<span class="ml-auto"> <i class="fa fa-arrow-circle-right"></i></span>
        </a>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card bg-warning">
        <div class="card-bod mx-2 mt-2  no-gutters mb-0">
            <div class="d-flex">
                <i class="fas fa-list fa-5x  text-white "></i>
                <div class="ml-auto text-light">
                    <span class="text-center mb-2 mx-3 font"><?php echo get_all_categories() ?></span>
                    <h4 class="card-title mt-1 ">Venues</h4>
                </div>
            </div>
        </div>
        <div class="card-fooer bg-light p-2 text-dark mt-1  atags">
            <a href="cat.php" class="text-dark-50  mx-2 d-flex d-row" role="button">
           View Details<span class="ml-auto"> <i class="fa fa-arrow-circle-right"></i></span>
        </a>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card bg-primary">
        <div class="card-bod mx-2 mt-2  no-gutters mb-0">
            <div class="d-flex">
                <i class="fa fa-users fa-5x  text-white "></i>
                <div class="ml-auto text-light">
                    <span class="text-center mb-2 mx-3 font"><?php echo get_all_units() ?></span>
                    <h4 class="card-title mt-1 ">Units</h4>
                </div>
            </div>
        </div>
        <div class="card-fooer bg-light p-2 text-dark mt-1  atags">
            <a href="unit.php" class="text-dark-50  mx-2 d-flex d-row" role="button">
           View Details<span class="ml-auto"> <i class="fa fa-arrow-circle-right"></i></span>
        </a>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card bg-info">
        <div class="card-bod mx-2 mt-2  no-gutters mb-0">
            <div class="d-flex">
                <i class="fa fa-users fa-5x  text-white "></i>
                <div class="ml-auto text-light">
                    <span class="text-center mb-2 mx-3 font"><?php echo get_all_users() ?></span>
                    <h4 class="card-title mt-1 ">Users</h4>
                </div>
            </div>
        </div>
        <div class="card-fooer bg-light p-2 text-dark mt-1  atags">
            <a href="users.php" class="text-dark-50  mx-2 d-flex d-row" role="button">
           View Details<span class="ml-auto"> <i class="fa fa-arrow-circle-right"></i></span>
        </a>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
<?php include "includes/footer.php";?>

