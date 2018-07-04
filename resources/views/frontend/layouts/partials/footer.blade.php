<footer class="pt-5 pb-3 footer  footer-dark bg-tertiary">
    <div class="container">
        <div class="row">

            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3"><a style="text-decoration: none;" href="{{ route('frontend.home.index') }}" class="list-unstyled text-small text-white">Baselhack</a></h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="{{ route('login') }}">Members</a></li>

                </ul>
            </div>


            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3"><a style="text-decoration: none;" href="{{ route('frontend.event.index') }}" class="list-unstyled text-small text-white">Event</a></h5>
                <ul class="list-unstyled text-small">

                </ul>
            </div>

            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3"><a style="text-decoration: none;" href="{{ route('frontend.partners.index') }}" class="list-unstyled text-small text-white">Partners</a></h5>
                <ul class="list-unstyled text-small">

                </ul>
            </div>


            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3"><a style="text-decoration: none;" href="{{ route('frontend.sponsors.index') }}" class="list-unstyled text-small text-white">Sponsors</a></h5>
                <ul class="list-unstyled text-small">

                </ul>
            </div>


            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3"><a style="text-decoration: none;" href="{{ route('frontend.about.index') }}" class="list-unstyled text-small text-white">About us</a></h5>
                <ul class="list-unstyled text-small">

                </ul>
            </div>

            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3"><a style="text-decoration: none;" href="{{ route('frontend.contact.index') }}" class="list-unstyled text-small text-white">Contact</a></h5>

            </div>
            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Legal</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="{{ route('frontend.legal.imprint.index') }}">Imprint</a></li>
                    <li><a class="text-muted" href="{{ route('frontend.legal.privacy.index') }}">Privacy</a></li>

                </ul>
            </div>


        </div>

        <hr class="mt-4">

        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">

                    <span class="">
            &copy; BaselHack {{ date("Y") }}
          </span>


                </div>

            </div>

        </div>
    </div>
</footer>