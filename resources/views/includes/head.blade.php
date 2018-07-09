<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="_token" content="{{ csrf_token() }}" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<title> @yield('title', 'Forex Rockstar')</title>

<!-- Scripts -->

<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

<!--bootstrap-->
<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">

<!--messenger plugin-->
<link type="text/css" rel="stylesheet" href="{{ asset('css/plugin/messenger/messenger.css') }}">

<!--font awesome-->
<link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

<!--- Icon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo/forex-rockstar-logo.png') }}">


<!-- Styles -->
<link href="{{ asset('css/fileuploader.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->