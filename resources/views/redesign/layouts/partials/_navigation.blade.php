<nav class="navbar is-transparent is-inverted is-spaced ">
    <div class="container">
        <div class="navbar-brand">

            <a class="navbar-item" href="index.php">
                <img src="images/homeconnect_white.png">
            </a>

            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu"
               aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>

            <div class="navbar-menu" id="navMenu">
                <div class="navbar-start">

                    <a class="navbar-item" href="{{ route('frontend.home.index') }}">
                        Baselhack
                    </a>

                    <a class="navbar-item" href="{{ route('frontend.event.index') }}">
                        Event
                    </a>


                    <a class="navbar-item" href="{{ route('frontend.sponsors.index') }}">
                        Partners & Sponsors
                    </a>

                    <a class="navbar-item" href="{{ route('frontend.about.index') }}">
                        About
                    </a>

                    <a class="navbar-item" href="{{ route('frontend.contact.index') }}">
                        Contact
                    </a>

                </div>
            </div>

        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">

            </div>

            <div class="navbar-end">

                <div class="navbar-item dropdown is-hoverable">
                    <div class="dropdown-trigger">
                        <button class="button is-dark is-inverted is-outlined" aria-haspopup="true" aria-controls="dropdown-menu">
                            <span>Languags</span>
                            <span class="icon is-small">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu">
                        <div class="dropdown-content has-text-centered">
                            <a href="#" class="dropdown-item is-paddingless">
                                German
                            </a>

                            <hr class="dropdown-divider">

                            <a href="#" class="dropdown-item is-paddingless">
                                English
                            </a>


                            <hr class="dropdown-divider">

                            <a href="#" class="dropdown-item is-paddingless">
                                French
                            </a>


                            <hr class="dropdown-divider">

                            <a href="#" class="dropdown-item is-paddingless">
                                Italian
                            </a>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>




{{--
<section class="section">
    <div class="container">


        <nav class="navbar">
            <div class="navbar-brand">

                <div class="navbar-burger burger" data-target="navMenubd-example">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navMenubd-example" class="navbar-menu">
                <div class="navbar-start is-uppercase">

                    <a class="navbar-item" href="{{ route('frontend.home.index') }}">
                        Baselhack
                    </a>

                    <a class="navbar-item" href="{{ route('frontend.event.index') }}">
                        Event
                    </a>


                    <a class="navbar-item" href="{{ route('frontend.sponsors.index') }}">
                        Partners & Sponsors
                    </a>

                    <a class="navbar-item" href="{{ route('frontend.about.index') }}">
                        About
                    </a>

                    <a class="navbar-item" href="{{ route('frontend.contact.index') }}">
                        Contact
                    </a>

                </div>

                <div class="navbar-end is-hidden-touch">

                    <a class="navbar-item " href="{{ config('socials.urls.instagram') }}" target="_blank">

                        <i class="fab fa-instagram"></i>
                    </a>

                    <a class="navbar-item " href="{{ config('socials.urls.facebook') }}" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a class="navbar-item " href="{{ config('socials.urls.twitter') }}" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a class="navbar-item" href="{{ config('socials.urls.github') }}" target="_blank">
                        <i class="fab fa-github-alt"></i>
                    </a>

                </div>


            </div>
        </nav>



    </div>





</section>


--}}
