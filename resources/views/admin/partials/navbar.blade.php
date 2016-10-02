{{-- Navigation Bar --}}
<nav class="navbar navbar-inverse" id="admin-navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar-menu">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">{{ config('app.title') }} Admin</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">

            <ul class="nav navbar-nav">
                <li><a href="/">Base Home</a></li>
                @if (Auth::check())

                    <li @if (Request::is('admin/newsletter*')) class="active" @endif>
                        <a href="/admin/newsletter">Newsletter</a>
                    </li>
                @endif
            </ul>

            {{-- Login --}}
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="/auth/login">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu " role="menu">
                            <li><a href="/auth/logout"><i class="fa fa-power-off"></i></a></li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>


<!--
<div id="wrapper">
    <div class="overlay"></div>


    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Brand
                </a>
            </li>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="#">Team</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <a href="https://twitter.com/maridlcrmn">Follow me</a>
            </li>
        </ul>
    </nav>



    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>

    </div>


</div>
-->