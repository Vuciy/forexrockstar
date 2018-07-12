<!DOCTYPE html>
<html lang="en">
<head>
    @section('footerCSS')
        @include('includes.head')
    @show
</head>
<body>
    <div id="app">
            @if(\Route::current()->uri == '/' || \Route::current()->uri == 'home' || \Route::current()->uri == 'admin/home')
                @include('includes.main-nav')
            @else
                @include('includes.nav')
            @endif
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @section('footerScrips')
        @include('includes.scripts')
    @show
</body>
</html>
