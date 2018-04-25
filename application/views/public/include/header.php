<?php
/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/24/2018
 * Time: 11:09 PM
 */
?>
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
             style="background-image: url(<?=base_url('assets/public/');?>img/headers/index.jpg)">
        <div class="slider-caption">
            <h1 data-animate="fadeInDown" data-delay="1000" data-duration="2s">Bingung recruitment? <br>Tenang, kami siap membantu Anda!</h1>
            <a data-animate="fadeInUp" data-duration="2s" data-delay="1300" href="javascript:;"
               class="btn btn-primary btn-lg">Mulai</a></div>
    </section>
</header>
