@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    @include('frontend.layouts.components._header')


    <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-quarters">

                    <div class="content">


                        <h3>Disclaimer</h3>

                        <p class="has-text-justified">

                            The information contained in this website is for general information purposes only. The
                            information is provided by BaselHack and while we endeavour to keep the information up
                            to date and correct, we make no representations or warranties of any kind, express or
                            implied, about the completeness, accuracy, reliability, suitability or availability with
                            respect to the website or the information, products, services, or related graphics contained
                            on the website for any purpose. Any reliance you place on such information is therefore
                            strictly at your own risk.

                        </p>

                        <p class="has-text-justified">

                            Through this website you are able to link to other websites which are not under the control
                            of [business name]. We have no control over the nature, content and availability of those
                            sites. The inclusion of any links does not necessarily imply a recommendation or endorse the
                            views expressed within them.

                        </p>

                        <p class="has-text-justified">

                            Every effort is made to keep the website up and running smoothly. However, [business name]
                            takes no responsibility for, and will not be liable for, the website being temporarily
                            unavailable due to technical issues beyond our control.

                        </p>


                        <h3>Contact</h3>

                        Verein BaselHack <br>
                        Dufourstrasse 11 <br>
                        4010 Basel<br>

                        <a href="mailto:info@baselhack.ch">info(at)baselhack.ch</a>

                    </div>
                </div>

            </div>


        </div>
    </section>


    @include('frontend.layouts.components._newsletter')





@endsection

@section('scripts')


@endsection