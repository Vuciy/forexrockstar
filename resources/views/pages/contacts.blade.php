@extends('layouts.app')


@section('title', 'Contacts')
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
                    <li>Contact</li>
                </ul>
                <h1 class="white-text">Get In Touch</h1>

            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- contact form -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h4>Send A Message</h4>
                    <form id="contact-form">
                        <input class="input" id="name" type="text" name="name" placeholder="Name" required>
                        <input class="input" id="email" type="email" name="email" placeholder="Email" required>
                        <input class="input" id="subject" type="text" name="subject" placeholder="Subject" required>
                        <textarea class="input" id="messege" name="message" placeholder="Enter your Message" required></textarea>
                        <button type="submit" class="main-button icon-button pull-right">Send Message</button>
                    </form>
                </div>
            </div>
            <!-- /contact form -->

            <!-- contact information -->
            <div class="col-md-5 col-md-offset-1">
                <h4>Contact Information</h4>
                <ul class="contact-details">
                    <li><i class="fa fa-envelope"></i>forexrockstar01@gmail.com</li>
                    <li><i class="fa fa-phone"></i>+2761 116 5577</li>
                    <li><i class="fa fa-map-marker"></i>PO 2000, Randfontain, Johannnesburg, South Africa</li>
                </ul>

                <!-- /contact map -->

            </div>
            <!-- contact information -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Contact -->


@include('includes.footer')
@endsection

@section('footerScrips')
    @parent
    <script src="{{ URL::asset('js/contacts.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection
