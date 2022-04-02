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
                        <div class="d-flex align-items-center"><img src="../assets/img/icons/logo.png" alt="phoenix" width="32">
                            <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
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
                                    <div class="px-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"><span class="me-2" data-feather="log-out"></span>Sign out</a></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">

            <h3 class="text-900 mb-3" data-anchor="" id="example">All Blog Posts</h3>

            <div class="my-4" id="tableExample" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">



                        <tr>
                            <th class="sort" data-sort="name">Title</th>
                            <th class="sort" data-sort="email">Date Created</th>
                            <th class="sort" data-sort="age">Action</th>
                            <th class="sort" data-sort="age">Action</th>

                        </tr>
                        </thead>
                        <tbody class="list">

                            @foreach($posts as $post)
                                <tr>

                                <td class="name">{{ $post->title }}</td>
                                <td class="email">{{ $post->created_at }}</td>
                                <td class="age"><a href="/posts/{{ $post->id }}/edit">Edit</a></td>
                                <td class="age"><a href="/posts/{{ $post->id }}/delete">Delete</a></td>
                                </tr>
                            @endforeach

                        <tr>
                            <td class="name">Homer</td>
                            <td class="email">homer@example.com</td>
                            <td class="age">35</td>
                            <td class="age">18</td>

                        </tr> </tbody>
                    </table>
                </div>
                <div class="row align-items-center mt-3">
                    <div class="pagination d-none"><li class="active"><button class="page" type="button" data-i="1" data-page="15">1</button></li></div>
                    <div class="col">
                        <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block" data-list-info="">1 to 15 <span class="text-600"> Items of </span> 15</span> <span class="d-none d-sm-inline-block">— </span><a class="fw-semi-bold d-none" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right fa-w-8 ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a><a class="fw-semi-bold" href="#!" data-list-view="less">View Less<svg class="svg-inline--fa fa-angle-right fa-w-8 ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com --></a></p>
                    </div>
                    <div class="col-auto d-flex"><button class="btn btn-sm btn-primary disabled" type="button" data-list-pagination="prev" disabled=""><span>Previous</span></button><button class="btn btn-sm btn-primary px-4 ms-2 disabled" type="button" data-list-pagination="next" disabled=""><span>Next</span></button></div>
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
