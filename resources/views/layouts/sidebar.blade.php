<!-- ==================================== 
    ——— LEFT SIDEBAR WITH FOOTER
===================================== -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ '/' }}">
                <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z"/>
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z"/>
                    </g>
                </svg>
                <span class="brand-name">@yield('tittle')</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="has-sub active expand">
                    <a
                        class="sidenav-item-link"
                        href="javascript:void(0)"
                        data-toggle="collapse"
                        data-target="#dashboard"
                        aria-expanded="false"
                        aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="header">Master</li>
                            <li class="active">
                                <a class="sidenav-item-link" href="outlet">
                                    <i class="mr-2 fas fa-box-open"></i>
                                    <span class="nav-text">Outlet</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="paket">
                                    <i class="mr-2 fas fa-cart-plus"></i>
                                    <span class="nav-text">Paket</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="member">
                                    <i class="mr-2 fas fa-address-card"></i>
                                    <span class="nav-text">Member</span>

                                </a>
                            </li>

                            <li class="header">Transaksi</li>
                            <li class="active">
                                <a class="sidenav-item-link" href="penjualan">
                                    <i class="mr-2 fa fa-download"></i>
                                    <span class="nav-text">Penjualan</span>

                                </a>
                            </li>

                            <li class="header">Report</li>
                            <li class="active">
                                <a class="sidenav-item-link" href="laporan">
                                    <i class="mr-2 fa fa-file-pdf-o"></i>
                                    <span class="nav-text">Laporan</span>

                                </a>
                            </li>

                            <li class="header">System</li>
                            <li class="active">
                                <a class="sidenav-item-link" href="user">
                                    <i class="mr-2 fa fa-file-pdf-o"></i>
                                    <span class="nav-text">User</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="setting">
                                    <i class="mr-2 fa fa-file-pdf-o"></i>
                                    <span class="nav-text">Pengaturan</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>

                <li class="has-sub">
                    <a
                        class="sidenav-item-link"
                        href="javascript:void(0)"
                        data-toggle="collapse"
                        data-target="#pages"
                        aria-expanded="false"
                        aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Pages</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li >
                                <a class="sidenav-item-link" href="user-profile.html">
                                    <span class="nav-text">User Profile</span>

                                </a>
                            </li>

                            <li class="has-sub">
                                <a
                                    class="sidenav-item-link"
                                    href="javascript:void(0)"
                                    data-toggle="collapse"
                                    data-target="#authentication"
                                    aria-expanded="false"
                                    aria-controls="authentication">
                                    <span class="nav-text">Authentication</span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="authentication">
                                    <div class="sub-menu">

                                        <li >
                                            <a href="sign-in.html">Sign In</a>
                                        </li>

                                        <li >
                                            <a href="sign-up.html">Sign Up</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>

        </div>

        <hr class="separator"/>

        <div class="sidebar-footer">
            <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                    Cpu Uses
                    <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                    <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                </div>
                <h6 class="text-uppercase">
                    Memory Uses
                    <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                    <div
                        class="progress-bar progress-bar-warning"
                        style="width: 65%;"
                        role="progressbar"></div>
                </div>
            </div>
        </div>
    </div>
</aside>