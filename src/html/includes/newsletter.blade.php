<div id="newsletter-content">

    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <header id="newsletter-header">
                    <h1>Newsletter</h1>
                    <p>Subscribe to my awesome newsletter!!</p>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))

                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
            </div>

            @include('errors.errors')

            <form action="store" method="POST" id="newsletter-form">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="control-group">
                    <div class="form-group form-group-lg col-sm-4">
                        <label for="name"> </label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="{{trans('language.name')}}" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group form-group-lg col-sm-4">
                        <label for="email"> </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="{{trans('language.email')}}" value="{{ old('email') }}">
                    </div>
                </div>

                <br>
                <div class="">
                    <div class="form-group form-group-lg col-sm-4">
                        <input type="submit" name="submit" id="submit" value="{{trans('language.submit')}}" class="btn-submit btn btn-default btn-lg">
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>