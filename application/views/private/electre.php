<?php
/**
 * Created by PhpStorm.
 * User: hasanmangrove
 * Date: 4/25/2018
 * Time: 1:10 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">

    <!-- Base Css Files -->
    <link href="<?= base_url('assets/private'); ?>/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css"
          rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/fontello/css/fontello.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/animate-css/animate.min.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/nifty-modal/css/component.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/magnific-popup/magnific-popup.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/ios7-switch/ios7-switch.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/pace/pace.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet"/>
    <link href="<?= base_url('assets/private'); ?>/libs/jquery-icheck/skins/all.css" rel="stylesheet"/>
    <!-- Code Highlighter for Demo -->
    <link href="<?= base_url('assets/private'); ?>/libs/prettify/github.css" rel="stylesheet"/>

    <!-- Extra CSS Libraries Start -->
    <link href="<?= base_url('assets/private'); ?>/css/style.css" rel="stylesheet" type="text/css"/>
    <!-- Extra CSS Libraries End -->
    <link href="<?= base_url('assets/private'); ?>/css/style-responsive.css" rel="stylesheet"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?= base_url('assets/private'); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?= base_url('assets/private'); ?>/img/apple-touch-icon.png"/>
    <link rel="apple-touch-icon" sizes="57x57"
          href="<?= base_url('assets/private'); ?>/img/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?= base_url('assets/private'); ?>/img/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="<?= base_url('assets/private'); ?>/img/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?= base_url('assets/private'); ?>/img/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120"
          href="<?= base_url('assets/private'); ?>/img/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144"
          href="<?= base_url('assets/private'); ?>/img/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152"
          href="<?= base_url('assets/private'); ?>/img/apple-touch-icon-152x152.png"/>
</head>
<body class="fixed-left">
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <?php include_once 'include/top_bar.php'; ?>
    <!-- Top Bar End -->
    <!-- Left Sidebar Start -->
    <?php include_once 'include/left_sidebar.php'; ?>
    <!-- Left Sidebar End -->

    <!-- Start right content -->
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Page Heading Start -->
            <div class="content">
                <!-- Page Heading End-->
                <div class="row">
                    <div class="widget">
                        <div class="widget-header">
                            <h2>Electre</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <ul id="demo1" class="nav nav-tabs">
                                <li class="active">
                                    <a href="#demo1-home" data-toggle="tab">Input Data</a>
                                </li>
                                <li class="">
                                    <a href="#demo1-profile" data-toggle="tab">Normalisasi</a>
                                </li>
                                <li class="">
                                    <a href="#demo1-profile" data-toggle="tab">Concordance</a>
                                </li>
                                <li class="">
                                    <a href="#demo1-profile" data-toggle="tab">Descordance</a>
                                </li>
                                <li class="">
                                    <a href="#demo1-profile" data-toggle="tab">Matrik</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="demo1-home">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum
                                        massa eget tempus ultricies. Aenean ac justo pharetra, laoreet nisl vel,
                                        vehicula quam. Vestibulum erat massa, congue sit amet sapien nec, ultricies
                                        malesuada est. Proin sit amet quam nisl. Nulla ullamcorper eleifend magna ut
                                        aliquam. Fusce egestas sem ultricies, aliquam nunc eget, ultricies lectus.
                                        Praesent eleifend feugiat odio. Nulla facilisi. Sed sagittis vel metus eu
                                        aliquam. Nulla egestas id sapien dapibus commodo. Integer feugiat nulla sit
                                        amet est dignissim viverra. Quisque et consectetur ipsum, et ullamcorper
                                        lectus. Morbi viverra dapibus rutrum. Praesent lobortis dui at semper
                                        mollis. </p>
                                </div> <!-- / .tab-pane -->
                                <div class="tab-pane fade" id="demo1-profile">
                                    <p>Integer vestibulum massa eget tempus ultricies. Aenean ac justo pharetra,
                                        laoreet nisl vel, vehicula quam. Vestibulum erat massa, congue sit amet
                                        sapien nec, ultricies malesuada est. Proin sit amet quam nisl. Nulla
                                        ullamcorper eleifend magna ut aliquam. Fusce egestas sem ultricies, aliquam
                                        nunc eget, ultricies lectus. Praesent eleifend feugiat odio. Nulla facilisi.
                                        Sed sagittis vel metus eu aliquam. Nulla egestas id sapien dapibus commodo.
                                        Integer feugiat nulla sit amet est dignissim viverra. Quisque et consectetur
                                        ipsum, et ullamcorper lectus. Morbi viverra dapibus rutrum. Praesent
                                        lobortis dui at semper mollis. </p>
                                </div> <!-- / .tab-pane -->
                                <div class="tab-pane fade" id="demo1-dropdown1">
                                    <p>Vestibulum erat massa, congue sit amet sapien nec, ultricies malesuada est.
                                        Proin sit amet quam nisl. Nulla ullamcorper eleifend magna ut aliquam. Fusce
                                        egestas sem ultricies, aliquam nunc eget, ultricies lectus. Praesent
                                        eleifend feugiat odio. Nulla facilisi. Sed sagittis vel metus eu aliquam.
                                        Nulla egestas id sapien dapibus commodo. Integer feugiat nulla sit amet est
                                        dignissim viverra. Quisque et consectetur ipsum, et ullamcorper lectus.
                                        Morbi viverra dapibus rutrum. Praesent lobortis dui at semper mollis.</p>
                                </div> <!-- / .tab-pane -->
                                <div class="tab-pane fade" id="demo1-dropdown2">
                                    <p>Proin sit amet quam nisl. Nulla ullamcorper eleifend magna ut aliquam. Fusce
                                        egestas sem ultricies, aliquam nunc eget, ultricies lectus. Praesent
                                        eleifend feugiat odio. Nulla facilisi. Sed sagittis vel metus eu aliquam.
                                        Nulla egestas id sapien dapibus commodo. Integer feugiat nulla sit amet est
                                        dignissim viverra. Quisque et consectetur ipsum, et ullamcorper lectus.
                                        Morbi viverra dapibus rutrum. Praesent lobortis dui at semper mollis.</p>
                                </div> <!-- / .tab-pane -->
                            </div> <!-- / .tab-content -->
                        </div>
                    </div>

                </div>
                <!-- Footer Start -->
                <?php include_once 'include/footer.php'; ?>
                <!-- Footer End -->
            </div>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->

        </div>
        <!-- End right content -->

    </div>
    <!-- End of page -->
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url('assets/private'); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/jquery-detectmobile/detect.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/ios7-switch/ios7.switch.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/fastclick/fastclick.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/jquery-blockui/jquery.blockUI.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/bootstrap-bootbox/bootbox.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/jquery-sparkline/jquery-sparkline.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/nifty-modal/js/classie.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/nifty-modal/js/modalEffects.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/sortable/sortable.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/bootstrap-select2/select2.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/pace/pace.min.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('assets/private'); ?>/libs/jquery-icheck/icheck.min.js"></script>

    <!-- Demo Specific JS Libraries -->
    <script src="<?= base_url('assets/private'); ?>/libs/prettify/prettify.js"></script>

    <script src="<?= base_url('assets/private'); ?>/js/init.js"></script>
</body>
</html>
