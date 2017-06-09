
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ecommerce-cheers beta</title>

 <!-- styles -->
 <!-- your stylesheet with modifications -->
 <link href="<?php echo base_url() ?>public/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/css/owl.carousel.css" rel="stylesheet">





    <script src="<?php echo base_url() ?>public/js/respond.min.js"></script>

    <link rel="shortcut icon" href="<?php echo base_url() ?>public/favicon.png">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body ng-app="app">

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '270439123385650',
          cookie     : true,
          xfbml      : true,
          version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/cheers/dashboard/index">Cheers</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">




                    <?php foreach ($this->menuitem as $mi) {?>
                        <li class="dropdown">
                            <a href="<?php echo base_url() ?>dashboard/category/<?php echo $mi->slug;?>"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php echo strtoupper($mi->name) ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                            <?php foreach ($this->submenuitem as $sm) {
                                if($mi->id== $sm->parent_id){ ?>
                            <li><a href="<?php echo base_url() ?>dashboard/category/<?php echo $sm->id;?>"><?php echo strtoupper($sm->name) ?></a></li>
                            <?php }}?>
                            </ul>
                        </li>
                        <?php }?>
                        <li><a href="<?php echo base_url() ?>dashboard/login">Login</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>dashboard/register">Register</a>
                    </li>
                    <li><a href="<?php echo base_url() ?>dashboard/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
