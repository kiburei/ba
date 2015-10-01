<html>
<<<<<<< 15b182aad8dc9bb0c3504143e47c46325357e5c2
<head>
    <meta charset="UTF-8">
    <title>Bongo Afrika</title>

    <!-- Latest compiled and minified CSS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bitter:700,400,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/homepage-innovator.css') }}">


</head>
<body>


    <div class="container" id="main">

      <div class="navbar navbar-default barnav">
                  
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
                          <ul class="nav navbar-nav">
                              <li class="active"><a href="">Home</a></li>
                              <li><a href="">About</a></li>
                              <li><a href="">Team</a></li>
                              <li class=""><a href="">Contact Us</a></li>
                          </ul>
                          <form class="navbar-form pull-left">
                              <input type="text" class="form-control" placeholder="Search this site..." id="search-input">
                              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                          </form>
                          
                          
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


      <div>
          @yield('content')
      </div>

    </div> <!-- end container main-->


    <!-- compiled and minified javascript -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</body>
=======
	<head>
		<meta charset="UTF-8">
		<title>Bongo Afrika</title>

		<!-- Latest compiled and minified CSS -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bitter:700,400,400italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.min.css') }}">
		<link rel="stylesheet" href="//localhost/projects/ba_dev/ui/prototype/public/assets/css/dashboard.css">
	<!--    <link rel="stylesheet" href="{{ asset('/css/homepage-innovator.css') }}">-->


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
						<li><a href="">Open Innovations</a></li>
						<li><a href="">Funded Innovations</a></li>
						<li><a href="">Post an Innovation</a></li>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/js/dashboard.js') }}"></script>
	</body>
>>>>>>> 71a58ec8fad18ab78c08c617ba7365f47bff61b2
</html>