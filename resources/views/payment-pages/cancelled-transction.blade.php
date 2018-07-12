@extends('layouts.app')

@section('title', 'Cancelled Transiction')
@section('content')

<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(../img/page-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <ul class="hero-area-tree">
                    <li><a href="{{ route('landing') }}">Home</a></li>
                </ul>
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
            <div class="cancelled-transiction">
                <p>Your Transiction has been canceled.</p>
                <form action="https://{{$pfHost}}/eng/process" method="post">
                    @foreach($data as $name=> $value)
                        <input type="hidden" name="{{$name}}" value="{{$value}}"/>
                    @endforeach
                    <button type="submit" class="main-button icon-button">Try Again</button>
                    <a class="main-button icon-button inverse-btn" href="route('home')">Back Home</a
                </form>
            </div>

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
