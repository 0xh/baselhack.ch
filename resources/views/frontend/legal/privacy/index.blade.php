@extends('frontend.layouts.app')

@section('styles')

@endsection
@section('content')


    <section class="spotlight bg-cover bg-size--cover"
             style="background-image: url('{{ asset('frontend/images/backgrounds/img-1.jpg') }}')">
        <span class="mask bg-primary alpha-7"></span>
        <div class="spotlight-holder py-sm pt-lg-lg">
            <div class="container d-flex align-items-center">
                <div class="row cols-xs-space cols-sm-space cols-md-space align-items-center justify-content-around">


                </div>
            </div>
        </div>

    </section>


    <section class="slice slice-lg" data-delimiter="1">
        <div class="container">
            <div class="mb-md text-center">
                <h3 class="heading h3">Contact</h3>

                <div class="mb-md">



                <form>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Email address" type="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="Your message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary px-4">
                            Send message
                        </button>
                    </div>
                </form> </div>

            </div>
        </div>
    </section>



@endsection

@section('scripts')


@endsection