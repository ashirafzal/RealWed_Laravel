<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Couple Dashboard - Add New Guest</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/offcanvas.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="body-bg">
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
                                            @foreach ($users as $user)
                                                <img src="userimage/{{$user->userimage}}" alt="" class="rounded-circle mb10">
                                            @endforeach
                                        </span>
                                        <span class="user-vendor-name"><?php echo Session::get('username'); ?>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="/coupledashboard">Dashboard</a>
                                        <a class="dropdown-item" href="wishlist">My Wishlist </a>
                                        <a class="dropdown-item" href="todo-list">To Do List</a>
                                        <a class="dropdown-item" href="couple-budget">Budget</a>
                                        <a class="dropdown-item" href="couple-guestlist">Guestlist </a>
                                        <a class="dropdown-item" href="couple-table-planner">Seating Table </a>
                                        <a class="dropdown-item" href="couple-profile">My Profile </a>
                                        <a class="dropdown-item" href="/logout">Log Out </a>
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
                    <img src="userimage/{{$user->userimage}}" alt="" class="rounded-circle mb10">
                @endforeach
                </div>
                <h3 class="vendor-profile-name"><?php echo Session::get('username'); ?></h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li class="active"><a href="/coupledashboard"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="wishlist"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li><a href="todo-list"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li><a href="couple-budget"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
                    <li><a href="couple-guestlist"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li>
                    <li><a href="couple-table-planner"><span class="dash-nav-icon"><i class="fas fa-table"></i></span>Seating Table </a></li>
                    <li><a href="couple-website"><span class="dash-nav-icon"><i class="fas fa-link"></i></span>Wedding Website </a></li>
                    <li><a href="RealWedding"><span class="dash-nav-icon"><i class="fas fa-images"></i></span>Real Wedding </a></li>
                    <li><a href="couple-profile"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="/logout"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Log Out </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Add New Guest</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="single-guest-tab" data-toggle="tab" href="#single-guest" role="tab" aria-controls="single-guest" aria-selected="true">Single Guest</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="couple-guest-tab" data-toggle="tab" href="#couple-guest" role="tab" aria-controls="couple-guest" aria-selected="false">Couple </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="household-tab" data-toggle="tab" href="#household" role="tab" aria-controls="household" aria-selected="false">Household</a>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="single-guest" role="tabpanel" aria-labelledby="single-guest-tab">
                                <form id="single_guest">
                                    <div class="alert alert-danger alert-block" id="danger_msg" style="display:none;">
                                    </div>
                                    <div class="alert alert-success alert-block" id="success_msg" style="display:none;">
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h4>Guest Information</h4>
                                            </div>                       
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="fname">First Name</label>
                                                    <input id="fname" name="fname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="lname">Last Name</label>
                                                    <input id="lname" name="lname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h4>Relation with couple</h4>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="family" >Group/Family</label>
                                                    <select class="wide" name="family" id="family">
                                                        <option value="Groom Sister">Groom Sister</option>
                                                        <option value="Bride Friend">Bride Friend</option>
                                                        <option value="Groom Friend">Groom Friend</option>
                                                        <option value="Bride Family">Bride Family</option>
                                                        <option value="Groom Family">Groom Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h4>Contact Information</h4>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address1">Address Line 1</label>
                                                    <input id="address" name="address" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address2">Address Line 2</label>
                                                    <input id="address2" name="address2" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Email</label>
                                                    <input id="email" name="email" type="email" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="city1">City</label>
                                                    <select class="wide" name="city" id="city">
                                                        <option value="Karachi">Karachi</option>
                                                        <option value="Lahore">Lahore</option>
                                                        <option value="Islamabad">Islamabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="country">Country</label>
                                                    <select class="wide" name="country" id="country">
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="UK">UK</option>
                                                        <option value="US">US</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="postcode">Postcode</label>
                                                    <input id="postcode" name="postcode" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Save Guest Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="couple-guest" role="tabpanel" aria-labelledby="couple-guest-tab">
                                <form id="couple_guest">
                                    <div class="alert alert-danger alert-block" id="couple_danger_msg" style="display:none;">
                                    </div>
                                    <div class="alert alert-success alert-block" id="couple_success_msg" style="display:none;">
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h3>Guest Information</h3>
                                                <hr>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="firstname">First Name</label>
                                                    <input id="couple_firstname" name="couple_firstname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="lastname">Last Name</label>
                                                    <input id="couple_lastname" name="couple_lastname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="partnerfname">Partner First Name</label>
                                                    <input id="couple_partnerfname" name="couple_partnerfname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="partnerlname">Partner Last Name</label>
                                                    <input id="couple_partnerlname" name="couple_partnerlname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label"  id="family2" >Group/Family</label>
                                                    <select class="wide" id="couple_group" name="couple_group" for="family2">
                                                        <option value="Groom Sister">Groom Sister</option>
                                                        <option value="Bride Friend">Bride Friend</option>
                                                        <option value="Groom Friend">Groom Friend</option>
                                                        <option value="Bride Family">Bride Family</option>
                                                        <option value="Groom Family">Groom Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h3>Contact Information</h3>
                                                <hr>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address3">Address Line 1</label>
                                                    <input id="couple_address" name="couple_address" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address4">Address Line 2</label>
                                                    <input id="couple_address2" name="couple_address2" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="emailsecond">Email</label>
                                                    <input id="couple_email" name="couple_email" type="email" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="city1">City</label>
                                                    <select class="wide" name="couple_city" id="couple_city">
                                                        <option value="Karachi">Karachi</option>
                                                        <option value="Lahore">Lahore</option>
                                                        <option value="Islamabad">Islamabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="country">Country</label>
                                                    <select class="wide" name="couple_country" id="couple_country">
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="UK">UK</option>
                                                        <option value="US">US</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="postcode1">Postcode</label>
                                                    <input id="couple_postcode" name="couple_postcode" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Save Guest Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="household" role="tabpanel" aria-labelledby="household-tab">
                                <form id="household_guest">
                                    <div class="alert alert-danger alert-block" id="household_danger_msg" style="display:none;">
                                    </div>
                                    <div class="alert alert-success alert-block" id="household_success_msg" style="display:none;">
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h3>Guest Information</h3>
                                                <hr>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="row">
                                                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="fname">First Name</label>
                                                            <input id="household_fname" name="household_fname" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="lname">Last Name</label>
                                                            <input id="household_lname" name="household_lname" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <!--
                                                    <div class="col-xl-2">
                                                        <button class="btn btn-primary mt30"> Delete</button>
                                                    </div>
                                                    -->
                                                </div>
                                            </div>
                                            <!--
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <a href="#" class="btn btn-default">Add New Row</a>
                                            </div>
                                            -->
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mt30 mb30">
                                                <div class="form-group">
                                                    <label class="control-label" for="family">Group/Family</label>
                                                    <select class="wide" name="household_family" id="household_family">
                                                        <option value="Groom Sister">Groom Sister</option>
                                                        <option value="Bride Friend">Bride Friend</option>
                                                        <option value="Groom Friend">Groom Friend</option>
                                                        <option value="Bride Family">Bride Family</option>
                                                        <option value="Groom Family">Groom Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h3>Contact Information</h3>
                                                <hr>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address">Address Line 1</label>
                                                    <input id="household_address" name="household_address" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address6">Address Line 2</label>
                                                    <input id="household_address2" name="household_address2" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Email</label>
                                                    <input id="household_email" name="household_email" type="email" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="city">City</label>
                                                    <select class="wide" name="household_city" id="household_city">
                                                        <option value="Karachi">Karachi</option>
                                                        <option value="Lahore">Lahore</option>
                                                        <option value="Islamabad">Islamabad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="country">Country</label>
                                                    <select class="wide" name="household_country" id="household_country">
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="UK">UK</option>
                                                        <option value="US">US</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="postcode">Postcode</label>
                                                    <input id="household_postcode" name="household_postcode" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Save Guest Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script>
        jQuery(document).ready(function(){
            /* Single Guest */
            jQuery('#single_guest').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $(".alert-danger").css('display','none');
              $(".alert-success").css('display','none');

                    if ($.trim($("#fname").val()) === "" || $.trim($("#lname").val()) === "" ||
                        $.trim($("#address").val()) === "" || $.trim($("#email").val()) === "" || 
                        $.trim($("#city").val()) === "" || $.trim($("#country").val()) === "" ||
                        $.trim($("#postcode").val()) === "" ){
                            $(".alert-danger").css('display','block');
                            $(".alert-danger").html('Text feilds cannot be blank');
                        }
                        else{                                    
                            var formData = new FormData($('#single_guest')[0]);

                            jQuery.ajax({
                            url: "{{ url('single-guestlist-submit') }}",
                            method: 'post',
                            data:   formData,
                            cache:  false,
                            
                            processData: false,
                            contentType: false, 
                                success: function(result){
                                    $(".alert-success").css('display','block');
                                    $(".alert-success").html('Guest list submitted successful.');
                                }
                            });                                                                              
                        }                                                                 
                    });
                });
    </script>
    <script>
        jQuery(document).ready(function(){
            /* Couple Guest */
            jQuery('#couple_guest').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $("#couple_danger_msg").css('display','none');
              $("#couple_success_msg").css('display','none');

                    if ($.trim($("#couple_firstname").val()) === "" || $.trim($("#couple_lastname").val()) === "" ||
                        $.trim($("#couple_partnerfname").val()) === "" || $.trim($("#couple_partnerlname").val()) === "" ||
                        $.trim($("#couple_group").val()) === "" || $.trim($("#couple_address").val()) === "" ||
                        $.trim($("#couple_email").val()) === "" || $.trim($("#couple_city").val()) === "" ||
                        $.trim($("#couple_country").val()) === "" || $.trim($("#couple_postcode").val()) === ""){
                            $("#couple_danger_msg").css('display','block');
                            $("#couple_danger_msg").html('Text feilds cannot be blank');
                        }
                        else{                                    
                            var formData = new FormData($('#couple_guest')[0]);

                            jQuery.ajax({
                            url: "{{ url('couple-guestlist-submit') }}",
                            method: 'post',
                            data:   formData,
                            cache:  false,
                            
                            processData: false,
                            contentType: false, 
                                success: function(result){
                                    $("#couple_success_msg").css('display','block');
                                    $("#couple_success_msg").html('Couple guest list submitted successful.');
                                }
                        });                                                                              
                    }                                                                 
                });
            });
    </script>
     <script>
        jQuery(document).ready(function(){
            /* Household Guest */
            jQuery('#household_guest').submit(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

              $("#household_danger_msg").css('display','none');
              $("#household_success_msg").css('display','none');

                    if ($.trim($("#household_fname").val()) === "" || $.trim($("#household_lname").val()) === "" ||
                        $.trim($("#household_family").val()) === "" || $.trim($("#household_address").val()) === "" ||
                        $.trim($("#household_email").val()) === "" || $.trim($("#household_city").val()) === "" ||
                        $.trim($("#household_country").val()) === "" || $.trim($("#household_postcode").val()) === ""){
                            $("#household_danger_msg").css('display','block');
                            $("#household_danger_msg").html('Text feilds cannot be blank');
                        }
                        else{                                    
                            var formData = new FormData($('#household_guest')[0]);

                            jQuery.ajax({
                            url: "{{ url('household-guestlist-submit') }}",
                            method: 'post',
                            data:   formData,
                            cache:  false,
                            
                            processData: false,
                            contentType: false, 
                                success: function(result){
                                    $("#household_success_msg").css('display','block');
                                    $("#household_success_msg").html('Household guest list submitted successful.');
                                }
                        });                                                                              
                    }                                                                 
                });
            });
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/menumaker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <script src="{{ asset('js/custom-script.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
</body>
</html>