<nav class="navbar is-spaced">

    <div class="container ">


        <div class="navbar-brand">
{{--
            <a class="navbar-item" href="https://bulma.io">
                <img src="{{ asset('frontend/images/logo/baselhack_black.png') }}" alt="Bulma: a modern CSS framework based on Flexbox">
            </a>--}}

            <div class="navbar-burger  burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarMenu" class="navbar-menu has-text-centered">

            <div class="navbar-start has-text-centered-touch">
                <a class="navbar-item" href="{{ route('frontend.home.index') }}">
                    Home
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="{{ route('frontend.event.index') }}">
                        Event
                    </a>
                    <div class="navbar-dropdown is-boxed">

                        <a class="navbar-item" href="{{ route('frontend.event.signup') }}">
                            Information
                        </a>

                        <hr class="navbar-divider">

                        <a class="navbar-item" href="{{ route('frontend.event.signup') }}">
                            Sing up
                        </a>

                    </div>
                </div>


                <a class="navbar-item" href="{{ route('frontend.event.index') }}">
                    Event
                </a>


                <a class="navbar-item" href="{{ route('frontend.partners.index') }}">
                    Partners
                </a>

                 <a class="navbar-item" href="{{ route('frontend.about.index') }}">
                        About
                    </a>

                <a class="navbar-item" href="{{ route('frontend.contact.index') }}">
                    Contact
                </a>

            </div>

            <div class="navbar-end is-hidden-touch">


              {{--  <div class="navbar-item">
                    <a id="open-modal"
                       class="button is-dark"
                       target="_blank"
                       href="">
                        <span>Sign up BaselHack 2018</span>
                    </a>
                </div>
--}}

            </div>
        </div>
    </div>
</nav>


