<html>
<head>
    <meta charset="UTF-8">
    <title>Bongo Afrika</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">


</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bongo Afrika</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
    @yield('content')
</div>


<!-- compiled and minified javascript -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</body>
</html>