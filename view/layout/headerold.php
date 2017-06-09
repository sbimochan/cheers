
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
      Ecommerce Project
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?php echo base_url() ?>public/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="<?php echo base_url() ?>public/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?php echo base_url() ?>public/css/custom.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>public/js/respond.min.js"></script>

    <link rel="shortcut icon" href="<?php echo base_url() ?>public/favicon.png">



</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="<?php echo base_url() ?>public/#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="<?php echo base_url() ?>public/#">Get flat 35% off on orders over $50!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="<?php echo base_url() ?>public/#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>public/register.html">Register</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>public/contact.html">Contact</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>public/#">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="<?php echo base_url() ?>public/register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?php echo base_url() ?>public/index.html" data-animate-hover="bounce">
                    <img src="<?php echo base_url() ?>public/img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="<?php echo base_url() ?>public/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="<?php echo base_url() ?>public/basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="<?php echo base_url() ?>public/index.html">Home</a>
                      <?php foreach ($this->menuitem as $mi) {?>
                        <li class="dropdown yamm-fw">
                            <a href="<?php echo base_url() ?>dashboard/category/<?php echo $mi->slug ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"><?php echo $mi->name ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <?php foreach ($this->submenuitem as $sm) {?>
                                            <div class="col-sm-3">

                                        <?php echo $sm->name ?>

                                                <h5></h5>
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">T-shirts</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Shirts</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Pants</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Accessories</a>
                                                    </li>
                                                </ul>
                                            </div>
                                              <?php  } ?>
                                            <!-- <div class="col-sm-3">
                                                <h5>Shoes</h5>
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Trainers</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Sandals</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Hiking shoes</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Casual</a>
                                                    </li>
                                                </ul>
                                            </div> -->
                                            <div class="col-sm-3">
                                                <h5>Accessories</h5>
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Trainers</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Sandals</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Hiking shoes</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Casual</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Hiking shoes</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Casual</a>
                                                    </li>
                                                </ul>
                                                <h5>Looks and trends</h5>
                                                <ul>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Trainers</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Sandals</a>
                                                    </li>
                                                    <li><a href="<?php echo base_url() ?>public/category.html">Hiking shoes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="banner">
                                                    <a href="<?php echo base_url() ?>public/#">
                                                        <img src="<?php echo base_url() ?>admin783/public/images/category/<?php echo $mi->image ?>" class="img img-responsive" alt="">
                                                    </a>
                                                </div>
                                                <div class="banner">
                                                    <a href="<?php echo base_url() ?>public/#">
                                                        <img src="<?php echo base_url() ?>admin783/public/images/category/<?php echo $mi->image ?>" class="img img-responsive" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.yamm-content -->
                                </li>
                            </ul>
                        </li>
                      <?php } ?>
                      <!-- <a href="<?php echo base_url() ?>public/index.html">Home</a> -->
                    </li>




                    <li class="dropdown yamm-fw">
                        <a href="<?php echo base_url() ?>public/#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="<?php echo base_url() ?>public/index.html">Homepage</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/category.html">Category - sidebar left</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/category-right.html">Category - sidebar right</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/category-full.html">Category - full width</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/detail.html">Product detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="<?php echo base_url() ?>public/register.html">Register / login</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/customer-orders.html">Orders history</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/customer-order.html">Order history detail</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/customer-wishlist.html">Wishlist</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/customer-account.html">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="<?php echo base_url() ?>public/basket.html">Shopping cart</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/checkout1.html">Checkout - step 1</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/checkout2.html">Checkout - step 2</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/checkout3.html">Checkout - step 3</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/checkout4.html">Checkout - step 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Pages and blog</h5>
                                            <ul>
                                                <li><a href="<?php echo base_url() ?>public/blog.html">Blog listing</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/post.html">Blog Post</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/faq.html">FAQ</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/text.html">Text page</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/text-right.html">Text page - right sidebar</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/404.html">404 page</a>
                                                </li>
                                                <li><a href="<?php echo base_url() ?>public/contact.html">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="<?php echo base_url() ?>public/basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
