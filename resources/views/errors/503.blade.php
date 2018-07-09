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
                    <li>Page Not Found</li>
                </ul>
                <h1 class="white-text">Oops! Page you looking for is not found.</h1>

            </div>
        </div>
    </div>

</div>
@endsection

@section('footerScrips')
    @parent
    <script src="{{ URL::asset('js/scrpts.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
