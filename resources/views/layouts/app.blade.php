<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="{{ asset("css/normalize.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
</head>
<body>
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
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="http://localhost:8000/images/avatar/1.jpg"></span>
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
                        <img class="user-avatar rounded-circle" src="http://localhost:8000/images/admin.jpg" alt="User Avatar">
                    </a>
    
                    <div class="user-menu dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>manoChampion</a>
    
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>
    
                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
    
                        <!-- Authentication Links -->
                        <a class="nav-link" href="http://localhost:8000/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="fa fa-power -off"></i>Logout
                        </a>
    
                        <form id="logout-form" action="http://localhost:8000/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="UropbqeBDQMkvXF653qyVmSfX8ViczoMYpPAgD4f"> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </header>

    <div class="container">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</body>
</html>