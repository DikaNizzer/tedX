<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Administrator TedXUnair</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="admin/login/assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="admin/login/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="admin/login/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="admin/login/assets/css/slicknav.css">
    <link rel="stylesheet" href="admin/login/assets/css/flaticon.css">
    <link rel="stylesheet" href="admin/login/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="admin/login/assets/css/gijgo.css">
    <link rel="stylesheet" href="admin/login/assets/css/animate.min.css">
    <link rel="stylesheet" href="admin/login/assets/css/animated-headline.css">
	<link rel="stylesheet" href="admin/login/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="admin/login/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="admin/login/assets/css/themify-icons.css">
	<link rel="stylesheet" href="admin/login/assets/css/slick.css">
	<link rel="stylesheet" href="admin/login/assets/css/nice-select.css">
	<link rel="stylesheet" href="admin/login/assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="admin/login/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


<main class="login-body" data-vide-bg="admin/login/assets/img/login-bg.mp4">
    <!-- Login Admin -->
    <form class="form-default" action="/login" method="POST" >
        @csrf
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="admin/login/assets/img/logo/loder.png" alt=""></a>
            </div>
            <h2>Login Here</h2>
            <div class="form-input">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" id="email" required autofocus>
            </div>
            <div class="form-input">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" id="password" required>
            </div>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="login">
            </div>
            <a href="#" class="form-input pt-30">Login</a>
            <!-- Forget Password -->
            {{-- <a href="#" class="forget">Forget Password</a> --}}
            <!-- Forget Password -->
            {{-- <a href="/regis" class="registration">Registration</a> --}}
        </div>
    </form>
    <!-- /end login form -->
</main>


    <script src="./admin/login/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./admin/login/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./admin/login/assets/js/popper.min.js"></script>
    <script src="./admin/login/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./admin/login/assets/js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <script src="./admin/login/assets/js/jquery.vide.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./admin/login/assets/js/owl.carousel.min.js"></script>
    <script src="./admin/login/assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./admin/login/assets/js/wow.min.js"></script>
    <script src="./admin/login/assets/js/animated.headline.js"></script>
    <script src="./admin/login/assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./admin/login/assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./admin/login/assets/js/jquery.nice-select.min.js"></script>
    <script src="./admin/login/assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./admin/login/assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./admin/login/assets/js/jquery.counterup.min.js"></script>
    <script src="./admin/login/assets/js/waypoints.min.js"></script>
    <script src="./admin/login/assets/js/jquery.countdown.min.js"></script>
    <script src="./admin/login/assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./admin/login/assets/js/contact.js"></script>
    <script src="./admin/login/assets/js/jquery.form.js"></script>
    <script src="./admin/login/assets/js/jquery.validate.min.js"></script>
    <script src="./admin/login/assets/js/mail-script.js"></script>
    <script src="./admin/login/assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./admin/login/assets/js/plugins.js"></script>
    <script src="./admin/login/assets/js/main.js"></script>
    
    <script>
        let msg = '{{Session::get('alert')}}';
        let loginErrMsg = '{{Session::get('loginErr')}}';

        let exist = '{{Session::has('alert')}}';
        let existLoginErr = '{{Session::has('loginErr')}}';
        
        if(exist){
            alert(msg);
        }

        if(existLoginErr){
            alert(loginErrMsg);
        }

    </script>

    </body>
</html>