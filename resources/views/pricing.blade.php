<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Vendor Dashboard - Pricing </title>
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{ asset('fontawesome/css/fontawesome-all.css') }}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{ asset('fontello/css/fontello.css') }}" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <!-- Style CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-bg">
    @foreach($users as $user)
    <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <nav class="navbar navbar-expand-lg float-right db-nav-list">
                        <div>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropleft notification ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="notification-icon"> <i class="fas fa-bell"></i></span><span class="user-vendor-name"></span></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                        <li>
                                            <div class="notification-title"> Notification</div>
                                            <div class="notification-list">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action active">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="{{ asset('images/avatar-2.jpg') }}" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                                        </li>
                                    </ul>
                                </li>
                           <li class="nav-item dropdown dropleft user-vendor ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="user-icon">
                                        <img src="{{ asset('userimage') }}/{{$user->userimage}}" alt="" class="rounded-circle mb10">
                                    </span>
                                    <span class="user-vendor-name"><?php {{ echo $username = Session::get('username'); }} ?></span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                        <a class="dropdown-item" href="mylisting"> My Listed Item </a>
                                        <a class="dropdown-item" href="pricing">Pricing Plan</a>
                                        <a class="dropdown-item" href="requestquote-view">Request Quotes</a>
                                        <a class="dropdown-item" href="Reviews">Reviews </a>
                                        <a class="dropdown-item" href="myprofile">My Profile </a>
                                        <a class="dropdown-item" href="/logout">Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar offcanvas-collapse">
        <div class="vendor-user-profile">
                <div class="vendor-profile-img">
                @foreach ($users as $user)
                    <img src="userimage/{{$user->userimage}}" alt="" class="rounded-circle"></div>
                @endforeach
                <h3 class="vendor-profile-name"><?php echo Session::get('username'); ?></h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li class="active"><a href="/dashboard"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="mylisting"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a>
                    <li><a href="pricing"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>
                    <li><a href="requestquote-view"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <li><a href="Reviews"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    <li><a href="myprofile"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="/logout"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Pricing Plan</h3>
                            <p>Choose wisely your pricing plan.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb0">Plan Type:</h5>
                                <p>Free - Basic</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb0">Time Duration </h5>
                                <p>Started: Aug 18, 2018 - <span class="text-danger">Expired: Aug 18, 2019</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb0"> Status </h5>
                                <p><span class="dot-badge badge-success"></span> Active</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-pricing">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 col-12">
                            <div class="pricing-box pricing-basic">
                                <!-- pricing box -->
                                <a href="#" class="dashboard-price-badge badge badge-success">Current Active</a>
                                <h4 class="pricing-name">Basic</h4>
                                <div class="price">FREE</div>
                                <div class="price-feature">
                                    <ul class="listnone">
                                        <li>One Listing</li>
                                        <li><strong>30 Days </strong> Availability</li>
                                        <li>Standard Listing</li>
                                        <li>Limited Support</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-primary">Get One Month Free</a>
                            </div>
                            <!-- /.pricing box -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 col-12">
                            <div class="pricing-box pricing-standard">
                                <!-- pricing box -->
                                <h4 class="pricing-name">standard</h4>
                                <div class="price"><span class="price-sign">$</span> 10</div>
                                <div class="price-feature">
                                    <ul class="listnone">
                                        <li>10 Listing</li>
                                        <li>Unlimited Availability</li>
                                        <li>Featured In the Results</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-white">Select Plan</a>
                            </div>
                            <!-- /.pricing box -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 col-12">
                            <div class="pricing-box pricing-premium">
                                <!-- pricing box -->
                                <h4 class="pricing-name">premium</h4>
                                <div class="price"><span class="price-sign">$</span> 30</div>
                                <div class="price-feature">
                                    <ul class="listnone">
                                        <li>Unlimited Listings</li>
                                        <li>Unlimited Availability</li>
                                        <li>Featured In Top 10 Results</li>
                                        <li>24/7 Priority Support</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-primary">Select Plan</a>
                            </div>
                            <!-- /.pricing box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/menumaker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>   
    @endforeach
</body>
</html>