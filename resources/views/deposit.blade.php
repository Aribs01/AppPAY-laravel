@extends('layouts.master')

@section('title', 'AppPAY')

@section('content')

<!-- Dashboard Content================================================== -->
    <div class="dashboard-content-container" data-simplebar>
        <div class="dashboard-content-inner">

            <!-- Dashboard Headline -->
            <div class="dashboard-headline">
                <h3>Deposit</h3>
            </div>

            <!-- Row -->
            <div class="row">

                <!-- Dashboard Box -->
                <div class="col-xl-12">
                    <div class="dashboard-box margin-top-0">

                        <!-- Headline -->
                        <div class="content">
                            <ul class="dashboard-box-list">
                                <li>
                                    <!-- Coupon -->
                                    <div class="section-flow width-adjustment">

                                        <!-- Coupon Details -->
                                        <div class="section-flow-details">

                                            <!-- Details -->
                                            <div class="section-flow-description">
                                                <h3 class="section-flow-title"><a href="#">Make a new Deposit</a></h3>

                                                <!-- Coupon Footer -->
                                                <div class="section-flow-footer">
                                                    <ul>
                                                        <li><i class="icon-material-outline-access-time"></i> 25 days since last deposit</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form action="/deposit" method="POST">
                                        <input type="number" name="amount" placeholder="₦ 0.00">
                                        <div class="buttons-to-left always-visible">
                                            {{ csrf_field() }}
                                            <button class="button ripple-effect" type="submit">New Deposit</button>
                                        </div>
                                    </form>
                                </li>

                                <li>
                                    <!-- Coupon -->
                                    <div class="section-flow width-adjustment">

                                        <!-- Coupon Details -->
                                        <div class="section-flow-details">

                                            <!-- Details -->
                                            <div class="section-flow-description">
                                                <h3 class="section-flow-title"><a href="#">Browse Previous Deposits</a></h3>

                                                <!-- Coupon Footer -->
                                                <div class="section-flow-footer">
                                                    <ul>
                                                        <li><i class="icon-material-outline-access-time"></i> 12 of 50 used</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Row / End -->
        </div>
    </div>
    <!-- Dashboard Content / End -->
    @stop