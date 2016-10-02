@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="login-panel col-md-8 col-md-offset-2">

                @include('errors.errors')

                <h1>Login</h1>

                <form class="form-horizontal" role="form" method="POST"
                      action="{{ url('/auth/login') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group form-group-lg">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-6 col-md-offset-3">
                            <input type="email" class="form-control" name="email"
                                   value="{{ old('email') }}" autofocus placeholder="{{trans('language.email')}}">
                        </div>
                    </div>

                    <div class="form-group form-group-lg">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-6 col-md-offset-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group form-group-lg">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" > Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-lg">
                        <div class="col-md-6 col-md-offset-3">
                            <button class="btn-admin btn btn-primary btn-lg" type="submit">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection