<footer class="pt-5 pb-3 footer  footer-dark bg-tertiary">
    <div class="container">
        <div class="row">
           {{-- <div class="col-12 col-md-4">
                <div class="pr-lg-5">
                    <h1 class="heading h6 text-uppercase font-weight-700 mb-3"><strong>BaselHack</strong></h1>
                    <p>
                        At BaselHack, you will have the opportunity to create software prototypes solutions from a great idea in 34 hours! Bring your coding know-how, meet, connect and collaborate with other tech enthusiasts, innovators, and data and design wizards.
                    </p>
                </div>
            </div>--}}

            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Event</h5>
                <ul class="list-unstyled text-small">

                </ul>
            </div>

            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Partner & Sponsors</h5>
                <ul class="list-unstyled text-small">

                </ul>
            </div>


            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3">About Us</h5>
                <ul class="list-unstyled text-small">

                </ul>
            </div>

            <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Contact</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" target="_blank" href="mailto:event@baselhack.ch">E-Mail</a></li>
                </ul>
            </div>
           <div class="col-6 col-md">
                <h5 class="heading h6 text-uppercase font-weight-700 mb-3">Legal</h5>
                <ul class="list-unstyled text-small">
             {{--       <li><a class="text-muted" href="#">Imprint</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>--}}
                </ul>
            </div>


        </div>
        <hr>
        <div class="d-flex align-items-center">
          <span class="">
            &copy; {{ date("Y") }} BaselHack. All rights reserved.
          </span>

            <span class="nav ml-lg-auto">
                <a dusk="login" style="color: whitesmoke;" href="{{ route('login') }}">Member Area</a>
            </span>

        </div>
    </div>
</footer>