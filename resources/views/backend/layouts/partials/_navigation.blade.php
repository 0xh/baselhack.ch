<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">

        @if (Auth::guest())
        @else
        <a class="navbar-brand" href="{{ route('backend.users.dashboard.index') }}">
            <img class="" src="{{ asset('backend/images/baselhack_logo.png') }}" alt="W+F Logo">
        </a>
        @endif
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                @if (Auth::guest())

                @else

                    <li class="nav-item"><a href="{{ route('backend.association.dashboard.index') }}" class="nav-link">Association</a></li>


                    <li class="nav-item"><a href="{{ route('backend.event.dashboard.index') }}" class="nav-link">Event 2018</a></li>

                    <li class="nav-item"><a href="{{ route('backend.administrators.dashboard.index') }}" class="nav-link">Administrator</a></li>



                @endif


            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a  class="nav-link" href="{{ url('/') }}">Back to the website </a></li>
                    <li><a dusk="login" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @else


                    <li><a class="nav-link" href="{{ route('backend.users.settings.profile.index') }}"><i class="fal fa-user"></i> <span style="font-size: 12px; font-weight: bold;">{{ auth()->user()->name }}</span></a></li>



                    <li><a dusk="logout"  class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fal fa-sign-out"></i></a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                    </li>



                @endguest
            </ul>
        </div>
    </div>
</nav>

