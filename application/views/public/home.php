<?php
/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/24/2018
 * Time: 11:01 PM
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
    <title>Newcomer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">

    <link href="<?=base_url('assets/public/');?>libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?=base_url('assets/public/');?>libs/pace/pace.css" rel="stylesheet"/>
    <link href="<?=base_url('assets/public/');?>libs/animate-css/animate.min.css" rel="stylesheet"/>
    <link href="<?=base_url('assets/public/');?>libs/iconmoon/style.css" rel="stylesheet"/>

    <!-- LESS FILE <link href="assets/css/style.less" rel="stylesheet/less" type="text/css" /> -->
    <!-- Extra CSS Libraries Start -->
    <link href="<?=base_url('assets/public/');?>libs/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url('assets/public/');?>libs/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url('assets/public/');?>libs/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url('assets/public/');?>libs/jquery-magnific/magnific-popup.css" rel="stylesheet" type="text/css"/>
    <link href="<?=base_url('assets/public/');?>css/style.css" rel="stylesheet" type="text/css"/>
    <!-- Extra CSS Libraries End -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?=base_url('assets/public/');?>img/favicon.ico">
    <link rel="apple-touch-icon" href="<?=base_url('assets/public/');?>img/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/public/');?>img/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/public/');?>img/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/public/');?>img/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/public/');?>img/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/public/');?>img/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/public/');?>img/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/public/');?>img/apple-touch-icon-152x152.png"/>
</head>
<body class="">
<div id="wrapper">
    <?php include_once 'include/header.php'; ?>
    <section class="hero-banner">
        <div class="container text-center">

            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h2>Kami menggunakan metode <span class="invert bg-success">ELECTRE</span> lho!</h2>
                    <p>
                        Electre merupakan salah satu metode dari sistem pendukung keputusan yang berbasis multi kriteria
                        yang berasal dari EROPA sekitar tahun 1960-an. ELECTRE berasal dari kata ELimination Et Choix Traduisant
                        la Realita (ELimination and Choice Expressing Reality). Metode Electre dapat digunakan dalam
                        melakukan penilaian dan perankingan berdasarkan kelebihan dan kekurangan melalui perbandingan
                        berpasangan pada kriteria yang sama.
                        <br><br>
                        Menurut Janco dan Bernoider, Electre merupakan salah satu metode pengambilan keputusan
                        multikriteria berdasarkan pada konsep outranking dengan menggunakan perbandingan berpasangan dari
                        alternatif-alternatif berdasarkan setiap kriteria yang sesuai.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="features-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" data-animate="fadeInLeft" data-delay="0">
                    <h4>PERFECTLY RESPONSIVE</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-sm-4" data-animate="fadeInLeft" data-delay="300">
                    <h4>SIMPLE & ELEGANT LOOK</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-sm-4" data-animate="fadeInLeft" data-delay="600">
                    <h4>BUILT WITH BOOTSTRAP</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include_once 'include/footer.php'; ?>
    <a class="tothetop" href="javascript:"><i class="icon-angle-up"></i></a>
</div>
<script>
    var resizefunc = [];
</script>
<script src="<?=base_url('assets/public/');?>libs/less-js/less-1.7.5.min.js"></script>
<script src="<?=base_url('assets/public/');?>libs/pace/pace.min.js"></script>
<script src="<?=base_url('assets/public/');?>libs/jquery/jquery-1.11.1.min.js"></script>
<script src="<?=base_url('assets/public/');?>libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url('assets/public/');?>libs/jquery-browser/jquery.browser.min.js"></script>
<script src="<?=base_url('assets/public/');?>libs/fastclick/fastclick.js"></script>
<script src="<?=base_url('assets/public/');?>libs/stellarjs/jquery.stellar.min.js"></script>
<script src="<?=base_url('assets/public/');?>libs/jquery-appear/jquery.appear.js"></script>
<script src="<?=base_url('assets/public/');?>js/init.js"></script>
<!-- Page Specific JS Libraries -->
<script src="<?=base_url('assets/public/');?>libs/owl-carousel/owl.carousel.min.js"></script>
<script src="<?=base_url('assets/public/');?>libs/jquery-magnific/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url('assets/public/');?>js/pages/index.js"></script>
<!-- Page Specific JS Libraries End -->
</body>
</html>