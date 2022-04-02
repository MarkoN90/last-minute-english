<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('css/') }}/phoenix.min.css" rel="stylesheet" id="style-default">
    <link href="{{ asset('css/') }}/user.min.css" rel="stylesheet" id="user-style-default">
    <style>
        body {
            opacity: 0;
        }
    </style>
</head>

<body>
<main class="main" id="top">
    <div class="container-fluid px-0">
        @include('includes.admin.nav')
        <nav class="navbar navbar-light navbar-top navbar-expand">
            <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center"><img id="main-logo" width="200" class="float-left" src="{{ URL::to('/') }}/images/Last-Minute-English_White.png">
                         </div>
                    </div>
                </a></div>
            <div class="collapse navbar-collapse">
                <div class="search-box d-none d-lg-block">
                </div>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
                    <li class="nav-item dropdown"><a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a></li>

                    <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-l"><img class="rounded-circle" src="../assets/img/team/57.png" alt=""></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                            <div class="card bg-white position-relative border-0">
                                <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                                    <div class="text-center pt-4 pb-3">
                                        <div class="avatar avatar-xl"><img class="rounded-circle" src="../assets/img/team/57.png" alt=""></div>
                                        <h6 class="mt-2">User</h6>
                                    </div>
                                    <ul class="nav d-flex flex-column mb-2 pb-1">
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="lock"></span>Posts</a></li>

                                    </ul>
                                </div>
                                <div class="card-footer p-0 border-top">
                                    <ul class="nav d-flex flex-column my-3">
                                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                                    </ul>
                                    <hr>
                                    <div class="px-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="/logout"><span class="me-2" data-feather="log-out"></span>Sign out</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">

            <h3 class="text-900 mb-3" data-anchor="" id="example">Dashboard</h3>

            <div class="col-12 col-xxl-6">
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <div class="card border border-200 shadow-none h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="mb-1">New Subscriptions<span class="badge badge-light-warning rounded-pill fs--1 ms-2"></span></h5>
                                        <h6 class="text-700">Last 7 days</h6>
                                    </div>
                                    <h4>4</h4>
                                </div>
                                <div class="d-flex justify-content-center px-4 py-6">
{{--                                    <div class="echart-total-orders" style="height: 85px; width: 115px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" data-echarts="{&quot;tooltip&quot;:{&quot;show&quot;:false},&quot;series&quot;:[{&quot;type&quot;:&quot;bar&quot;,&quot;barWidth&quot;:&quot;5px&quot;,&quot;data&quot;:[120,200,150,80,70,110,120],&quot;showBackground&quot;:true,&quot;symbol&quot;:&quot;none&quot;,&quot;itemStyle&quot;:{&quot;borderRadius&quot;:10},&quot;backgroundStyle&quot;:{&quot;borderRadius&quot;:10}}],&quot;grid&quot;:{&quot;right&quot;:10,&quot;left&quot;:10,&quot;bottom&quot;:0,&quot;top&quot;:0}}" _echarts_instance_="ec_1648574158623"><div style="position: relative; width: 115px; height: 85px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;"><canvas data-zr-dom-id="zr_0" width="115" height="85" style="position: absolute; left: 0px; top: 0px; width: 115px; height: 85px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>--}}
                                </div>
                                <div class="mt-2">
{{--                                    <div class="d-flex align-items-center mb-2">--}}
{{--                                        <div class="bullet-item bg-primary me-2"></div>--}}
{{--                                        <h6 class="text-900 fw-semi-bold flex-1 mb-0">Completed</h6>--}}
{{--                                        <h6 class="text-900 fw-semi-bold mb-0">52%</h6>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <div class="bullet-item bg-light-primary me-2"></div>--}}
{{--                                        <h6 class="text-900 fw-semi-bold flex-1 mb-0">Pending payment</h6>--}}
{{--                                        <h6 class="text-900 fw-semi-bold mb-0">48%</h6>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card border border-200 shadow-none h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="mb-1">Total Subsciptions<span class="badge badge-light-warning rounded-pill fs--1 ms-2"></span></h5>
                                        <h6 class="text-700">Last 7 days</h6>
                                    </div>
                                    <h4>356</h4>
                                </div>
                                <div class="pb-0 pt-4">
{{--                                    <div class="echarts-new-customers" style="height: 180px; width: 100%; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;" _echarts_instance_="ec_1648574158713"><div style="position: relative; width: 283px; height: 180px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="283" height="180" style="position: absolute; left: 0px; top: 0px; width: 283px; height: 180px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card border border-200 shadow-none h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5 class="mb-2">Paying vs non paying</h5>
                                        <h6 class="text-700">Last 7 days</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center pt-3">
{{--                                    <div style="height:145px;width:140px"><canvas id="payingCustomerChart" width="140" height="140" style="display: block; box-sizing: border-box; height: 140px; width: 140px;"></canvas></div>--}}
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="bullet-item bg-primary me-2"></div>
                                        <h6 class="text-900 fw-semi-bold flex-1 mb-0">Paying customer</h6>
                                        <h6 class="text-900 fw-semi-bold mb-0">30%</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="bullet-item bg-light-primary me-2"></div>
                                        <h6 class="text-900 fw-semi-bold flex-1 mb-0">Non-paying customer</h6>
                                        <h6 class="text-900 fw-semi-bold mb-0">70%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="row g-0 justify-content-between align-items-center h-100 mb-3">

                </div>
            </footer>
        </div>
    </div>
</main>
<script src="{{ asset('js/') }}/phoenix.js"></script>
</body>

</html>
