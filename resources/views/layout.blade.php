<html>
	<head>
		<meta charset="UTF-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Bongo Afrika</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">


	</head>
	<body>
		<div class="container-fluid" id="main">
			<div class="navbar navbar-default global-navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Bongo afrika</a>
				</div>

				<div class="navbar-collapse collapse navbar-responsive-collapse" id="navbar-main">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="{{ url('/') }}">Home</a></li>
						<li><a href="">About</a></li>

                        @if(!\Auth::guest())
                            @if(\Auth::user()->isInvestor())
                                <li><a href="{{ url('/innovations/open') }}">Open Innovations</a></li>
                                <li><a href="">Funded Innovations</a></li>
                            @else
                                <li><a href="">Post an Innovation</a></li>
                            @endif
                        @endif
					</ul>

					<ul class="nav navbar-nav navbar-right">
					@if(\Auth::user())
					<li><a href="{{ url('/logout') }}">Logout</a></li>
					<li><a><b>Signed in as {{ \Auth::user()->name }}</b></a></li>
					@else
					<li><a href="{{ url('/login') }}">Login</a></li>
					<li><a href="{{ url('/register') }}">Register</a></li>
					@endif
					</ul>
				</div> <!-- end nav-collapse -->
			</div> <!-- end navbar -->

			@yield('content')
		</div> <!-- end container main-->

		<!-- compiled and minified javascript -->
		<script src="{{ asset('/js/jquery.min.js') }}"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/dashboard.js') }}"></script>
        @yield('script')


	</body>
</html>