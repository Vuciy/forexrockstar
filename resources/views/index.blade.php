@extends('layouts.app')

@section('content')

<!-- Home -->
<div id="home" class="hero-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="white-text">Online Forex Training Course</h1>
                <p class="lead white-text">Join the world's best online life changing forex education.</p>
                @if(Auth()->guest())
                <a class="main-button icon-button green-btn" href="{{route('register')}}">Join Now!</a>
                @else
                    @if(isset($data))
                    <form action="https://{{$pfHost}}/eng/process" method="post">
                        @foreach($data as $name=> $value)
                            <input type="hidden" name="{{$name}}" value="{{$value}}"/>
                        @endforeach
                        <button type="submit" class="main-button icon-button">Go Premium!</button>
                    </form>
                    @else
                    <p class="white-text">Premium Member<p>
                    @endif
                @endif
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Home -->

<!-- About -->
<div id="about" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-6">
                <div class="section-header">
                    <h2>Forex Rockstar</h2>
                    <p class="lead">Let's Rock the Market</p>
                </div>

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-flask"></i>
                    <div class="feature-content">
                        <h4>Online Course</h4>
                        <p>Our comprehensive online course offers you the luxury of learning how to trade the foreign exchange markets in an environment you are most comfortable in, your home.</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-users"></i>
                    <div class="feature-content">
                        <h4>Expert Teachers</h4>
                        <p>Without a good mentor, traders often lose discipline, focus and the drive needed to become a successful trader. Our mentorship program will be helping you stay disciplined, focused and driven throughout your trading career.</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-comments"></i>
                    <div class="feature-content">
                        <h4>Community</h4>
                        <p>The Foreign Exchange market (also known as FOREX or just FX) is one of the largest, fast-paced markets in the financial world. Both our beginner and advanced courses give you a smooth learning curve with quality theory content backed by in-class practical trading.</p>
                    </div>
                </div>
                <!-- /feature -->

            </div>

            <div class="col-md-6">
                <div class="about-img">
                    <img src="./img/about.png" alt="">
                </div>
            </div>

        </div>
        <!-- row -->

    </div>
    <!-- container -->
</div>
<!-- /About -->

<!-- Courses -->
<div id="courses" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
            <div class="section-header text-center">
                <h2>Explore Videos</h2>
                <p class="lead">See videos from our youtube <a href="">channel<a>.</p>
            </div>
        </div>
        <!-- /row -->

        <!-- courses -->
        <div id="courses-wrapper">

            <!-- row -->
            <div class="row">

                <!-- single course -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="video" >
                            <iframe  src="https://www.youtube.com/embed/UgTx-jaWuzU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <br/><a class="course-title" href="https://www.youtube.com/embed/UgTx-jaWuzU">Forexrockstar $250 challenge update.Results Always tell the truth Always.</a>
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="video">
                            <iframe src="https://www.youtube.com/embed/O5E4hjJ4tzw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <br/><a class="course-title" href="https://www.youtube.com/embed/O5E4hjJ4tzw">Forextrading made easy.</a>
                    </div>
                </div>
                <!-- /single course -->

                <!-- single course -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="video">
                            <iframe src="https://www.youtube.com/embed/rcNYi5iXyJM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <br/><a class="course-title" href="https://www.youtube.com/embed/rcNYi5iXyJM">The best Tip on Forex trading.</a>
                    </div>
                </div>
                <!-- /single course -->

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="video">
                            <iframe  src="https://www.youtube.com/embed/zzHBCuSACg4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <br/><a class="course-title" href="https://www.youtube.com/embed/zzHBCuSACg4">master this concept to dorminate the news in forex.</a>
                    </div>
                </div>
                <!-- /single course -->


                <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video">
                                <iframe src="https://www.youtube.com/embed/VYJ2ZTytf2c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <br/><a class="course-title" href="https://www.youtube.com/embed/VYJ2ZTytf2c">my intra day market entry strategy.</a>
                        </div>
                    </div>
                    <!-- /single course -->
    
                    <!-- single course -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video">
                                <iframe  src="https://www.youtube.com/embed/jWyQbdWH7b0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <br/><a class="course-title" href="https://www.youtube.com/embed/jWyQbdWH7b0">serious forex results $1000.Huge announcement as well. forexrockstar01@gmail.com</a>
                        </div>
                    </div>
                    <!-- /single course -->
    
                    <!-- single course -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video">
                                <iframe  src="https://www.youtube.com/embed/STJ-Vk9aUhg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <br/><a class="course-title" href="https://www.youtube.com/embed/STJ-Vk9aUhg">Rockstar student doubles the account in one Pair, $4000 in a day trading forex.</a>
                        </div>
                    </div>
                    <!-- /single course -->
    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video">
                                <iframe  src="https://www.youtube.com/embed/njJd0YCllAs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <br/><a class="course-title" href="https://www.youtube.com/embed/njJd0YCllAs">proof of market prediction 100% correct</a>
                        </div>
                    </div>

            </div>
            <!-- /row -->

            <!-- row -->
           {{--  <div class="row">
                <div class="youtube-channel"></div>
            </div> --}}
            <!-- /row -->

        </div>
        <!-- /courses -->

        <div class="row">
            <div class="center-btn">
                <a class="main-button icon-button" href="{{route('videos')}}">More Videos</a>
            </div>
        </div>

    </div>
    <!-- container -->

</div>
<!-- /Courses -->

<!-- Call To Action -->
<div id="cta" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta1-background.jpg)"></div>
    <!-- /Backgound Image -->

    <!-- container -->
    <div class="container">
        @if(Auth()->guest())
        <div class="row">
                <div class="col-md-6">
                    <h2 class="white-text">Sign up and Go premium</h2>
                    <p class="lead white-text">Premium Packege allows you to  View special Videos.</p>
                        <a href="{{route('register')}}" class="main-button icon-button green-btn">Sign Up</a>
                </div>
        </div>
        @else
        <!-- row -->
        <div class="row">
            @if(!isset($data))
            <div class="col-md-6">
                    <h2 class="white-text">You are a Premium member</h2>
                </div>
            @else
                <div class="col-md-6">
                    <h2 class="white-text">Go Premium for  R3000 once off</h2>
                    <p class="lead white-text">Premium Packege allows you to  View special Videos.</p>
                    <form action="https://{{$pfHost}}/eng/process" method="post">
                        @foreach($data as $name=> $value)
                            <input type="hidden" name="{{$name}}" value="{{$value}}"/>
                        @endforeach
                        <button type="submit" class="main-button icon-button">Subscribe Here</button>
                    </form>
                </div>
            @endif

        </div>
        @endif
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Call To Action -->

<!-- Why us -->
<div id="why-us" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <hr class="section-hr">

        <!-- row -->
        <div class="row">

            <div class="col-md-6">
                <h3>Live Trades.</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>

            <div class="col-md-5 col-md-offset-1">
                <a class="about-img" href="#">
                    <img src="./img/live-trade.png" alt="">
                </a>
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Why us -->

<!-- Contact CTA -->
<div id="contact-cta" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
    <!-- Backgound Image -->

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="white-text">Contact Us</h2>
                <p class="lead white-text">Send us an email, we are always ready to assist you.</p>
                <a class="main-button icon-button" href="{{ route('contacts') }}">Contact Us Now</a>
            </div>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Contact CTA -->


@include('includes.footer')
@endsection

@section('footerScrips')
    @parent
    <script src="{{ URL::asset('js/scrpts.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection