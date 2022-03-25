@extends('layouts.public')
@section('content')

    <div style=" width: 100%; background-size: cover; margin: 0px;  background-image: url('{{ URL::to('/') }}/images/mobile-lanhding.jpg')">
        <nav><img id="main-logo" src="{{ URL::to('/') }}/images/main-logo.png"></nav>

        <div class="container">
            <h1 id="main-title">Get <span id="main-title-ielts">IELTS</span> done.</h1>
            <h2 id="main-subtitle">No worry, no pain, no problem.</h2>
        </div>
        <div id="" class="container text-center my-5">
            <img id="girl-illustration" height="260" src="{{ asset('images/') }}/girl-illustration.png">
            <div class="container my-5">
                <button class="action-button">Start studying</button>
                <button class="action-button">Free stuff</button>
            </div>
        </div>
        <div class="container bg-gray py-5">
            <h3 class="text-center header-dark-blue main-section-header">Overview Header</h3>
            <p class="paragraph-gray p-4 main-paragraph">A short and informative few sentences or a paragraph about what the International English Language Testing System is and how Last Minute English can solve the visitors problem.</p>
            <div class="container">
                <img id="boy-illustration" height="260" src="{{ asset('images/') }}/boy-illustration.png">
            </div>
            <div class="container pt-5">
                <h1 class="header-dark-blue section-header">IELTS Complete Guide</h1>
                <div class="row">
                    <div class="col-12">
                        {{--                    <table class="text-align-left">--}}
                        {{--                        <tr>--}}
                        {{--                            <td class="p-3"><div class="green-circle mx-2 text-center text-white"><i class="fas fa-check"></i></div></td>--}}
                        {{--                            <td><div class="header-dark-blue benefits-list-item mx-2">Starting from $13.99</div></td>--}}
                        {{--                        </tr>--}}
                        {{--                        <tr>--}}
                        {{--                            <td><div class="green-circle mx-2 text-center text-white"><i class="fas fa-check"></i></div></td>--}}
                        {{--                            <td><div class="header-dark-blue benefits-list-item mx-2">Step-by-step study journey</div></td>--}}
                        {{--                        </tr>--}}
                        {{--                    </table>--}}

                        <div class="d-flex align-item-center   benefits-list-item-wrapper">
                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">Step-by-step study journey</div>
                        </div>
                        <div class="d-flex align-item-center   benefits-list-item-wrapper">
                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">Starting from $13.99</div>
                        </div>
                        <div class="d-flex align-item-center   benefits-list-item-wrapper">
                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">No risk - 30 days guarantee</div>
                        </div>
                        <div class="d-flex align-item-center  benefits-list-item-wrapper">
                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">Everything you need for IELTS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1 id="main-title" style="text-indent:40px;padding-top:20px;">Why Last Minute <span style="padding-top:20px; padding:10px;" id="main-title-ielts">English</span>?</h1>
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
        <div class="container-fluid bg-dark-bflue" style="height:520px; border: 1px solid green;">

        </div>
        <div class="container-fluid bg-dark-blue" style="border: 1px solid orange;">
            <div class="container">
                <h1 class="text-center text-white pricing-header">Pricing</h1>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="pricing-card" style="border: 1px solid red;">
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
                        <div class="pricing-card" style="border: 1px solid red;">
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
                        <div class="pricing-card" style="border: 1px solid red;">
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
        <footer class="container-fluid" style="margin-top: 40px; border: 1px solid red; margin-top: 40px;">
            <div class="container">
                <div class="row" >
                    <div class="col-12 col-md-4" style="border: 1px solid green;">
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

                    <div class="col-12 col-md-5 p-3">
                        <div class="d-flex">
                            <input type="text" placeholder="Enter email address" class="footer-input">
                            <div class="footer-button">Get the Free Booklet</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" style="border: 1px solid blue;">
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
                <hr style="background:green; margin: 75px 10px; height: 2px">

            </div>

        </footer>
    </div>

@endsection


