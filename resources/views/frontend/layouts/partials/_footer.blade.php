

<footer id="footer">
    <section class="hero is-white">
        <div class="hero-body">
            <div class="container has-text-centered">

                <div class="legal">
                    <a title="{{ __('frontend/imprint.title') }}" href="{{ route('frontend.legal.imprint.index') }}">{{ __('frontend/imprint.title') }}</a>
                    <a title="{{ __('frontend/privacy.title') }}" href="{{ route('frontend.legal.privacy.index') }}" >{{ __('frontend/privacy.title') }}</a>
                </div>

                <div class="social">

                    <a target="_blank" class="" title="{{ __('frontend/layout.footer.socials.instagram') }}" href="{{ config('baselhack.socials.instagram.url') }}">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>

                    <a target="_blank" class="" title="{{ __('frontend/layout.footer.socials.facebook') }}" href="{{ config('baselhack.socials.facebook.url') }}">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>


                    <a target="_blank" class="" title="{{ __('frontend/layout.footer.socials.linkedin') }}" href="{{ config('baselhack.socials.linkedin.url') }}">
                        <i class="fab fa-linkedin-in fa-lg"></i>
                    </a>


                    <a target="_blank" class="" title="{{ __('frontend/layout.footer.socials.twitter') }}" href="{{ config('baselhack.socials.twitter.url') }}">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>

                    <a target="_blank" class="" title="{{ __('frontend/layout.footer.socials.youtube') }}" href="{{ config('baselhack.socials.youtube.url') }}">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>

                    <a target="_blank" class="" title="{{ __('frontend/layout.footer.socials.github') }}" href="{{ config('baselhack.socials.github.url') }}">
                        <i class="fab fa-github fa-lg"></i>
                    </a>

                </div>

                <div class="copyright">
                 &copy; BaselHack
                </div>

            </div>
        </div>
    </section>
</footer>