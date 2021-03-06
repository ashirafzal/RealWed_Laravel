@extends('layouts.vendor_dashboard_layout')

@section('content')
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
@endsection