<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon Icon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="template-admin/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="template-admin/css/quicksand.css">
    <link rel="stylesheet" href="template-admin/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="template-admin/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="template-admin/css/fontawesome.css">
    <!--Animate CSS-->
    <link rel="stylesheet" href="template-admin/css/animate.min.css">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="template-admin/css/chartist.min.css">
    <!--Map-->
    <link rel="stylesheet" href="template-admin/css/jquery-jvectormap-2.0.2.css">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="template-admin/js/calendar/bootstrap_calendar.css">
    <!--Nice select -->
    <link rel="stylesheet" href="template-admin/css/nice-select.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>{{ $title }}</title>
  </head>
  <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->
    
    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">
            
            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
               <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
                    <h3 class="logo"><a href="#" class="text-secondary logo"><i class="fa fa-rocket"></i> Blog<span class="small">admin</span></a></h3>
               </div>
            </div>
            <!--Logo-->

            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row">
                    
                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8 pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                            <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->

                    </div>
                    <!--Menu Icons-->

                    <!--Search box and avatar-->
                    <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                        <div class="search-rounded mr-3">
                            <input type="text" class="form-control search-box" placeholder="Enter keywords.." />
                        </div>
                        <div class="mr-4">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="template-admin/img/profile.jpg" alt="Adam" class="rounded-circle" width="40px" height="40px">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fa fa-user pr-2"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-th-list pr-2"></i> Tasks</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-book pr-2"></i> Projects</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/"><i class="fa fa-power-off pr-2"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!--Search box and avatar-->
                </div>    
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="template-admin/img/client-img4.png" alt="" class="rounded-circle" />
                        <p><strong>Admin</strong></p>
                        <span class="text-primary small"><strong>Level Admin</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><i class="fa fa-dashboard mr-3"> </i>
                                    <span class="none">Dashboard <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="dashboard">
                                    <li class="child"><a href="index.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Default</a></li>
                                    <li class="child"><a href="index2.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Analytics</a></li>
                                    <li class="child"><a href="index3.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Ecommerce</a></li>
                                    <li class="child"><a href="index4.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Cryptocurrency</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-3" ><strong>Dashboard</strong></h5>
                
                @yield('body')

                <!--Footer-->
                <div class="row mt-5 mb-4 footer">
                    
                    <div class="col-sm-15 text-right">
                        <a href="#" class="ml-2">Contact Us</a>
                        <a href="#" class="ml-2">Support</a>
                    </div>
                </div>
                <!--Footer-->

            </div>
        </div>

        <!--Main Content-->

    </div>

    <!--Page Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="template-admin/js/jquery.min.js"></script>
    <script src="template-admin/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="template-admin/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="template-admin/js/bootstrap.min.js"></script>
    <!--Sweet alert JS-->
    <script src="template-admin/js/sweetalert.js"></script>
    <!--Progressbar JS-->
    <script src="template-admin/js/progressbar.min.js"></script>
    <!--Flot.JS-->
    <script src="template-admin/js/charts/jquery.flot.min.js"></script>
    <script src="template-admin/js/charts/jquery.flot.pie.min.js"></script>
    <script src="template-admin/js/charts/jquery.flot.categories.min.js"></script>
    <script src="template-admin/js/charts/jquery.flot.stack.min.js"></script>
    <!--Chart JS-->
    <script src="template-admin/js/charts/chart.min.js"></script>
    <!--Chartist JS-->
    <script src="template-admin/js/charts/chartist.min.js"></script>
    <script src="template-admin/js/charts/chartist-data.js"></script>
    <script src="template-admin/js/charts/demo.js"></script>
    <!--Maps-->
    <script src="template-admin/js/maps/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="template-admin/js/maps/jquery-jvectormap-world-mill-en.js"></script>
    <script src="template-admin/js/maps/jvector-maps.js"></script>
    <!--Bootstrap Calendar JS-->
    <script src="template-admin/js/calendar/bootstrap_calendar.js"></script>
    <script src="template-admin/js/calendar/demo.js"></script>
    <!--Nice select-->
    <script src="template-admin/js/jquery.nice-select.min.js"></script>

    <!--Custom Js Script-->
    <script src="template-admin/js/custom.js"></script>
    <!--Custom Js Script-->
    <script>
        //Nice select
        $('.bulk-actions').niceSelect();
    </script>
  </body>
</html>