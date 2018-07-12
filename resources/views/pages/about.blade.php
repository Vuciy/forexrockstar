@extends('layouts.app')

@section('title', 'About')
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
                    <li>About</li>
                </ul>
                <h1 class="white-text">Learn About Us</h1>

            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

<!-- About -->
<div id="contact" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">
            <p>
                    Forex Rock star Trading is a forex training organization that offers Forex Training, Forex Signals, Copy Trading and Mentoring. We are strong believers in innovation but when it comes to our trading, simplicity has been our motto. We use pure price action, high and lows of the day to monitor different currency pairs.
            </p>

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /About -->

@include('includes.footer')
@endsection

@section('footerScrips')
    @parent
    <script src="{{ URL::asset('js/scrpts.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
