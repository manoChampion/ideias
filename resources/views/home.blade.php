@extends('layouts.admin')

@section('content')

<div class="col-sm-12">
    <div class="alert  alert-success alert-dismissible fade show" role="alert">
        <span class="badge badge-pill badge-danger">Success</span> You successfully read this important alert message.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>


<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Usuários Online</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>

        </div>

    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-2">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Ideias Públicadas</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart2"></canvas>
            </div>

        </div>
    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Projetos em Andamento</p>

        </div>

        <div class="chart-wrapper px-0" style="height:70px;" height="70">
            <canvas id="widgetChart3"></canvas>
        </div>
    </div>
</div>
<!--/.col-->

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-4">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">10468</span>
            </h4>
            <p class="text-light">Projetos Concluídos</p>

            <div class="chart-wrapper px-3" style="height:70px;" height="70">
                <canvas id="widgetChart4"></canvas>
            </div>

        </div>
    </div>
</div>
<!--/.col-->

<div class="col-lg-3 col-md-6">
    <div class="social-box facebook">
        <i class="fa fa-facebook"></i>
        <ul>
            <li>
                <strong><span class="count">40</span> k</strong>
                <span>likes</span>
            </li>
            <li>
                <strong><span class="count">450</span></strong>
                <span>shares</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div><!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box twitter">
        <i class="fa fa-twitter"></i>
        <ul>
            <li>
                <strong><span class="count">30</span> k</strong>
                <span>followers</span>
            </li>
            <li>
                <strong><span class="count">450</span></strong>
                <span>tweets</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div><!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box linkedin">
        <i class="fa fa-linkedin"></i>
        <ul>
            <li>
                <strong><span class="count">40</span> +</strong>
                <span>contacts</span>
            </li>
            <li>
                <strong><span class="count">250</span></strong>
                <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div><!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box google-plus">
        <i class="fa fa-google-plus"></i>
        <ul>
            <li>
                <strong><span class="count">94</span> k</strong>
                <span>followers</span>
            </li>
            <li>
                <strong><span class="count">92</span></strong>
                <span>circles</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div><!--/.col-->


<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Total Profit</div>
                    <div class="stat-digit">1,012</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">New Customer</div>
                    <div class="stat-digit">961</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Active Projects</div>
                    <div class="stat-digit">770</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Active Projects</div>
                    <div class="stat-digit">770</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
