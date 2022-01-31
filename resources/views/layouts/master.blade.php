<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <title>@yield('tittle')</title>

        <!-- GOOGLE FONTS -->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
            rel="stylesheet"/>
        <link
            href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css"
            rel="stylesheet"/>

        <!-- PLUGINS CSS STYLE -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <link
            href="{{'sleek/assets/plugins/toaster/toastr.min.css'}}"
            rel="stylesheet"/>
        <link
            href="{{'sleek/assets/plugins/nprogress/nprogress.css'}}"
            rel="stylesheet"/>
        <link
            href="{{'sleek/assets/plugins/flag-icons/css/flag-icon.min.css'}}"
            rel="stylesheet"/>
        <link
            href="{{'sleek/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css'}}"
            rel="stylesheet"/>
        <link href="{{'sleek/assets/plugins/ladda/ladda.min.css'}}" rel="stylesheet"/>
        <link
            href="{{'sleek/assets/plugins/select2/css/select2.min.css'}}"
            rel="stylesheet"/>
        <link
            href="{{'sleek/assets/plugins/daterangepicker/daterangepicker.css'}}"
            rel="stylesheet"/>

        <!-- SLEEK CSS -->
        <link id="sleek-css" rel="stylesheet" href="{{'sleek/assets/css/sleek.css'}}"/>

        <!-- FAVICON -->
        <link href="{{'sleek/assets/img/favicon.png'}}" rel="shortcut icon"/>
        <link href="fontawesome/css/all.css" rel="stylesheet">
        <!--load all styles -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
        queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script
        src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
        <script src="{{'sleek/assets/plugins/nprogress/nprogress.js'}}"></script>
    </head>

    <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
        <script>
            NProgress.configure({showSpinner: false});
            NProgress.start();
        </script>

        <div class="mobile-sticky-body-overlay"></div>

        <div class="wrapper">
            @include('layouts.sidebar')

            <div class="page-wrapper">
                @include('layouts.header')

                <div class="content-wrapper">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="{{'sleek/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/jquery/jquery.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/toaster/toastr.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/slimscrollbar/jquery.slimscroll.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/charts/Chart.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/ladda/spin.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/ladda/ladda.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/jquery-mask-input/jquery.mask.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/select2/js/select2.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'}}"></script>
        <script src="{{'sleek/assets/plugins/daterangepicker/moment.min.js'}}"></script>
        <script src="{{'sleek/assets/plugins/daterangepicker/daterangepicker.js'}}"></script>
        <script src="{{'sleek/assets/plugins/jekyll-search.min.js'}}"></script>
        <script src="{{'sleek/assets/js/sleek.js'}}"></script>
        <script src="{{'sleek/assets/js/chart.js'}}"></script>
        <script src="{{'sleek/assets/js/date-range.js'}}"></script>
        <script src="{{'sleek/assets/js/map.js'}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer="defer"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="{{'sleek/assets/js/custom.js'}}"></script>
        {{-- $(document).ready( function () {
            $('#myTable').DataTable();
            } ); --}}
        @stack('scripts')
    </body>
</html>