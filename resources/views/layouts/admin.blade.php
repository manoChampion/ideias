<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home - IDEIAS.COM</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{ asset("images/logo.png") }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset("images/logo2.png") }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            @can('view-menu-admin')
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <li class="active">
                    <a href="/app/feed"> <i class="menu-icon fa fa-feed"></i>Feed </a>
                </li>
                <h3 class="menu-title">Desenvolvedor</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-eye"></i>Controle de Acesso</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-briefcase"></i><a href="{{ route('view-roles') }}">Cargos</a></li>
                        <li><i class="fa fa-check"></i><a href="{{ route('view-permissions') }}">Permissões</a></li>
                        <li><i class="fa fa-user"></i><a href="{{ route('view-users') }}">Usuários</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('view-posts') }}"> <i class="menu-icon ti-archive"></i>Publicações </a>
                    <a href="{{ route('view-type-post') }}"> <i class="menu-icon fa fa-lightbulb-o"></i>Tipos de Publicação </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-certificate"></i>Especialização</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-gavel"></i><a href="{{ route('view-fields') }}">Áreas</a></li>
                        <li><i class="fa fa-graduation-cap"></i><a href="{{ route('view-courses') }}">Cursos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('view-institutions') }}"> <i class="menu-icon ti-home"></i>Instituições </a>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon fa fa-comments"></i>Bate-Papo </a>
                </li>
            </ul>
            @endcan
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
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

                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

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

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{ $title }}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">{{ $path }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        @yield('content')
    </div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->
<script src="{{ asset("js/vendor/jquery-2.1.4.min.js") }}"></script>
<script src="{{ asset("js/popper.min.js") }}"></script>
<script src="{{ asset("js/plugins.js") }}"></script>
<script src="{{ asset("js/main-theme.js") }}"></script>

<script src="{{ asset("js/lib/chart-js/Chart.bundle.js") }}"></script>
<script src="{{ asset("js/dashboard.js") }}"></script>
<script src="{{ asset("js/widgets.js") }}"></script>
<script src="{{ asset("js/lib/vector-map/jquery.vmap.js") }}"></script>
<script src="{{ asset("js/lib/vector-map/jquery.vmap.min.js") }}"></script>
<script src="{{ asset("js/lib/vector-map/jquery.vmap.sampledata.js") }}"></script>
<script src="{{ asset("js/lib/vector-map/country/jquery.vmap.world.js") }}"></script>
<script src="{{ asset("js/jquery.form.min.js") }}"></script>
<script src="{{ asset("js/app.js") }}"></script>
<script src="{{ asset("js/main.js") }}"></script>

<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>


</body>
</html>
