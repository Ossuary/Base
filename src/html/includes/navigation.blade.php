<nav id="navigation" class="navbar navbar-inverse" >
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/"> {{ config('app.title') }} </a>

            <div class="navbar-header pull-left">
                <ul class="nav pull-left">
                    <li class="dropdown ">
                        <a id="lang-button" href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-globe"></i>
                            {{ Config::get('languages')[App::getLocale()] }}
                            <span class="caret"></span>
                        </a>
                        <ul id="language-dropdown" class="dropdown-menu dropdown-menu-right">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <li>
                                        <a href="{{ route('lang.switch', $lang) }}">{{$language}} </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{{ (Request::is('about') ? 'active' : '') }}}"><a class="" href="{{URL::to('about')}}">{{trans('language.about')}}</a></li>
                <li class="{{{ (Request::is('contacts') ? 'active' : '') }}}"><a class="" href="{{URL::to('contacts')}}">{{trans('language.contacts')}}</a></li>
            </ul>
        </div>



    </div>

</nav>