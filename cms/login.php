<?php
$appVersion = "1.0.3";
$pagename = strtolower(basename($_SERVER['PHP_SELF']));

?>
<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">

    <title>V are FAMILY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <meta name="theme-color" content="#fff">
    <meta name="msapplication-navbutton-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">
    <link rel="shortcut icon" type="image/png" href="favicon.png?v=1.2">
    <link href="./assets/css/app.css?v=<?php echo $appVersion ?>" rel="stylesheet">
       
    <script> </script>    
</head>
<body class="login-page" style="background-image: url(./assets/images/login-bg.jpg);">
  <div class="wrapper">
      <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-lg-auto">
                <div class="form-box d-flex login-form" style="background-image: url(./assets/images/logo-bg.png)">
                    <div class="my-auto col-12 py-5">
                        <div class="form-logo mb-5 pb-1">
                            <img src="./assets/images/logo.png" alt="V are FAMILY">
                        </div>
                        <form action="#">
                            <div class="form-group mb-4">
                                <input type="text" placeholder="Username" class="form-control form-control-lg bg-transparent">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" placeholder="Password" class="form-control form-control-lg bg-transparent">
                            </div>                        
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg w-100">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>            
        </div>
      </div>
   </div>
</body>
</html>