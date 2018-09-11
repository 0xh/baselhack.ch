<nav class="navbar is-spaced">

    <div class="container ">


        <div class="navbar-brand">


            <div class="navbar-burger  burger" data-target="navbarMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>


        <div id="navbarMenu" class="navbar-menu has-text-centered is-uppercase">

            <div class="navbar-start has-text-centered-touch">
                <a class="navbar-item" href="{{ route('frontend.home.index') }}">
                    Home
                </a>

               <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="{{ route('frontend.events.index') }}">
                        Event
                    </a>
                    <div class="navbar-dropdown is-boxed">

                        <a class="navbar-item" href="{{ route('frontend.events.signup.index') }}">
                            Sign-Up
                        </a>

                    </div>
                </div>


                <a class="navbar-item" href="{{ route('frontend.partners.index') }}">
                    Partners
                </a>

                <a class="navbar-item" href="{{ route('frontend.sponsors.index') }}">
                    Sponsors
                </a>


                <a class="navbar-item" href="{{ route('frontend.about.index') }}">
                        About
                    </a>

                <a class="navbar-item" href="{{ route('frontend.enquiries.index') }}">
                    Contact
                </a>

            </div>

            <div class="navbar-end is-hidden-touch">





            </div>
        </div>
    </div>
</nav>


