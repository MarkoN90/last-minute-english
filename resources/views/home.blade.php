@extends('layouts.public')
@section('content')

    <div style=" width: 100%; background-size: cover; margin: 0px;  background-image: url('{{ URL::to('/') }}/images/Last-Min-English-landing-page-screens.png')">
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
            <div class="container d-none d-md-block" style="height: 1000px">
                <div class="row">
                    <div class="col-10">
                        <h1 id="main-title">Get <span id="main-title-ielts">IELTS</span> done.</h1>
                        <h2 id="main-subtitle">No worry, no pain, no problem.</h2>
                        <div class="container button-wrapper">
                            <button class="action-button">Start studying</button>
                            <button class="action-button-2">Free stuff</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div id="" class="container text-center my-5 d-none d-md-block">
                            <img id="girl-illustration" height="260" src="{{ asset('images/') }}/girl-illustration.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-block d-md-none">
            <h1 id="main-title">Get <span id="main-title-ielts">IELTS</span> done.</h1>
            <h2 id="main-subtitle">No worry, no pain, no problem.</h2>
        </div>
        <div id="" class="container text-center my-5 d-block d-md-none">
            <img id="girl-illustration" height="260" src="{{ asset('images/') }}/girl-illustration.png">
            <div class="container my-5">
                <button class="action-button">Start studying</button>
                <button class="action-button">Free stuff</button>
            </div>
        </div>

        <div class="container-fluid bg-gray py-5">

            <div class="container ">
                <h3 class="text-center header-dark-blue main-section-header">Overview Header</h3>
                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <p class="paragraph-gray p-4 main-paragraph">A short and informative few sentences or a paragraph about what the International English Language Testing System is and how Last Minute English can solve the visitors problem.</p>
                    </div>

                    <div class="col-12 col-md-6">
                        <img id="boy-illustration" src="{{ asset('images/') }}/boy-illustration.png">
                    </div>
                    <div class="class=col-12 col-md-6 pt-5">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="header-dark-blue section-header">IELTS Complete Guide</h1>

                                <div class="d-flex align-item-center   benefits-list-item-wrapper">
                                    <div class="green-circle-2 mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">Step-by-step study journey</div>
                                </div>
                                <div class="d-flex align-item-center   benefits-list-item-wrapper">
                                    <div class="green-circle-2 mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">Starting from $13.99</div>
                                </div>
                                <div class="d-flex align-item-center   benefits-list-item-wrapper">
                                    <div class="green-circle-2 mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">No risk - 30 days guarantee</div>
                                </div>
                                <div class="d-flex align-item-center  benefits-list-item-wrapper">
                                    <div class="green-circle-2 mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">Everything you need for IELTS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-5 mt-5">
            <div class="">
                <h1 class="p-5 text-center" id="main-title" style="">Why Last Minute <span style="" id="main-title-ielts"> English</span>?</h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mt-5">
                    <div  class="value-card p-4 pt-5  "  >
                        <img src="{{ asset('images/') }}/badge.png">
                        <h3 class="value-card-main-title mt-4">High Quality</h3>
                        <h4 class="value-card-subtitle">Created by an IELTS examiner</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-5">
                    <div class="value-card p-3 pt-5  "  >
                        <img src="{{ asset('images/') }}/file.png">
                        <h3 class="value-card-main-title mt-4">Organized</h3>
                        <h4 class="value-card-subtitle">Study journey for you</h4>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5">
                    <div class="value-card p-3 pt-5">
                        <img src="{{ asset('images/') }}/phone.png">
                        <h3 class="value-card-main-title mt-4">Convenient</h3>
                        <h4 class="value-card-subtitle">Everything in one places</h4>
                    </div>
                </div>
            </div>

            <div class="p-5 d-flex justify-content-center">
                <button class="action-button">Sing up now</button>
            </div>
        </div>


        <div class="container">
            <h3 id="big-header" class="text-center header-dark-blue main-section-header">What's included?</h3>
            <div class="row">
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/girl-reading.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">40+ hours of classes</h3>
                        <h4 class="included-card-subtitle">Support sentence for consistency</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4" >
                        <img src="{{ asset('images/') }}/tests.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">IELTS 4 tests</h3>
                        <h4 class="included-card-subtitle">Speaking, writing, reading, listening</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/woman-speaking.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">IELTS speaking new answers</h3>
                        <h4 class="included-card-subtitle">Updated every 4 months</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/vocabulary.png">
                    </div>
                    <div>

                        <h3 class="included-card-main-title">Vocabulary booklet</h3>
                        <h4 class="included-card-subtitle">500 Words of band 7+ vocabulary</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/light.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">40+ hours of classes</h3>
                        <h4 class="included-card-subtitle">400+ pages of band 7+ content</h4>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/steps.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">IELTS step-by-step study journey</h3>
                        <h4 class="included-card-subtitle">1, 2 3 and 6 months</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 id="big-header-2" class="text-center header-dark-blue main-section-header mt-5">Meet Our Students</h3>
            <p class="paragraph-gray px-4 main-paragraph">A short and informative few sentences or a paragraph introducing students with success stories due to Last Minute English.</p>
            <div class="row">
                <div class="col-12 col-md-4 mt-5 p-3 testimonial-wrapper text-center">
                    <div>
                        <div><img width="180" src="{{ asset('images/') }}/review1.png"></div>
                        <h3 class="testimonial-card-main-title">Anthony</h3>
                        <h4 class="testimonial-card-subtitle">Took IELTS General in 2021. Now working in Canada</h4>
                        <button class="action-button-2 mt-2">Read more</button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-5 p-3 testimonial-wrapper text-center">
                    <div>
                        <div><img width="180" src="{{ asset('images/') }}/review1.png"></div>
                        <h3 class="testimonial-card-main-title">Anthony</h3>
                        <h4 class="testimonial-card-subtitle">Took IELTS General in 2021. Now working in Canada</h4>
                        <button class="action-button-2 mt-2">Read more</button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-5 p-3 testimonial-wrapper text-center">
                    <div>
                        <div><img width="180" src="{{ asset('images/') }}/review1.png"></div>
                        <h3 class="testimonial-card-main-title">Anthony</h3>
                        <h4 class="testimonial-card-subtitle">Took IELTS General in 2021. Now working in Canada</h4>
                        <button class="action-button-2 mt-2">Read more</button>
                    </div>
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
        <div class="container-fluid bg-dark-blue" style="bordedr: 1px solid orange;">
            <div class="container">
                <h1 class="text-center text-white pricing-header">Pricing</h1>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="pricing-card" style="bordder: 1px solid red;">
                            <div class="pricing-card-top pricing-card-top-gray"></div>
                            <div class="package-name-wrap">
                                <h3 class="package-name-header">IELTS Basic Package</h3>
                                <h5 class="package-name-price">Free</h5>
                            </div>
                            <div class="package-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Step-by-step study guide</div>
                                        </div>
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">Starting from $13.99</div>
                                        </div>
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">No risk - 30 days guarantee</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">40+ Hours of Classes</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="empty-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">
                                                IELTS Speaking, Writing, Reading, Listening Preparation Courses
                                            </div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Speaking New Answers</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Writing Arguments E-Book</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">Awesome Extra Giveaways</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Writing Test Marking</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="padding-top: 30px;">
                                <button class="action-button-2">Start now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="pricing-card" style="borrder: 1px solid red;">
                            <div class="pricing-card-top pricing-card-top-light-green"></div>
                            <div class="package-name-wrap">
                                <h3 class="package-name-header">IELTS Basic Package</h3>
                                <h5 class="package-name-price">Free</h5>
                            </div>
                            <div class="package-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Step-by-step study guide</div>
                                        </div>
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">Starting from $13.99</div>
                                        </div>
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">No risk - 30 days guarantee</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">40+ Hours of Classes</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">
                                                IELTS Speaking, Writing, Reading, Listening Preparation Courses
                                            </div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Speaking New Answers</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Writing Arguments E-Book</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">Awesome Extra Giveaways</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Writing Test Marking</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="padding-top: 30px;">
                                <button class="action-button-2">Start now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="pricing-card" style="bordder: 1px solid red;">
                            <div class="pricing-card-top pricing-card-top-green"></div>
                            <div class="package-name-wrap">
                                <h3 class="package-name-header">IELTS Basic Package</h3>
                                <h5 class="package-name-price">Free</h5>
                            </div>
                            <div class="package-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Step-by-step study guide</div>
                                        </div>
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">Starting from $13.99</div>
                                        </div>
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">No risk - 30 days guarantee</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">40+ Hours of Classes</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">
                                                IELTS Speaking, Writing, Reading, Listening Preparation Courses
                                            </div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Speaking New Answers</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Writing Arguments E-Book</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">Awesome Extra Giveaways</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Writing Test Marking</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="padding-top: 30px;">
                                <button class="action-button">Start now</button>
                            </div>
                        </div>
                    </div>
                </div>
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



