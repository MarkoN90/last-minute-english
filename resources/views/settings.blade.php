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

            <h3 class="text-900 mb-3" data-anchor="" id="example">Settings</h3>
            <form action="/settings/save" method="post">
                @csrf

                @foreach ($settings as $setting)

                    <div class="mb-3 row">

                        <label class="col-sm-2 col-form-label" for="inputPassword">{{ $setting->setting }}</label>
                        <div class="col-sm-10"><input name="{{ $setting->slug }}" value="{{ $setting->value }}" class="form-control" id="inputPassword" type="text"></div>
                    </div>


                @endforeach

                <button type="submit" class="f-right btn btn-phoenix-primary me-1 mb-1" type="button">Save Settings</button>

            </form>
            <hr/>

            <h4 class="text-900 mb-3" data-anchor="" id="example">Categories</h4>

            <form action="/category" method="post">
                @csrf
                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="inputPassword">New Category</label>
                    <div class="col-sm-10"><input name="category_name"  class="form-control" id="inputPassword" type="text"></div>
                </div>

                <button type="submit" class="f-right btn btn-phoenix-primary me-1 mb-1" type="button">Add Category</button>

                <h4 class="mt-4 mb-3">Categories</h4>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td colspan="2">{{ $category->name }}</td>
                            <th scope="col"><a href="/category/{{ $category->id }}/delete">Delete Category</a></th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>

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
