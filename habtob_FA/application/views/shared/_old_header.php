<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $title; ?> - Habtob Football Academy!</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no" />
        <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/countdown.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_common.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style4.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/camera.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <style>
            @font-face {
                font-family: 'FontAwesome';
                src: url('<?php echo base_url(); ?>assets/fonts/fontawesome-webfont.eot?v=4.0.3');
                src: url('<?php echo base_url(); ?>assets/fonts/fontawesome-webfont.eot?#iefix&v=4.0.3') format('embedded-opentype'), url('<?php echo base_url(); ?>assets/fonts/fontawesome-webfont.woff?v=4.0.3') format('woff'), url('<?php echo base_url(); ?>assets/fonts/fontawesome-webfont.ttf?v=4.0.3') format('truetype'), url('<?php echo base_url(); ?>assets/fonts/fontawesome-webfont.svg?v=4.0.3#fontawesomeregular') format('svg');
                font-weight: normal;
                font-style: normal;
            }
        </style>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/superfish.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.ui.totop.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.equalheights.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.mobilemenu.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/camera.js"></script>
        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="<?php echo base_url(); ?>assets/js/jquery.mobile.customized.min.js"></script>
        <!--<![endif]-->
        <script>
            $(document).ready(function(){
                jQuery('#camera_wrap').camera({
                    loader: false,
                    pagination: false ,
                    minHeight: '444',
                    thumbnails: false,
                    height: '27.86458333333333%',
                    caption: true,
                    navigation: true,
                    fx: 'simpleFade'
                });
                $().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>
        <!--[if lt IE 8]>
                <div style=' clear: both; text-align:center; position: relative;'>
                        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                                <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                        </a>
                </div>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <link rel="stylesheet" media="screen" href="css/ie.css">
        <![endif]-->
    </head>
    <body class="page1" id="top">
        <div class="main">
<!--==============================header=================================-->
            <header>
                <div class="container_12">
                    <div class="grid_12">
                        <div class="socials">
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-google-plus"></a>
                            <a href="#" class="fa fa-instagram"></a>
                        </div>
                        <h1>
                            <a href="index.html">
                                <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Your Happy Family">
                            </a>
                        </h1>
                        <div class="menu_block">
                            <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                                <ul class="sf-menu">
                                    <li class="current"><a href="index.html">Home</a></li>
                                    <li><a href="index-1.html">Our Squad</a></li>
                                    <li><a href="index-2.html">Match Calendar</a></li>
                                    <li><a href="index-3.html">Gallery</a></li>
                                    <li><a href="index-3.html">Fan zone</a></li>
                                    <li><a href="index-3.html">Partners</a></li>
                                    <li><a href="index-4.html">About Us</a></li>
                                </ul>
                            </nav>
                            <div class="clear"></div>
                        </div>
                    </div>
                        <div class="clear"></div>
                </div>
            </header>
            <div class="slider_wrapper">
                <div id="camera_wrap" class="">
                    <div data-src="<?php echo base_url(); ?>assets/images/slide.jpg">
                        <div class="caption fadeIn">
                            Run for Your Health
                        </div>
                    </div>
                    <div data-src="<?php echo base_url(); ?>assets/images/slide1.jpg">
                        <div class="caption fadeIn">
                            Fast as Wind
                        </div>
                    </div>
                    <div data-src="<?php echo base_url(); ?>assets/images/slide2.jpg">
                        <div class="caption fadeIn">
                            Never Stop
                        </div>
                    </div>
                </div>
            </div>
<!--==============================Content=================================-->