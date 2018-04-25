<?php
/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/24/2018
 * Time: 11:42 PM
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">

    <link href="<?= base_url('assets/public/'); ?>libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/public/'); ?>libs/pace/pace.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/public/'); ?>libs/animate-css/animate.min.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/public/'); ?>libs/iconmoon/style.css" rel="stylesheet"/>

    <!-- LESS FILE <link href="assets/css/style.less" rel="stylesheet/less" type="text/css" /> -->
    <!-- Extra CSS Libraries Start -->
    <link href="<?= base_url('assets/public/'); ?>css/style.css" rel="stylesheet" type="text/css"/>
    <!-- Extra CSS Libraries End -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?= base_url('assets/public/'); ?>img/favicon.ico">
    <link rel="apple-touch-icon" href="<?= base_url('assets/public/'); ?>img/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/public/'); ?>img/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/public/'); ?>img/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/public/'); ?>img/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?= base_url('assets/public/'); ?>img/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?= base_url('assets/public/'); ?>img/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?= base_url('assets/public/'); ?>img/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?= base_url('assets/public/'); ?>img/apple-touch-icon-152x152.png"/>
</head>
<body class="">
<div id="wrapper">
    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="icon-navicon"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url();?>">
                        <img src="<?=base_url('assets/public/');?>img/logo.png" data-dark-src="<?=base_url('assets/public/');?>img/logo_dark.png"
                             alt="Coco Frontend Template" class="logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?=base_url();?>" class="active">HOME</a></li>
                        <li><a href="<?=base_url('service');?>">SERVICES</a></li>
                        <li><a href="<?=base_url('about');?>">ABOUT</a></li>
                        <li><a href="<?=base_url('login');?>">LOGIN</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-->
        </nav>
        <section class="main-slider fullsize" data-stellar-background-ratio="0.5"
                 style="background-image: url(<?= base_url('assets/public/'); ?>img/headers/signup-login.jpg)">
            <div class="slider-caption">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <form class="form-signin" role="form" action="<?=base_url('login/do_login')?>" method="post">
                                <h2 class="form-signin-heading">LOGIN</h2>
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control input-lg" placeholder="Username"
                                           required autofocus>
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control input-lg" placeholder="Password"
                                           required>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
                                <br>
                                Need an account? <a href="<?=base_url('sign_up');?>">Sign up</a> now!
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <?php include_once 'include/footer.php'; ?>
    <a class="tothetop" href="javascript:;"><i class="icon-angle-up"></i></a>
</div>

<script>
    var resizefunc = [];
</script>
<script src="<?= base_url('assets/public/'); ?>libs/less-js/less-1.7.5.min.js"></script>
<script src="<?= base_url('assets/public/'); ?>libs/pace/pace.min.js"></script>
<script src="<?= base_url('assets/public/'); ?>libs/jquery/jquery-1.11.1.min.js"></script>
<script src="<?= base_url('assets/public/'); ?>libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/public/'); ?>libs/jquery-browser/jquery.browser.min.js"></script>
<script src="<?= base_url('assets/public/'); ?>libs/fastclick/fastclick.js"></script>
<script src="<?= base_url('assets/public/'); ?>libs/stellarjs/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/public/'); ?>libs/jquery-appear/jquery.appear.js"></script>
<script src="<?= base_url('assets/public/'); ?>js/init.js"></script>
</body>
</html>
