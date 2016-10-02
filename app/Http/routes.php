<?php
    use base\Member;





    // Front Office Area --------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------

        // Languages Route
        Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
        // Home
        Route::get('/', function () {
            return view('home');
        });
        // About
        Route::get('about', function () {
            return view('about');
        });
        // Contacts
        Route::get('contacts', function () {
            return view('contacts');
        });

            Route::post('contact', 'ContactController@sendContactInfo');

        // Newsletter
        Route::get('newsletter', ['as' => 'newsletter', function () {
            return view('newsletter');
        }]);

        Route::post('store', 'NewsletterController@store');












    // Admin Area --------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------

        get('admin', function () {
            return redirect('/admin');
        });
        $router->group([
            'namespace' => 'Admin',
            'middleware' => 'auth',
        ], function () {

        resource('admin/', 'AdminHomeController');
        resource('admin/newsletter', 'AdminNewsletterController');
/*
        Route::get('admin/newsletter', function () {
            $members = Member::all();
            return View::make("admin/newsletter/index")->with("allUsers", $members);
        });
*/

        });

        // Logging in and out
        get('/auth/login', 'Auth\AuthController@getLogin');
        post('/auth/login', 'Auth\AuthController@postLogin');
        get('/auth/logout', 'Auth\AuthController@getLogout');