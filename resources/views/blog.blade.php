

@extends('layouts.public')
@section('content')
    <style>

        .main-article {
            /*border: 1px solid red;*/
            margin: 30px;
            border-radius: 15px;
        }

        .main-article-photo {
            background-size: cover;
            background-image: url('{{ URL::to('/') }}/images/image-post.png');
            height: 360px;
            /*border-radius: 15px;*/
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;
        }

        .article {
            margin: 20px;
            border-radius: 15px;
            /*border: 1px solid red;*/
        }

        .article-photo {
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;
            height: 180px;
            background-position: center;
            background-size: cover;
        }

        .article-header {
            min-height: 80px;
            font-size: 22px;
            padding: 10px 20px;
            border-bottom-right-radius: 15px;
            border-bottom-left-radius: 15px;
            color: #08143a;
        }

    </style>

    <div class="" style=" width: 100%; hheight: 2844px; background-size: cover; margin: 0px;  background-image: url('{{ URL::to('/') }}/images/Ldast-Min-English-Blog-Archive-screens.png')">
        <div>
            <nav>
                <img id="main-logo" class="float-left" src="{{ URL::to('/') }}/images/main-logo.png">
                <div class="nav-wrapper float-right">
                    <ul class="main-nav">
                        <li><a href="/blog">Blog</a></li>
                        <li><a>Pricing</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a>Contact</a></li>
                        <li><button class="action-button-2" id="nav-start-btn">Start Studying</button></li>
                    </ul>
                    <div class="mobile-nav">
                        <i id="menu-icon" class="fas fa-bars"></i>
                    </div>
                </div>
            </nav>
        </div>
        <div  style="height: 2112px; width: 100%; background-size: cover; margin: 0px;">
            <div class="container mt-3">
                <div class="row d-inline">
                    <div class="col-12">
                        <div class="main-article">
                            <div class="main-article-photo">
                            </div>
                            <div class="main-article-text-wrapper">
                                <div><h3 class="main-article-header">Where can I get some</h3></div>
                                <div class="main-article-subtitle">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
                <div class="row ">

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-5 text-center">
                <button class="popout-input action-button" style="width: 200px">Load More..</button>
            </div>
        </div>
        <footer class="container-fluid" style="">
            <div class="container">
                <div class="row" >
                    <div class="col-12 col-lg-4" style="borrder: 1px solid green;">
                        <div class="footer-clock-wrapper">
                            Clock
                        </div>
                        <div>
                            <h2 class="text-white footer-header" >
                                Short Last Minute English objective,
                                summary or slogan to sign off
                                and help SEO.
                            </h2>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 p-3">
                        <div class="d-flex">
                            <input type="text" placeholder="Enter email address" class="footer-input">
                            <div class="footer-button">Get the Free Booklet</div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3" style="borrder: 1px solid blue;">
                        <div class="social-icons-wrapper">
                            <ul class="text-white social-icons-list">
                                <li><a><i class="fab fa-instagram "></i></a></li>
                                <li><a><i class="fab fa-facebook-square text-white"></i></a></li>
                                <li><a><i class="fab fa-linkedin text-white"></i></a></li>
                                <li><a><i class="fab fa-youtube text-white"></i></a></li>
                            </ul>
                        </div>
                        <div class="footer-nav-wrapper">
                            <ul class="text-white footer-nav">
                                <li><a>Start Studying</a></li>
                                <li><a>About</a></li>
                                <li><a>Blog</a></li>
                                <li><a>Contact</a></li>
                                <li><a>Terms</a></li>
                                <li><a>Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 offset-5 col-md-4 offset-md-4 my-2" style="background: #0cc291; height: 2px"></div>
                </div>
                <div class="row">
                    <div class="col-12 text-center text-white copyright-disclaimer p-3">Copyrights &reg; @php date('Y'); @endphp Last Minute English</div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/') }}/app.js"></script>
@endsection



