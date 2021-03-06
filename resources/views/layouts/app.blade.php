<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home - IDEIAS.COM</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <link rel="stylesheet" href="{{ asset("css/normalize.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/themify-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("css/flag-icon.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/cs-skin-elastic.css") }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset("scss/style.css") }}">
    <link href="{{ asset("css/lib/vector-map/jqvmap.min.css") }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">1</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 1 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="message"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="{{ asset("images/avatar/1.jpg") }}"></span>
                                    <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset("images/admin.jpg") }}" alt="User Avatar">
                        </a>
    
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>{{ Auth::user()->username }}</a>
    
                            <a class="nav-link" href="{{ route('home') }}"><i class="fa fa- user"></i>Gerenciador</a>
    
                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
    
                            <!-- Authentication Links -->
                            @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @else
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power -off"></i>{{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest
                        </div>
                    </div>
                </div>
            </div> 
        </header>
        @yield('form-post')
    </div>
    <div id="bottom-panel" class="container-fluid bottom-panel">
        <div class="row row justify-content-md-center">
            <div class="col-md-8">
                @yield('content')
            </div>
        </div>
    </div>

<script src="{{ asset("js/vendor/jquery-2.1.4.min.js") }}"></script>
<script src="{{ asset("js/popper.min.js") }}"></script>
<script src="{{ asset("js/plugins.js") }}"></script>
<script src="{{ asset("js/main-theme.js") }}"></script>
<script src="{{ asset("js/app.js") }}"></script>

<script>
$(document).ready(function() {
  var height = $("#right-panel").height();
  $("#bottom-panel").css("margin-top", height + 20);

});
</script>

</body>
</html>
