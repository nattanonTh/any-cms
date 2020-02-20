<?php

Route::namespace('Landing')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('landing-page');
        Route::get('/promotions', 'HomeController@promotion')->name('landing-promotion');
        Route::get('/promotions/{promotion}', 'HomeController@showPromotion')->name('show-promotion');
        Route::get('/features', 'HomeController@blog')->name('landing-features');
        Route::get('/feature/{blog}', 'HomeController@showBlog')->name('show-features');
        Route::get('/image-gallery', 'HomeController@gallery')->name('landing-image-gallery');
        Route::get('/about-us', 'HomeController@aboutUs')->name('landing-about-us');
        Route::get('/contact-us', 'HomeController@contactUs')->name('landing-contact-us');
        Route::post('/contact-us', 'HomeController@saveContact')->name('contact.save');
        Route::get('/clip-gallery', 'HomeController@video')->name('landing-video');
    });

Route::get('tattoopromotion', function() {
    return view('tattoo.tattoo');
})->name('tattoopromotion');

Auth::routes(['register' => false]);

// Admin route
Route::middleware('auth')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/contact-list', 'DashboardController@contactList')->name('contact.list');
        Route::delete('/contact-delete/{contact}', 'DashboardController@destroyContact')->name('contact.delete');

        Route::prefix('user')
            ->name('user.')
            ->middleware('role_or_permission:manage user')
            ->group(function () {
                Route::get('listing', 'UserManagementController@index')->name('listing');
                Route::get('list', 'UserManagementController@list')->name('list');

                Route::get('create', 'UserManagementController@create')->name('create');
                Route::post('create', 'UserManagementController@store')->name('create');

                Route::prefix('{user}')
                    ->group(function () {
                        Route::get('edit', 'UserManagementController@edit')->name('edit');
                        Route::post('edit', 'UserManagementController@update')->name('edit');

                        Route::delete('delete', 'UserManagementController@destroy')->name('delete');
                    });
            });

        Route::prefix('landing')
            ->namespace('Landing')
            ->name('landing.')
            ->middleware('role_or_permission:manage landing')
            ->group(function () {
                Route::get('edit', 'LandingController@index')->name('edit');
            });

        Route::prefix('blog')
            ->namespace('Blog')
            ->name('blog.')
            ->middleware('role_or_permission:manage blog')
            ->group(function () {
                Route::get('listing', 'BlogController@index')->name('listing');
                Route::get('list', 'BlogController@list')->name('list');

                Route::get('create', 'BlogController@create')->name('create');
                Route::post('create', 'BlogController@store')->name('create');

                Route::prefix('{blog}')
                    ->group(function () {
                        Route::get('edit', 'BlogController@edit')->name('edit');
                        Route::post('edit', 'BlogController@update')->name('edit');

                        Route::delete('delete', 'BlogController@destroy')->name('delete');
                    });
            });

        Route::prefix('tag')
            ->namespace('Tag')
            ->name('tag.')
            ->group(function () {
                Route::get('listing', 'TagController@index')->name('listing');
                Route::get('list', 'TagController@list')->name('list');

                Route::get('create', 'TagController@create')->name('create');
                Route::post('create', 'TagController@store')->name('create');

                Route::prefix('{tag}')
                    ->group(function () {
                        Route::get('edit', 'TagController@edit')->name('edit');
                        Route::post('edit', 'TagController@update')->name('edit');

                        Route::delete('delete', 'TagController@destroy')->name('delete');
                    });
            });

        Route::prefix('promotion')
            ->namespace('Promotion')
            ->name('promotion.')
            ->middleware('role_or_permission:manage promotion')
            ->group(function () {
                Route::get('listing', 'PromotionController@index')->name('listing');
                Route::get('list', 'PromotionController@list')->name('list');

                Route::get('create', 'PromotionController@create')->name('create');
                Route::post('create', 'PromotionController@store')->name('create');

                Route::prefix('{promotion}')
                    ->group(function () {
                        Route::get('edit', 'PromotionController@edit')->name('edit');
                        Route::post('edit', 'PromotionController@update')->name('edit');

                        Route::delete('delete', 'PromotionController@destroy')->name('delete');
                    });
            });

        Route::prefix('banner')
            ->namespace('Banner')
            ->name('banner.')
            ->group(function () {
                Route::get('listing', 'BannerController@index')->name('listing');
                Route::get('list', 'BannerController@list')->name('list');

                Route::get('create', 'BannerController@create')->name('create');
                Route::post('create', 'BannerController@store')->name('create');

                Route::prefix('{banner}')
                    ->group(function () {
                        Route::get('edit', 'BannerController@edit')->name('edit');
                        Route::post('edit', 'BannerController@update')->name('edit');

                        Route::delete('delete', 'BannerController@destroy')->name('delete');
                    });
            });

        Route::prefix('video')
            ->namespace('Video')
            ->name('video.')
            ->group(function () {
                Route::get('listing', 'VideoController@index')->name('listing');
                Route::get('list', 'VideoController@list')->name('list');

                Route::get('create', 'VideoController@create')->name('create');
                Route::post('create', 'VideoController@store')->name('create');

                Route::prefix('{video}')
                    ->group(function () {
                        Route::get('edit', 'VideoController@edit')->name('edit');
                        Route::post('edit', 'VideoController@update')->name('edit');

                        Route::delete('delete', 'VideoController@destroy')->name('delete');
                    });
            });

        Route::prefix('image')
            ->namespace('Image')
            ->name('image.')
            ->group(function () {
                Route::get('listing', 'ImageController@index')->name('listing');
                Route::get('list', 'ImageController@list')->name('list');

                Route::get('create', 'ImageController@create')->name('create');
                Route::post('create', 'ImageController@store')->name('create');

                Route::prefix('{image}')
                    ->group(function () {
                        Route::get('edit', 'ImageController@edit')->name('edit');
                        Route::post('edit', 'ImageController@update')->name('edit');

                        Route::delete('delete', 'ImageController@destroy')->name('delete');
                    });
            });
    });
