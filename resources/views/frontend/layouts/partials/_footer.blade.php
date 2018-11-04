

<footer id="footer">
    <section class="hero is-white">
        <div class="hero-body">
            <div class="container has-text-centered">

                <div class="legal">
                    <a title="{{ __('frontend/imprint.title') }}" href="{{ route('frontend.legal.imprint.index') }}">{{ __('frontend/imprint.title') }}</a>
                    <a title="{{ __('frontend/privacy.title') }}" href="{{ route('frontend.legal.privacy.index') }}" >{{ __('frontend/privacy.title') }}</a>
                </div>

                @if(!empty($social_medias) AND $social_medias->count())
                    <div class="social">
                        @foreach($social_medias as $social_media)
                            <a target="_blank" class="" title="{{ $social_media->name }}" href="{{ $social_media->url }}">
                                <i class="{{ $social_media->icon }} fa-lg"></i>
                            </a>
                        @endforeach
                    </div>
                @endif



                <div class="copyright">
                    <a href="{{ url('/manager') }}" title="">&copy; BaselHack</a>
                </div>

            </div>
        </div>
    </section>
</footer>