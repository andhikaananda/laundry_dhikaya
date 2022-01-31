<!-- Header -->
<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
            <div class="input-group">
                <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <input
                    type="text"
                    name="query"
                    id="search-input"
                    class="form-control"
                    placeholder=""
                    autofocus="autofocus"
                    autocomplete="off"/>
            </div>
            <div id="search-results-container">
                <ul id="search-results"></ul>
            </div>
        </div>

        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <!-- Github Link Button <li class="github-link mr-3"> <a class="btn
                btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard"
                target="_blank"> <span class="d-none d-md-inline-block mr-2">Source Code</span>
                <i class="mdi mdi-github-circle"></i> </a>-->
            </li>
        </li>
        <!-- User Account -->
        <li class="dropdown user-menu">
            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <img
                    src="{{ 'sleek/assets/img/user/user.png' }}"
                    class="user-image"
                    alt="User Image"/>
                <span class="d-none d-lg-inline-block">Andhika Ananda</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                <!-- User image -->
                <li class="dropdown-header">
                    <img
                        src="{{ 'sleek/assets/img/user/user.png' }}"
                        class="img-circle"
                        alt="User Image"/>
                    <div class="d-inline-block">
                        Andhika Ananda
                        <small class="pt-1">andikaya@gmail.com</small>
                    </div>
                </li>

                <li>
                    <a href="profile.html">
                        <i class="mdi mdi-account"></i>
                        My Profile
                    </a>
                </li>
                <li>
                    <a href="email-inbox.html">
                        <i class="mdi mdi-email"></i>
                        Message
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="mdi mdi-diamond-stone"></i>
                        Projects
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="mdi mdi-settings"></i>
                        Account Setting
                    </a>
                </li>

                <li class="dropdown-footer">
                    <a href="signin.html">
                        <i class="mdi mdi-logout"></i>
                        Log Out
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
</nav>
</header>