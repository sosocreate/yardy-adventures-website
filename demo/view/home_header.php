<?php
   if(!isset($title)){
       $title = "Yardy Adventures";
   }
?>
<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title ?></title>
    <meta name="title" Content="Yardy Adventures - Home">

<meta name="description" content="Explore the natural wonders of Yardy River Adventures. Join us for eco-culture tours, immersive nature experiences, and thrilling adventures in Jamaica's pristine landscapes. Perfect for nature lovers and eco-adventurers.">
<meta name="keywords" content="Yardy River Adventures, eco-tourism, nature tours Jamaica, eco-culture tours, adventure tours, nature lovers, eco-adventures, Jamaica attractions, Roaring River, Cabaritta River, eco-friendly tourism, Jamaica adventure tours">

    <link rel="shortcut icon" href="https://yardyadventures.com/demo/assets/images/general/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="https://yardyadventures.com/demo/assets/images/general/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Yardy Adventures - Home">
    
    <meta itemprop="name" content="Yardy Adventures - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="https://yardyadventures.com/demo/assets/images/general/default.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Yardy Adventures">
    <meta property="og:description" content="Explore the natural wonders of Yardy River Adventures. Join us for eco-culture tours, immersive nature experiences, and thrilling adventures in Jamaica's pristine landscapes. Perfect for nature lovers and eco-adventurers.">
    <meta property="og:image" content="https://yardyadventures.com/demo/assets/images/general/default.png">
    <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1180">
    <meta property="og:image:height" content="600">
    <meta property="og:url" content="https://yardyadventures.com/test">
    
    <meta name="twitter:card" content="summary_large_image">
      <!-- all css link -->
      
    <!-- Bootstrap CSS -->
    <link href="https://yardyadventures.com/demo/assets/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://yardyadventures.com/demo/assets/common/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/common/css/line-awesome.min.css">
    
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/presets/default/css/magnific-popup.css">
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/presets/default/css/slick.css">
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/presets/default/css/odometer.css">
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/presets/default/css/animate.min.css">
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/presets/default/css/datepicker.min.css">
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/presets/default/css/lightcase.css">
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/admin/css/select2.min.css">
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/presets/default/css/main.css">
    
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/presets/default/css/custom.css">
    <link rel="stylesheet" href="https://yardyadventures.com/demo/assets/presets/default/css/color.php?color=6ee723&secondColor=525CEB">
    
    
    <link href="form-validation.css" rel="stylesheet">    
    <!-- JQuery JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <style>

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    
    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }    
    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0} 
      to {top:0; opacity:1}
    }
    
    @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }
    
    /* The Close Button */
    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    
    .modal-header {
      padding: 2px 16px;
    /*  background-color: #5cb85c; */
      color: white;
    }
    
    .modal-body {padding: 2px 16px;}
    
    .modal-footer {
      padding: 2px 16px;
      /*background-color: #5cb85c;*/
      color: white;
    }
    #snackbar {
      visibility: hidden;
      min-width: 250px;
      margin-left: -125px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 2px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
      font-size: 17px;
    }
    
    #snackbar.show {
      visibility: visible;
      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
      animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }
    
    @-webkit-keyframes fadein {
      from {bottom: 0; opacity: 0;} 
      to {bottom: 30px; opacity: 1;}
    }
    
    @keyframes fadein {
      from {bottom: 0; opacity: 0;}
      to {bottom: 30px; opacity: 1;}
    }
    
    @-webkit-keyframes fadeout {
      from {bottom: 30px; opacity: 1;} 
      to {bottom: 0; opacity: 0;}
    }
    
    @keyframes fadeout {
      from {bottom: 30px; opacity: 1;}
      to {bottom: 0; opacity: 0;}
    }
    </style>  

         
</head>
<body class="ltr">
      <!--////i put this in case i was nagged///-->
    
    <style>
        
   .influencer{
          
          display:none;
          
      }
      
      
      .services{
          
                display:none;
          
      }
      
      
      .banner-section-two .banner-thumb .content h1 span {
          
          background-clip: text !important;
          -webkit-text-fill-color: #795548;
      }
      
      

    </style>
    
    
    


    <!--==================== Preloader Start ====================-->
 <div class="preloader">
    <div class="loader"></div>
  </div>
  <!--==================== Preloader End ====================-->

  <!--==================== Overlay Start ====================-->
  <div class="body-overlay"></div>

  <!--==================== Overlay End ====================-->

  <!--==================== Sidebar Overlay End ====================-->
  <div class="sidebar-overlay"></div>
  <!--==================== Sidebar Overlay End ====================-->

  <!-- ==================== Scroll to Top End Here ==================== -->
  <a class="scroll-top"><i class="fa-solid fa-angle-up"></i></a>
  <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==================== Header End Here ==================== -->

<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5-premium-features/43.0.0/ckeditor5-premium-features.css" />


<div class="header" id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="https://yardyadventures.com/demo">
                <img src="https://yardyadventures.com/demo/assets/images/general/logo_white.png" alt="InfluencerFly">
            </a>
            <button class="navbar-toggler header-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span id="hiddenNav"><i class="las la-bars"></i></span>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-menu mx-auto ps-lg-4 ps-0">

                    
                

                                 <!---           <li class="nav-item ">
                        <a href="https://yardyadventures.com/demo" role="button" aria-current="page" > Home                            <span class="nav-item__icon"><i class="las la-angle-down"></i></span></a>
                       
                    </li>--->
                    
                                   <li class="nav-item">
                            <a href="https://yardyadventures.com/demo" class="nav-link " aria-current="page">Home</a>
                        </li>
                    
                           
                                       
                                            <li class="nav-item">
                            <a href="https://yardyadventures.com/demo/services" class="nav-link " aria-current="page">Services</a>
                        </li>
                    
                                       
                                            <li class="nav-item">
                            <a href="https://yardyadventures.com/demo/adventures" class="nav-link " aria-current="page">Adventures</a>
                        </li>
                    
           
                                            <li class="nav-item">
                            <a href="https://yardyadventures.com/demo/reseller" class="nav-link " aria-current="page">Independent Sellers</a>
                        </li>
                    
                    
                                       
                                            <li class="nav-item">
                            <a href="https://yardyadventures.com/demo/contact" class="nav-link " aria-current="page">Contact Us</a>
                        </li>
                    
                                   </ul>
                <div class="nav-end d-lg-flex d-md-flex d-block align-items-center py-lg-0 py-1">
                    <div class="d-flex mx-2">
                        <div class="icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <select class="select-dir langSel form--select">
                                                        <option value="en"
                                 selected >
                                English
                            </option>
                                                    </select>
                    </div>

                    
                    
                                            <!---<a class="btn--base mt-2 mt-lg-0" href="https://yardyadventures.com/demo/login">Sign In</a>-->
                    
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- ==================== Header End Here ==================== -->

