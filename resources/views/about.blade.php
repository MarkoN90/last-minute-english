@extends('layouts.public')
@section('content')

    <style>
        .about {
            margin-top: 100px;
        }

        .about-section-header {
            font-weight: 700;
            font-size: 45px;
            padding: 70px;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .about-paragraph {
            padding: 70px;
            font-size: 23px;
            color: #959595;
            font-weight: 600;
        }

    </style>

    <div style=" width: 100%;   background-size: cover; margin: 0px;  background-image: url('{{ URL::to('/') }}/iimages/Lastf-Min-English-About-screens.png')">
        <div style=" width: 100%; background-size: cover; margin: 0px;">
            <nav>
                <img id="main-logo" class="float-left" src="{{ URL::to('/') }}/images/main-logo.png">
                <div class="nav-wrapper float-right">
                    <ul class="main-nav">
                        <li><a>Blog</a></li>
                        <li><a>Pricing</a></li>
                        <li><a>About</a></li>
                        <li><a>Contact</a></li>
                        <li><button class="action-button-2" id="nav-start-btn">Start Studying</button></li>
                    </ul>
                    <div class="mobile-nav">
                        <i id="menu-icon" class="fas fa-bars"></i>
                    </div>
                </div>
            </nav>

        </div>
        <div class="container about" >
            <div class="row d-inline-flex">
                <div class="col-12 col-md-6">
                    <img style="width: 100%;" src="{{ URL::to('/') }}/images/about-img.png">
                </div>
                <div class="col-12 col-md-6">
                    <h1 class="about-section-header">Lorem Ipsum is simply dummy text of the printing  </h1>

                        <p class="about-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem Ipsum passages,

                        </p>
                 </div>
            </div>
        </div>
        <div class="container-fluid" style="height:520px;">

            <div class="row">
                <div class="col-4 offset-4 col-md-4" style="background: #0cc291; height: 3px; margin-top: 100px; margin-bottom: 35px"></div>
            </div>

            <blockquote class="p-4">
                "Big bold testimonials from a happy customer, can be used to share or repeat  a nice detail about Last Minute English"
            </blockquote>
            <div class="qoute-author">Tommy Brabham</div>
            <div class="qoute-author-company">Designer of Websites, Warpaint Agency</div>
            <div>
                <h3></h3>
            </div>
        </div>

        <footer class="container-fluid" style="borrder: 1px solid red; margin-top: 40px;">
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
                    <div class="col-12 text-center text-white copyright-disclaimer p-3">Copyrights &reg; @php date('Y') @endphp Last Minute English</div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/') }}/app.js"></script>
@endsection



