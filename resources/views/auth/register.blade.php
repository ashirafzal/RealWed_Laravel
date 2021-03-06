<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="wedding vendor directory HTML template">

    <title> RealWed - Register </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!-- OwlCarosuel CSS -->
    <link href="css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <![endif]-->
</head>

<body>
    <!-- header -->
    <div class="header">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                        <div class="header-text">
                            <p class="wlecome-text">Welcome to Wedding Directory HTML Template.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                        <div class="header-text text-right">
                            <p>Are You Vendor?<a href="/sigin" class="text-white">List Your Business</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.header-top -->
        <!-- navigation start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg navbar-classic">
                        <a class="navbar-brand" href="/"> <img src="images/logo.png" alt=""></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-classic">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="\" id="menu-1">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Vendors
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-2">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item" href="/list">Listing</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/vendor-by-category">
                                                Vendor By Categories</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/vendor-by-location">
                                                Vendor By Locations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Supplier
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-3">
                                        <li><a class="dropdown-item" href="/Dresses" title="">Dresses</a></li>
                                        <li><a class="dropdown-item" href="#" title="">Cakes</a></li>
                                        <li><a class="dropdown-item" href="#" title="">Florist</a></li>
                                        <li><a class="dropdown-item" href="#" title="">Photographers</a></li>
                                        <li><a class="dropdown-item" href="#" title="">Videographer</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="menu-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blogs
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- navigation close -->
    </div>
    <!-- /.header -->
    <!-- hero-section -->
    <div class="hero-section">
        <div class="container">
            <div class="row bg-white py-4">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head">
                            <h2 class="search-head-title text-dark my-2">Find Local Wedding Vendors</h2>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-dark">Browse the best wedding vendors in your area — from venues and photographers, to wedding planners, caterers, florists and more by registering yourself.</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf 
                            <div class="form-group">
                                <label for="name" class="text-dark">{{ __('Name') }}</label>
                            </div>
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-dark">{{ __('E-Mail Address') }}</label>
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">{{ __('Password') }}</label>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="text-dark">{{ __('Confirm Password') }}</label>
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                            <button type="submit" class="btn btn-danger text-uppercase">
                                {{ __('Register') }}
                            </button>
                        </form>
                        <!-- /.search-form -->
                        <br />
                        <!-- Sign in text -->
                        <div class="text-center search-head">
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-dark">Already have an account ?
                                <a class="text-dark" href="login"> Sign in</a>
                            </p>
                        </div>
                        <!-- /. Sign in text -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->
    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.social-media-section -->
    <!-- footer-section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- footer-widget -->
                    <div class="footer-widget">
                        <a href="#"><img src="images/footer-logo.png" alt="" class="mb20"></a>
                        <p class="mb10">Vestibulum ante elit, convallis quis nibh in, vulputate rhoncus massa. In hac habitasse platea dictumst.</p>
                        <p>In hac habitasse platea dictumst simple dummy content here.</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            Contact Address
                        </h3>
                        <p>4998 Elk Creek Road Canton,
                            <br> GA 30114
                        </p>
                        <p class="mb0 text-default">+0-800-1234-123</p>
                        <p class="mb0 text-default">info@realwed.com</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            About Company
                        </h3>
                        <ul class="listnone">
                            <li><a href="/about-us">About us</a></li>
                            <li><a href="/contact-us">Contact us</a></li>
                            <li><a href="/faq">Faq</a></li>
                            <li><a href="#">Pricing Plan</a></li>
                            <li><a href="#">Meet The Team</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- /.footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            List you Business
                        </h3>
                        <p>Are you vendor ? List your venue and service get more from listing business.</p>
                        <a href="login" class="btn btn-default">List your Business</a>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
        </div>
    </div>
    <!-- tiny-footer-section -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <p>© 2018 RealWed. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny-footer-section -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl-carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- nice-select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
</body>

</html>