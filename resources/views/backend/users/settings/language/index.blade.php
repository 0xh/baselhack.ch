@extends('backend.users.settings.layouts.default')

@section('styles')


@endsection

@section('backend.users.settings.content')
    <div class="justify-content-center">

        <div class="card">
            <div class="card-header"><strong>Language</strong></div>

            <div class="card-body">

                @if(!empty($languages))
                    <form class="form-horizontal" method="POST"
                          action="{{ route('backend.users.settings.language.update', $user) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group row">

                            <div class="col-md-12">

                                <label for="customer_id">Language</label>



                                <select title="Language" id="language"
                                        class="form-control{{ $errors->has('language') ? ' is-invalid' : '' }}"
                                        name="language" required
                                >

                                    <option value="" selected disabled>Please select a language</option>
                                    @foreach($languages as $language)
                                        <option value="{{ $language['value'] }}"
                                                @if(auth()->user()->language == $language['value']) selected @endif>{{ $language['name'] }}</option>
                                    @endforeach

                                </select>
                                @if ($errors->has('language'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('language') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <button dusk="update-language-button" type="submit" class="btn btn-block btn-primary">
                                    Update language
                                </button>


                            </div>
                        </div>

                    </form>
                @else
                    <p>Ups!</p> <!-- @toDo Error Messages-->
                @endif



            </div>
        </div>
    </div>

@endsection


@section('scripts')



@endsection
