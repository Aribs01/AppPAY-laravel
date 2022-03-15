@extends('layouts.master')

@section('title', 'AppPAY')

@section('content')

<!-- Dashboard Content================================================== -->
<div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner">

        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>₦{{ $deposit->amount }}</h3>
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
                                            <h3 class="section-flow-title"><a href="#">Details</a></h3>

                                            <!-- Coupon Footer -->
                                            <div class="section-flow-footer">
                                                <ul>
                                                    <li><i class="icon-material-outline-access-time"></i>Amount Deposited at {{ $deposit->created_at }}</li>
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