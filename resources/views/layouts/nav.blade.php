<nav id="navbar" class="navbar navbar-dark navBackground navbar-expand-md shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }}--}}
            <img style="width: 25%; background: white" src="{{ asset('images/transport-logo.png') }}">
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="#customer">{{ __('landing.customer') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#delivery">{{ __('landing.home-delivery') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#working">{{ __('landing.working') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#certification">{{ __('landing.certification') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('invest') }}">{{ __('landing.invest') }}</a>
                    </li>

                    @if(App::getLocale() != 'en')
                        <li class="nav-item"><a class="nav-link" href="{{ route('lang', ['lang' => 'en']) }}"><img src="{{ asset('images/flag_en.png') }}" alt=""> <span class="d-lg-none">English</span></a></li>
                    @endif

{{--                    @if(App::getLocale() != 'sk')--}}
{{--                        <li class="nav-item"><a class="nav-link" href="{{ route('lang', ['lang' => 'sk']) }}"><img src="{{ asset('images/flag_sk.png') }}" alt=""> <span class="d-lg-none">Slovensky</span></a></li>--}}
{{--                    @endif--}}

                    @if(App::getLocale() != 'nl')
                        <li class="nav-item"><a class="nav-link" href="{{ route('lang', ['lang' => 'nl']) }}"><img src="{{ asset('images/flag_nl.png') }}" alt=""> <span class="d-lg-none">Nederlands</span></a></li>
                    @endif
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
