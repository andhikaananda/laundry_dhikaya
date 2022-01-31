@extends('layouts.master')

@section('tittle')
Hi-Laundry
@endsection

@section('content')
<!-- Top Statistics -->
<div class = "row" > <div class="col-xl-3 col-sm-6">
    <div class="card card-mini mb-4">
        <div class="card-body">
            <h2 class="mb-1">71,503</h2>
            <p>Online Signups</p>
            <div class="chartjs-wrapper">
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6">
    <div class="card card-mini  mb-4">
        <div class="card-body">
            <h2 class="mb-1">9,503</h2>
            <p>New Visitors Today</p>
            <div class="chartjs-wrapper">
                <canvas id="dual-line"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6">
    <div class="card card-mini mb-4">
        <div class="card-body">
            <h2 class="mb-1">71,503</h2>
            <p>Monthly Total Order</p>
            <div class="chartjs-wrapper">
                <canvas id="area-chart"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6">
    <div class="card card-mini mb-4">
        <div class="card-body">
            <h2 class="mb-1">9,503</h2>
            <p>Total Revenue This Year</p>
            <div class="chartjs-wrapper">
                <canvas id="line"></canvas>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
<div class="col-xl-8 col-md-12">
</div>
<div class="col-xl-4 col-md-12">
</div>
</div>

<div class="row">
<div class="col-xl-4 col-lg-6 col-12">
</div>
<div class="col-xl-4 col-lg-6 col-12">
</div>
<div class="col-xl-4 col-12">
</div>
</div>

<div class="row">
<div class="col-12">
    <!-- Recent Order Table -->
    <div class="card card-table-border-none" id="recent-orders">
        <div class="card-header justify-content-between">
            <h2>Recent Orders</h2>
            <div class="date-range-report ">
                <span></span>
            </div>
        </div>
        <div class="card-body pt-0 pb-5">
            <table
                class="table card-table table-responsive table-responsive-large"
                style="width:100%">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th class="d-none d-md-table-cell">Units</th>
                        <th class="d-none d-md-table-cell">Order Date</th>
                        <th class="d-none d-md-table-cell">Order Cost</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >24541</td>
                        <td >
                            <a class="text-dark" href="">
                                Coach Swagger</a>
                        </td>
                        <td class="d-none d-md-table-cell">1 Unit</td>
                        <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                        <td class="d-none d-md-table-cell">$230</td>
                        <td >
                            <span class="badge badge-success">Completed</span>
                        </td>
                        <td class="text-right">
                            <div class="dropdown show d-inline-block widget-dropdown">
                                <a
                                    class="dropdown-toggle icon-burger-mini"
                                    href=""
                                    role="button"
                                    id="dropdown-recent-order1"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-display="static"></a>
                                <ul
                                    class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="dropdown-recent-order1">
                                    <li class="dropdown-item">
                                        <a href="#">View</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Remove</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td >24541</td>
                        <td >
                            <a class="text-dark" href="">
                                Toddler Shoes, Gucci Watch</a>
                        </td>
                        <td class="d-none d-md-table-cell">2 Units</td>
                        <td class="d-none d-md-table-cell">Nov 15, 2018</td>
                        <td class="d-none d-md-table-cell">$550</td>
                        <td >
                            <span class="badge badge-warning">Delayed</span>
                        </td>
                        <td class="text-right">
                            <div class="dropdown show d-inline-block widget-dropdown">
                                <a
                                    class="dropdown-toggle icon-burger-mini"
                                    href="#"
                                    role="button"
                                    id="dropdown-recent-order2"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-display="static"></a>
                                <ul
                                    class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="dropdown-recent-order2">
                                    <li class="dropdown-item">
                                        <a href="#">View</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Remove</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td >24541</td>
                        <td >
                            <a class="text-dark" href="">
                                Hat Black Suits</a>
                        </td>
                        <td class="d-none d-md-table-cell">1 Unit</td>
                        <td class="d-none d-md-table-cell">Nov 18, 2018</td>
                        <td class="d-none d-md-table-cell">$325</td>
                        <td >
                            <span class="badge badge-warning">On Hold</span>
                        </td>
                        <td class="text-right">
                            <div class="dropdown show d-inline-block widget-dropdown">
                                <a
                                    class="dropdown-toggle icon-burger-mini"
                                    href="#"
                                    role="button"
                                    id="dropdown-recent-order3"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-display="static"></a>
                                <ul
                                    class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="dropdown-recent-order3">
                                    <li class="dropdown-item">
                                        <a href="#">View</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Remove</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td >24541</td>
                        <td >
                            <a class="text-dark" href="">
                                Backpack Gents, Swimming Cap Slin</a>
                        </td>
                        <td class="d-none d-md-table-cell">5 Units</td>
                        <td class="d-none d-md-table-cell">Dec 13, 2018</td>
                        <td class="d-none d-md-table-cell">$200</td>
                        <td >
                            <span class="badge badge-success">Completed</span>
                        </td>
                        <td class="text-right">
                            <div class="dropdown show d-inline-block widget-dropdown">
                                <a
                                    class="dropdown-toggle icon-burger-mini"
                                    href="#"
                                    role="button"
                                    id="dropdown-recent-order4"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-display="static"></a>
                                <ul
                                    class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="dropdown-recent-order4">
                                    <li class="dropdown-item">
                                        <a href="#">View</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Remove</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td >24541</td>
                        <td >
                            <a class="text-dark" href="">
                                Speed 500 Ignite</a>
                        </td>
                        <td class="d-none d-md-table-cell">1 Unit</td>
                        <td class="d-none d-md-table-cell">Dec 23, 2018</td>
                        <td class="d-none d-md-table-cell">$150</td>
                        <td >
                            <span class="badge badge-danger">Cancelled</span>
                        </td>
                        <td class="text-right">
                            <div class="dropdown show d-inline-block widget-dropdown">
                                <a
                                    class="dropdown-toggle icon-burger-mini"
                                    href="#"
                                    role="button"
                                    id="dropdown-recent-order5"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    data-display="static"></a>
                                <ul
                                    class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="dropdown-recent-order5">
                                    <li class="dropdown-item">
                                        <a href="#">View</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#">Remove</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-xl-5">
        <!-- New Customers -->
        <div class="card card-table-border-none" data-scroll-height="580">
            <div class="card-header justify-content-between ">
                <h2>New Customers</h2>
                <div>
                    <button class="text-black-50 mr-2 font-size-20">
                        <i class="mdi mdi-cached"></i>
                    </button>
                    <div class="dropdown show d-inline-block widget-dropdown">
                        <a
                            class="dropdown-toggle icon-burger-mini"
                            href="#"
                            role="button"
                            id="dropdown-customar"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            data-display="static"></a>
                        <ul
                            class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="dropdown-customar">
                            <li class="dropdown-item">
                                <a href="#">Action</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="#">Another action</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="#">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <table class="table ">
                    <tbody>
                        <tr>
                            <td >
                                <div class="media">
                                    <div class="media-image mr-3 rounded-circle">
                                        <a href="profile.html">
                                            <img
                                                class="rounded-circle w-45"
                                                src="{{'sleek/assets/img/user/u1.jpg'}}"
                                                alt="customer image"></a>
                                        </div>
                                        <div class="media-body align-self-center">
                                            <a href="profile.html">
                                                <h6 class="mt-0 text-dark font-weight-medium">Selena Wagner</h6>
                                            </a>
                                            <small>@selena.oi</small>
                                        </div>
                                    </div>
                                </td>
                                <td >2 Orders</td>
                                <td class="text-dark d-none d-md-block">$150</td>
                            </tr>
                            <tr>
                                <td >
                                    <div class="media">
                                        <div class="media-image mr-3 rounded-circle">
                                            <a href="profile.html">
                                                <img
                                                    class="rounded-circle w-45"
                                                    src="{{'sleek/assets/img/user/u2.jpg'}}"
                                                    alt="customer image"></a>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="profile.html">
                                                    <h6 class="mt-0 text-dark font-weight-medium">Walter Reuter</h6>
                                                </a>
                                                <small>@walter.me</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td >5 Orders</td>
                                    <td class="text-dark d-none d-md-block">$200</td>
                                </tr>
                                <tr>
                                    <td >
                                        <div class="media">
                                            <div class="media-image mr-3 rounded-circle">
                                                <a href="profile.html">
                                                    <img
                                                        class="rounded-circle w-45"
                                                        src="{{'sleek/assets/img/user/u3.jpg'}}"
                                                        alt="customer image"></a>
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <a href="profile.html">
                                                        <h6 class="mt-0 text-dark font-weight-medium">Larissa Gebhardt</h6>
                                                    </a>
                                                    <small>@larissa.gb</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td >1 Order</td>
                                        <td class="text-dark d-none d-md-block">$50</td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <div class="media">
                                                <div class="media-image mr-3 rounded-circle">
                                                    <a href="profile.html">
                                                        <img
                                                            class="rounded-circle w-45"
                                                            src="{{'sleek/assets/img/user/u4.jpg'}}"
                                                            alt="customer image"></a>
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a href="profile.html">
                                                            <h6 class="mt-0 text-dark font-weight-medium">Albrecht Straub</h6>
                                                        </a>
                                                        <small>@albrech.as</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td >2 Orders</td>
                                            <td class="text-dark d-none d-md-block">$100</td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <div class="media">
                                                    <div class="media-image mr-3 rounded-circle">
                                                        <a href="profile.html">
                                                            <img
                                                                class="rounded-circle w-45"
                                                                src="{{'sleek/assets/img/user/u5.jpg'}}"
                                                                alt="customer image"></a>
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="profile.html">
                                                                <h6 class="mt-0 text-dark font-weight-medium">Leopold Ebert</h6>
                                                            </a>
                                                            <small>@leopold.et</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td >1 Order</td>
                                                <td class="text-dark d-none d-md-block">$60</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <!-- Top Products -->
                            <div class="card card-default" data-scroll-height="580">
                                <div class="card-header justify-content-between mb-4">
                                    <h2>Top Products</h2>
                                    <div>
                                        <button class="text-black-50 mr-2 font-size-20">
                                            <i class="mdi mdi-cached"></i>
                                        </button>
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a
                                                class="dropdown-toggle icon-burger-mini"
                                                href="#"
                                                role="button"
                                                id="dropdown-product"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-display="static"></a>
                                            <ul
                                                class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-product">
                                                <li class="dropdown-item">
                                                    <a href="#">Update Data</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Detailed Log</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Statistics</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#">Clear Data</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-body py-0">
                                    <div class="media d-flex mb-5">
                                        <div class="media-image align-self-center mr-3 rounded">
                                            <a href="#">
                                                <img src="{{'sleek/assets/img/products/p1.jpg'}}" alt="customer image"></a>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <a href="#">
                                                    <h6 class="mb-3 text-dark font-weight-medium">
                                                        Coach Swagger</h6>
                                                </a>
                                                <p class="float-md-right">
                                                    <span class="text-dark mr-2">20</span>Sales</p>
                                                <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                                                <p class="mb-0">
                                                    <del>$300</del>
                                                    <span class="text-dark ml-3">$250</span>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="media d-flex mb-5">
                                            <div class="media-image align-self-center mr-3 rounded">
                                                <a href="#">
                                                    <img src="{{'sleek/assets/img/products/p2.jpg'}}" alt="customer image"></a>
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <a href="#">
                                                        <h6 class="mb-3 text-dark font-weight-medium">
                                                            Coach Swagger</h6>
                                                    </a>
                                                    <p class="float-md-right">
                                                        <span class="text-dark mr-2">20</span>Sales</p>
                                                    <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                                                    <p class="mb-0">
                                                        <del>$300</del>
                                                        <span class="text-dark ml-3">$250</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="media d-flex mb-5">
                                                <div class="media-image align-self-center mr-3 rounded">
                                                    <a href="#">
                                                        <img src="{{'sleek/assets/img/products/p3.jpg'}}" alt="customer image"></a>
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <a href="#">
                                                            <h6 class="mb-3 text-dark font-weight-medium">
                                                                Gucci Watch</h6>
                                                        </a>
                                                        <p class="float-md-right">
                                                            <span class="text-dark mr-2">10</span>Sales</p>
                                                        <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                                                        <p class="mb-0">
                                                            <del>$300</del>
                                                            <span class="text-dark ml-3">$50</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endsection