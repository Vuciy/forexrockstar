<header id="header">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand with-white">
                <a class="logo" href="{{ url('/') }}">
                        {{ config('app.name', 'Forex Rockstar') }}
                </a>
            </div>
            <!-- /Logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- /Mobile toggle -->
        </div>

        <!-- Navigation -->
        <nav id="nav">
            <ul class="main-menu nav navbar-nav navbar-right">
                <li><a href="{{ route('landing') }}">Home</a></li>
                @if(Auth::guard('admin')->check())
                <li><a href="{{ route('admin.home') }}">Admin</a></li>
                @endif
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('videos') }}">Videos</a></li>
                @guest
                    <li class="account-container"><a href="">Account <span class="caret"></a>
                        <ul class="account">
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        </ul>
                    </li>
                @else
                    <li class="account-container"><a href="">{{ Auth::user()->name }} <span class="caret"></a>
                        <ul class="account">
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
                <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
                <li><a href="{{ route('contacts') }}">Contact</a></li>
            </ul>
        </nav>
        <!-- /Navigation -->

    </div>
</header>