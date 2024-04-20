<?php
$appVersion = "1.0.0";
$pagename = strtolower(basename($_SERVER['PHP_SELF']));

?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">

    <title>V are FAMILY</title>
    <link rel="shortcut icon" type="image/png" href="./favicon.png?v=1.1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <meta name="theme-color" content="#fff">
    <meta name="msapplication-navbutton-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">
    
    <link href="assets/css/app.css?v=<?php echo $appVersion ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script> </script>    
</head>

<body>
<div class="wrapper clearfix">
    <header class="header-main compensate-for-scrollbar">
        <div class="container-fluid px-3">
           <div class="row align-items-center">
               <div class="col-auto header-logo">
                    <a href="./" class="logo">
                        <img src="assets/images/logo.png" alt="V are FAMILY">
                    </a>                  
               </div>               
               <div class="col">
                    <div class="header-nav">
                        <div class="row align-items-center justify-content-end">
                             <div class="col-auto">
                                    <div div class="btn-group">
                                        <button type="button" class="btn user-btn d-flex p-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="u-img bg-secondary">
                                                A
                                                <!-- <img src="assets/images/user-icon.jpg" alt="Hi Admin"> -->
                                            </span>
                                            <span class="u-name">Hi Admin</span> 
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li class="d-xl-none"><span class="fw-medium dropdown-item-text">Hi Admin</span></li>
                                            <li class="d-xl-none"><hr class="dropdown-divider"></li>
                                            <li><button class="dropdown-item" type="button">Change Password</button></li>
                                            <li><button class="dropdown-item" type="button">Logout</button></li>
                                        </ul>
                                    </div>
                             </div>
                        </div>
                    </div>
               </div>
               <div class="col-auto d-xl-none ps-0">
                   <button class="btn px-2 menu-toggle">
                      <i class="icon-hamburger"></i>
                   </button>
               </div>
           </div>
        </div>
    </header>
    <main class="main container-fluid">
      <div class="row">
            <aside class="sidebar col-auto">
                <div class="main-nav">
                    <ul class="m-0 list-unstyled">
                        <li class="active">
                            <a href=""><i class="icon-dashboard"></i> <span>Dashboard</span></a>
                        </li>                    
                        <li>
                            <a href="javascript:void(0)"><i class="icon-property"></i> <span>Property Management</span></a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="add-property.php">Add Property</a></li>
                                    <li><a href="manage-properties.php">Manage Properties</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="icon-booking"></i> <span>Bookings</span></a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="new-booking.php">New Booking</a></li>
                                    <li><a href="all-bookings.php">All Bookings</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="icon-tools"></i> <span>Tools</span></a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="coupons.php">Coupons</a></li>
                                    <li><a href="website-markup.php">Website Markup</a></li>
                                    <li><a href="quoting-tool.php">Quoting Tool</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="icon-report"></i> <span>Reports & DB</span></a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="invoices.php">Invoices</a></li>
                                    <li><a href="guest-database.php">Guest Database</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="icon-settings"></i> <span>Masters</span></a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="users.php">Users</a></li>
                                    <li><a href="locations.php">Locations</a></li>
                                    <li><a href="state.php">State</a></li>
                                    <li><a href="taxes.php">Taxes</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="icon-cms"></i> <span>CMS</span></a>
                            <div class="submenu">
                                <ul>
                                    <li><a href="homepage.php">Homepage</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="faq.php">Faq's</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="content-wrap col">

