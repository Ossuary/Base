{{-- Navigation Bar --}}
<nav class="navbar navbar-inverse" id="admin-navbar">
    <div class="container">
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
                           aria-expanded="false">{{ Auth::user()->email }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>