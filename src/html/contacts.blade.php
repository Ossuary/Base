@extends('layouts.main', ['meta_description' => 'Contact Form'])

@section('content')

    <div class="content" id="contacts-content">

        <div class="header-section">

            <div class="container">

                <header class="header" id="contacts-header">
                    <h2>{{trans('language.contacts')}}</h2>
                    <p>This is the <strong>contacts</strong> header!</p>
                </header>

            </div>

        </div>


        <div id="content-section">
            <div class="container">
            <div class="row">


                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    @include('errors.errors')
                    @include('errors.success')

                    <p></p>
                    <form id="contact-form" action="contact" method="post">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="row control-group">
                            <div class="form-group form-group-lg col-xs-12">
                                <label for="name"></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="{{trans('language.name')}}" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group form-group-lg col-xs-12">
                                <label for="email"></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="{{trans('language.email')}}" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group form-group-lg col-xs-12 controls">
                                <label for="message"></label>
                                <textarea rows="5" class="form-control" id="message" name="message" placeholder="{{trans('language.message')}}">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-lg btn-default btn-submit">{{trans('language.submit')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </div>

@endsection