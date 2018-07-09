@extends('layouts.app')

@section('title', 'Testimonial')
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
                    <li>Testimonial</li>
                </ul>
                <h1 class="white-text">Testimonial</h1>
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
                <div id="main" class="col-md-9 col-centered">
            @if($testimonials)
                @foreach($testimonials as $key => $val)
                    <div class="testimonial">
                        <h4>{{$val->title}}</h4>
                        <div class="blog-post">
                            <p>{!!$val->testimonial!!}</p>
                        </div>
                        <div class="blog-share">
                                <small>{{date("jS F, Y", strtotime($val->created_at))}}</small> 
                                @if(Auth::guard('admin')->check())
                                    <button type="Submit" class="pull-right delete-testimonial" id="{{$val->id}}" style="color:coral;background:transparent;">Delete<button>
                                @endif
                        </div>
                    </div>
                    <br/>
                @endforeach
            @endif

            <div class="row">
                <br/>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    {{$testimonials->links() }}
                </div>
            </div>
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
    <script src="{{ URL::asset('js/testimonial.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
