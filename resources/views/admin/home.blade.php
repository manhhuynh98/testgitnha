@extends('admin.layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    @if (session('warning') != null)
                    <div class="alert-danger p-2" id="closeWarning">
                        {{     session('warning') }} <span class="ion ion-md-close float-right p-1 pr-2 " onclick="closeWarning()"></span>
                    </div>
                    @endif
                    <div class="page-title-box">
                        <h4 class="page-title">Welcome !</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Velonic</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-pink">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">
                                            {{$quanty}}
                                        </span></h2>
                                    <p class="mb-0">Quanty Total</p>
                                </div>
                                <i class="ion-md-eye"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-purple">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">12056</span></h2>
                                    <p class="mb-0">Sales</p>
                                </div>
                                <i class="ion-md-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-info">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">1268</span></h2>
                                    <p class="mb-0">New Orders</p>
                                </div>
                                <i class="ion-ios-pricetag"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card bg-primary">
                        <div class="card-body widget-style-2">
                            <div class="text-white media">
                                <div class="media-body align-self-center">
                                    <h2 class="my-0 text-white"><span data-plugin="counterup">145</span></h2>
                                    <p class="mb-0">New Users</p>
                                </div>
                                <i class="mdi mdi-comment-multiple"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header py-3 bg-transparent">
                            <div class="card-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false"
                                    aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h5 class="header-title mb-0">Weekly Sales Report</h5>
                        </div>
                        <div id="cardCollpase1" class="collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="morris-bar-example" class="morris-charts" dir="ltr"
                                            style="height: 320px;"></div>
                                        <div class="row text-center mt-4 mb-4">
                                            <div class="col-sm-3 col-6">
                                                <h5>$ 126</h5>
                                                <small class="text-muted"> Today's Sales</small>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h5>$ 967</h5>
                                                <small class="text-muted">This Week's Sales</small>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h5>$ 4500</h5>
                                                <small class="text-muted">This Month's Sales</small>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h5>$ 87,000</h5>
                                                <small class="text-muted">This Year's Sales</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-->

                </div>
                <!-- end col -->

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header py-3 bg-transparent">
                            <div class="card-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false"
                                    aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                            </div>
                            <h5 class="header-title mb-0"> Yearly Sales Report</h5>
                        </div>
                        <div id="cardCollpase2" class="collapse show">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="morris-line-example" class="morris-charts" dir="ltr"
                                            style="height: 200px;"></div>
                                        <div class="row text-center mt-4">
                                            <div class="col-sm-4">
                                                <h5>$ 86,956</h5>
                                                <small class="text-muted"> This Year's Report</small>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5>$ 86,69</h5>
                                                <small class="text-muted">Weekly Sales Report</small>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5>$ 948,16</h5>
                                                <small class="text-muted">Yearly Sales Report</small>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end card-->

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="status">
                                        <h3 class="mt-2">61.5%</h3>
                                        <p class="mb-1">US Dollar Share</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <span class="sparkpie-big"><canvas width="98" height="50"
                                            style="display: inline-block; width: 98px; height: 50px; vertical-align: top;"></canvas></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End row -->


        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->



    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2015 - 2020 &copy; Velonic theme by <a href="">Coderthemes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
@endsection

