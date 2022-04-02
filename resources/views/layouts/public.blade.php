@include('includes.header')

<body id="app">
<style>

    #overlay {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0, 0.7);
        z-index: 100;
        display: none;
        align-items: center;
        justify-content: center;
    }

    #popout {
        height: 350px;
        width: 700px;
        border-radius: 30px;
        background: white;
        position: relative;
    }

    #popout-header {
        height: 60px;
        background: #0cc191;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        padding: 15px;
        text-align: center;
    }

    #close-popout {
        position: absolute;
        font-size: 33px;
        right: 15px;
        top: 0px;
    }

    .popout-input {

        width: 100%;
        margin: 20px;
        margin-bottom: 0px;
        margin-top: 15px;

        border: 1px solid #c5c5c5;
        border-radius: 5px;
        padding: 10px;

    }

</style>
<div id="overlay">
    <div id="popout">
        <span id="close-popout">&times;</span>
        <div id="popout-header">
            <h3 style="font-weight: 900" class="text-white">Subscribe And Get Awesome Freebies!</h3>
        </div>
        <div style="display: flex">
            <div class="px-5 py-3">
                <img src="{{ URL::to('/') }}/images/popout-img.png">
            </div>
            <div>
                <form class="mt-2">
                    <div class="form-group">
                        <input type="text" class="popout-input" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="popout-input" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <button class="popout-input action-button" class="action-button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>





</script>
<div id="mobile-nav">
    <div style="overflow: hidden">
        <div style="float: right">
         <i id="mobile-nav-close" class="fas fa-times m-4" style=" color: #6b7280;"></i>
        </div>
    <ul>
        <li><a>Blog</a></li>
        <li><a>Pricing</a></li>
        <li><a>About</a></li>
        <li><a>Contact</a></li>
    </ul>
        <div class="text-center" style="font-size: 16px;">
            <button class="action-button">Start studying</button>
        </div>
        <div class="social-icons-wrapper">
            <ul class="text-white social-icons-list">
                <li><a><i class="fab fa-instagram "></i></a></li>
                <li><a><i class="fab fa-facebook-square text-white"></i></a></li>
                <li><a><i class="fab fa-linkedin text-white"></i></a></li>
                <li><a><i class="fab fa-youtube text-white"></i></a></li>
            </ul>
        </div>
    </div>
</div>
@include('includes.nav')
@yield('content')

</body>

