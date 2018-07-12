@extends('layouts.app')

@section('content')

<!-- Home -->
<div id="home" class="hero-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(../img/home-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <h1 class="white-text">Welcome Admin, {{Auth::user()->name}}</h1>
                    <p class="lead white-text">You are permited to upload and delete videos</p>
                    <a class="main-button icon-button" href="{{ route('login') }}">
                        Sign in as user!
                    </a>
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

        <div class="row">
            <div class="section-header">
                <h2>Admin Section</h2>
            </div>

            <div class="container">
                <div class="content">
                    @if(!empty($admin_list))
                        <div class="row">
                            <p>Admin List</p>
                                <div class="col-sm-12">
                                   <div class="table-responsive">
                                           <table class="table">
                                               <thead>
                                                   <tr>
                                                       <th>#</th>
                                                       <th>Admin Name</th>
                                                       <th>Admin Email</th>
                                                       <th>Added By</th>
                                                       <th>Remove Admin</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   @foreach($admin_list as $admin)
                                                   <tr>
                                                       <td>{{$admin['id']}}</td>
                                                       <td>{{$admin['name']}}</td>
                                                       <td>{{$admin['email']}}</td>
                                                       <td><span>{{ $admin['added_by'] }}</span></td>
                                                       <td><button class="btn btn-danger remove-admin" id="{{$admin['id']}}"><i class="fa fa-minus"></i></button></td>
                                                   </tr>
                                                   @endforeach
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                           </div>
                           @endif

                           <br/>
                           <hr/>
                           <br/>

                           <div class="row">
                               <p>Add New Admin</p>
                               <form id="add-new-admin">
                                <div class="col-sm-12">
                                   <div class="table-responsive">
                                           <table class="table">
                                               <thead>
                                                   <tr>
                                                       <th>Admin Name</th>
                                                       <th>Admin Email</th>
                                                       <th>Admin Password</th>
                                                       <th>Add Admin</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td><input type="text" class="form-control admin-name" required/><span class="required-text pull-left"></span></td>
                                                       <td><input type="email" class="form-control admin-email" required/><span class="required-text pull-left"></span></td>
                                                       <td><input type="text" class="form-control admin-password" required/><span class="required-text pull-left"></span></td>
                                                       <td><button type="submit" class="btn btn-positive submit-admin"><i class="fa fa-plus"></i></button></td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                </div>
                            </form>
                           </div>
                </div>
            </div><br/>
        </div>

        <!-- row -->
        <div class="row">

            <div class="col-md-12">
                <div class="section-header">
                    <h2>Upload Videos</h2>
                    <p class="lead">Select videos to upload</p>
                </div>

                <div class="container">
                    <div class="content">
                        <div class="form-group">
                            <p>Video Title</p>
                            <input class="form-conrol video-title"/>
                        </div>
                        <div>
                            <div id="files" class="files">
                                <div id="testimage"><img src="{{ URL::asset('/img/testimage.png')}}" alt="test image"></div>
                            </div>
                            <span class="btn btn-info btn-file">
                                Upload a Video
                                <input id="fileupload" class="upload" type="file" name="files[]">
                            </span>
                            <div id="progress" class="progress" style="display:none;">
                                <div class="progress-bar progress-bar-success"></div>
                            </div>
                        </div>
                    </div>
                </div><br/>
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

        <div class="row">
            <div class="section-header text-center">
                <h4>Update Testimonial  <small style="color:#999;">Go to testimonial page to delete</small></h4>
                <form id="update-testimonial">
                <div class="form-group">
                    <input class="input testimonial-title" type="text" placeholder="Enter testimonial title here" required/><span class="required-text pull-left"></span>
                </div>
                <div class="form-group">
                    <textarea class="testimonial-textarea" placeholder="Enter your testimonial here" required></textarea><span class="required-text pull-left"></span>
                    <br/><br/>
                    <button type="submit" class="main-button icon-button pull-right testimonail-post">
                        Submit
                    </button>
                </div>
                </form>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="section-header text-center">
                <h2>Config Videos</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <!-- /row -->

        <div class="row">
            <div class="center-btn">
            <a class="main-button icon-button" href="{{route('videos')}}">More Videos</a>
            </div>
        </div>

    </div>
    <!-- container -->

</div>
<!-- /Courses -->

@include('includes.footer')
@endsection

@section('footerScrips')
    @parent
    <script src="{{ URL::asset('js//plugin/jquery/fileupload/vendor/jquery.ui.widget.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js//plugin/jquery/fileupload/jquery.fileupload-ui.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js//plugin/jquery/fileupload/jquery.iframe-transport.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js//plugin/jquery/fileupload/jquery.fileupload-validate.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js//plugin/jquery/fileupload/jquery.fileupload-process.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js//plugin/jquery/fileupload/jquery.fileupload.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js//plugin/jquery/fileupload/jquery.fileupload-image.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/upload.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/scripts.js') }}" type="text/javascript" charset="utf-8"></script>
@endsection