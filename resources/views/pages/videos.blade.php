@extends('layouts.app')

@section('title', 'Videos')
@section('content')

<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <ul class="hero-area-tree">
                <li><a href="{{ route('landing') }}">Home</a></li>
                    <li>Videos</li>
                </ul>
                <h1 class="white-text">More Videos</h1>

            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

<!-- Videos -->
<div id="contact" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
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

{{--         <div class="row">
            <br/>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <a class="main-button icon-button inverse-btn pull-left" href="#">Previous</a>
                <a class="main-button icon-button pull-right" href="#">Next</a>
            </div>
        </div> --}}

    </div>
    <!-- container -->

    @if(!empty($videos))
            <!-- container -->
    <div class="container">

            <!-- row -->
            <div class="row">
                <!-- Courses -->
    <div id="courses" class="section">
    
        <!-- container -->
        <div class="container">
    
            <!-- row -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>Premium Videos</h2>
                    <p class="lead">you are a premium member</p>
                </div>
            </div>
            <!-- /row -->
    
            <!-- courses -->
            <div id="courses-wrapper">
    
                <!-- row -->
                <div class="row">
                    @foreach($videos as $video)
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="video">
                            <a class="about-video" href="#">
                                <img src="storage/{{$video->video-name}}" alt="">
                                <i class="play-icon fa fa-play"></i>
                            </a>
                            <span class="course-title">{{$video->title}}</span>
                        </div>
                    </div>
                    @endforeach
    
        </div>
        <!-- container -->
    @endif
    

</div>
<!-- /Courses -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Videos -->

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

@include('includes.footer')
@endsection

@section('footerScrips')
    @parent
    <script type="text/javascript" src="{{ URL::asset('js/plugin/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/video-script.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
