@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    <section class="section hero header is-small is-light">
        <div class="hero-body">
            <div class="columns is-centered">

                <div class="column is-4">

                    <a href="{{ route('frontend.events.signup.index') }}">
                        <img class="image header-image" src="{{ asset('frontend/images/backgrounds/privacy.png') }}">
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-quarters">

                    <div class="content">


                        <h3>General</h3>

                        <p class="has-text-justified">

                            Your privacy is very important to us. We want to make your experience on the Internet as
                            enjoyable and rewarding as possible, and we want you to use the Internet’s vast array of
                            information, tools, and opportunities with complete confidence.

                        </p>


                        <h3>Newsletter</h3>

                        <p class="has-text-justified">

                            If you would like to receive our newsletter, we require a valid email address as well as
                            information that allows us to verify that you are the owner of the specified email address
                            and that you agree to receive this newsletter. No additional data is collected or is only
                            collected on a voluntary basis. We only use this data to send the requested information and
                            do not pass it on to third parties.

                        </p>


                        <h3>Contact form</h3>

                        <p class="has-text-justified">

                            Should you send us questions via the contact form, we will collect the data entered on the
                            form, including the contact details you provide, to answer your question and any follow-up
                            questions. We do not share this information without your permission.

                        </p>


                        <h3>Google Analytics</h3>

                        <p class="has-text-justified">

                            This website uses Google Analytics, a web analytics service. It is operated by Google Inc.,
                            1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.

                        </p>
                        <p class="has-text-justified">

                            Google Analytics uses so-called “cookies”. These are text files that are stored on your
                            computer and that allow an analysis of the use of the website by you. The information
                            generated by the cookie about your use of this website is usually transmitted to a Google
                            server in the USA and stored there.

                        </p>
                        <p class="has-text-justified">

                            Google Analytics cookies are stored based on Art. 6 (1) (f) EU GDPR. The website operator
                            has a legitimate interest in analyzing user behavior to optimize both its website and its
                            advertising.


                        </p>


                    </div>
                </div>

            </div>


        </div>
    </section>

    @include('frontend.layouts.components._newsletter')


@endsection

@section('scripts')


@endsection