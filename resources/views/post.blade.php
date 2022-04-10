@extends('layouts.public')
@section('content')
    <div>
        <div style=" width: 100%; background-size: cover; margin: 0px;">
            @include('includes.nav')
        </div>
        <div class="container mt-5 mb-3">
            <article>
                <div class="">
                    <div class="article-info text-center">
                        <div class="d-inline-block mx-1 fw-bold last-minute-dark-blue">Category</div>
                        <div class="d-inline-block mx-1 fw-bold last-minute-green">4 min read</div>
                     </div>
                </div>
                <div>
                    <h1 class="text-center last-minute-dark-blue single-post-header">
                        10 Featured Blog Post Headers That Will Blow Your Mind
                    </h1>
                <div class="text-center p-3">
                    <img style="width: 100%;" src="{{ URL::to('/') }}/images/image-post.png">
                </div>
                </div>
                <div class="">
                    <div class="">
                        <div class="article-info text-center p-3">
                            <div>
                                <img src="{{ URL::to('/') }}/images/author.png">
                            </div>
                            <div>
                                <div class="d-block mx-1 fw-bold last-minute-dark-blue text-left">Charlie</div>
                                <div class="d-block mx-1 fw-bold last-minute-green text-left">25th December</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="post-text last-minute-dark-blue">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                      <br>
                        <div class="post-text last-minute-dark-blue">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                        <div class="post-start-studying mt-3">
                            <div class="post-start-studying-top"></div>
                            <h1 class="text-center" id="main-title-post">Get <span id="main-title-ielts-post">IELTS</span> done.</h1>
                            <h2 class="text-center" id="main-subtitle-post">No worry, no pain, no problem.</h2>
                            <div class="form-group text-center">
                                <button class="popout-input square-action-button" style="width: 250px">Start Studying</button>
                            </div>
                        </div>
                      </div>
                </div>
            </article>
            <div class="container mt-3">
                <div class="row ">
                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div class="article-info-group text-left pl-3">
                                    <div class="d-inline-block mx-1 fw-bold last-minute-dark-blue">Category</div>
                                    <div class="d-inline-block mx-1 fw-bold last-minute-green">4 min read</div>
                                </div>
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div class="article-info-group text-left pl-3">
                                    <div class="d-inline-block mx-1 fw-bold last-minute-dark-blue">Category</div>
                                    <div class="d-inline-block mx-1 fw-bold last-minute-green">4 min read</div>
                                </div>
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div class="article-info-group text-left pl-3">
                                    <div class="d-inline-block mx-1 fw-bold last-minute-dark-blue">Category</div>
                                    <div class="d-inline-block mx-1 fw-bold last-minute-green">4 min read</div>
                                </div>
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div class="article-info-group text-left pl-3">
                                    <div class="d-inline-block mx-1 fw-bold last-minute-dark-blue">Category</div>
                                    <div class="d-inline-block mx-1 fw-bold last-minute-green">4 min read</div>
                                </div>
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div class="article-info-group text-left pl-3">
                                    <div class="d-inline-block mx-1 fw-bold last-minute-dark-blue">Category</div>
                                    <div class="d-inline-block mx-1 fw-bold last-minute-green">4 min read</div>
                                </div>
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="article">
                            <div class="article-photo" style="background-image: url('{{ URL::to('/') }}/images/post-placeholder.jpg')">
                            </div>
                            <div class="article-text-wrapper">
                                <div class="article-info-group text-left pl-3">
                                    <div class="d-inline-block mx-1 fw-bold last-minute-dark-blue">Category</div>
                                    <div class="d-inline-block mx-1 fw-bold last-minute-green">4 min read</div>
                                </div>
                                <div><h3 class="article-header">inibus Bonorum et Malorum</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/') }}/app.js"></script>
@endsection



