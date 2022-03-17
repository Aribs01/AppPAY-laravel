@extends('layouts.master')

@section('title', 'AppPAY')

@section('content')
<!-- Dashboard Content
================================================== -->
<div class="dashboard-content-container" data-simplebar>
    <div class="dashboard-content-inner">

        <!-- Dashboard Headline -->
        <div class="dashboard-headline">
            <h3>Hello, USER!</h3>

        <!-- Fun Facts Container -->
        <div class="fun-facts-container">
            <div class="fun-fact" data-fun-fact-color="#79C142">
                <div class="fun-fact-text">
                    <span>Total Number of Deposits</span>
                    <h4>{{$count}}</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-feather-layers"></i></div>
            </div>
            <div class="fun-fact" data-fun-fact-color="#4F5B64">
                <div class="fun-fact-text">
                    <span>Cash</span>
                    <h4>{{$sum}}</h4>
                </div>
                <div class="fun-fact-icon"><i class="icon-feather-layers"></i></div>
            </div>

            <div></div>

        </div>

        <!-- Row -->
        <div class="row">

            <!-- Dashboard Box -->
            <div class="col-xl-6">
                <div class="dashboard-box">
                    <div class="headline">
                        <h3><i class="icon-material-baseline-notifications-none"></i> Activities</h3>
                    </div>
                    <div class="content">
                        <ul class="dashboard-box-list">
                            @foreach ($deposits as $deposit)
                                <li>
                                    <span class="notification-icon"><i class="icon-material-baseline-notifications-none"></i></span>
                                    <span class="notification-text">
                                        <strong>₦ {{$deposit->amount}}</strong> 
                                        Deposited 
                                        <a href="#">{{$deposit->created_at->diffForHumans()}}</a>
                                        
                                    </span>
                                    <span class="notification-text"> 
                                        
                                        <a href="/deposit/{{$deposit->id}}">View</a>
                                        
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- Dashboard Content / End -->
@stop