<?php
    $appVersion = "1.0.1";
    $pagename = strtolower(basename($_SERVER['PHP_SELF']));
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">

    <title>V are FAMILY</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" charset="utf-8" href="./assets/css/app.css?v=<?php echo $appVersion; ?>">
    <script> </script>    

</head>
<body class="<?php echo ($pagename == 'index.php') ? 'home-page':'inner-page'; echo ($pagename == 'property-details.php') ? ' details':'';?> ">
<div class="wrapper">
   <main class="main">
        <header class="header-main px-xl-3 <?php echo ($pagename == 'index.php') ? 'home-page':'header-page';?>">  
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col">
                        <a class="logo" href="./">
                            <img src="./assets/images/logo.png" alt="V are Family">
                        </a>
                    </div>
                    <div class="col">
                        <a id="b1" href="javascript:void(0)" class="hm float-end d-xl-none">
                            <svg id="i1" class="hamburger" viewBox="0 0 100 100">
                                <path class="top-line-1" d="M30,37 L70,37"></path>
                                <path class="middle-line-1" d="M30,50 L70,50"></path>
                                <path class="bottom-line-1" d="M30,63 L70,63"></path>
                            </svg>
                        </a>
                        <div class="main-nav">
                            <ul class="nav flex-xl-nowrap">
                                <li class="active">
                                    <a href="#">DESTINATION</a>
                                    <div class="submenu">
                                        <ul>
                                            <li><a href="properties.php">GOA</a></li>
                                            <li><a href="properties.php">KASAULI HILLS</a></li>
                                            <li><a href="properties.php">MUSSOORIE</a></li>
                                            <li><a href="properties.php">NAINITAL HILLS</a></li>
                                            <li><a href="properties.php">TARUDHAN VALLEY</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">SPECIAL INVITATIONS</a>
                                </li>
                                <li>
                                    <a href="join-our-network.php">JOIN OUR NETWORK</a>
                                </li>
                                <li>
                                    <a href="blog.php">BLOGS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col d-none d-xl-block">
                        <div class="dropdown header-call float-end">
                            <button class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,45"><i class="icon-phone-call"></i> <span>CALL NOW</span></button>
                            <ul class="dropdown-menu call-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="tel:+91 98100 74777">
                                        Central Reservation
                                        <strong>+91 98100 74777</strong>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="tel:+91 98102 34577">
                                        Goa
                                        <strong>+91 98102 34577</strong>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="tel:+91 98102 80977">
                                        Himachal Pradesh
                                        <strong>+91 98102 80977</strong>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="tel:+91 98102 80977">
                                        Uttarakhand
                                        <strong>+91 92057 34577</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>


