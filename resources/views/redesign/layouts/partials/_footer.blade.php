<footer>
    <section class="hero is-light is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">

                <div class="is-uppercase legal">
                    <a href="{{ route('backend.users.dashboard.index') }}" class="mr-15">Members</a>
                    <a href="{{ route('frontend.legal.imprint.index') }}" class="mr-15">Imprint</a>
                    <a href="{{ route('frontend.legal.privacy.index') }}" class="mr-15" >Privacy</a>
                </div>

                <a target="_blank" href="{{ config('socials.urls.instagram') }}" class="mr-15">
                    <i class="fab fa-instagram"></i>
                </a>

                <a target="_blank" href="{{ config('socials.urls.facebook') }}" class="mr-15">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a target="_blank" href="{{ config('socials.urls.twitter') }}" class="mr-15">
                    <i class="fab fa-twitter"></i>
                </a>
                <a  target="_blank" href="{{ config('socials.urls.github') }}" class="">
                    <i class="fab fa-github-alt"></i>
                </a>

            </div>
        </div>
    </section>
</footer>