@extends('layouts.container')

@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{url('/')}}">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
            <div style="margin-top: 20px" class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="100">100</span>
                            </div>
                            <div class="desc"> عدد ألخدمات</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="1000">100</span>
                            </div>
                            <div class="desc"> عدد المنتجات</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                        <div class="visual">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="1000">100</span>
                            </div>
                            <div class="desc"> عدد الطلبات</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->


@endsection
