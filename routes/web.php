<?php

Route::namespace('Landing')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('landing-page');
        Route::get('/promotion', 'HomeController@promotion')->name('landing-promotion');
        Route::get('/features', 'HomeController@blog')->name('landing-features');
        Route::get('/image-gallery', 'HomeController@gallery')->name('landing-image-gallery');
    });

Auth::routes(['register' => false]);

// Admin route
Route::middleware('auth')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

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

        Route::prefix('image')
            ->namespace('Image')
            ->name('image.')
            ->group(function () {
                Route::get('/gallery', 'ImageController@index')->name('listing');
                Route::post('/gallery/upload', 'ImageController@store');
                Route::post('/gallery/delete', 'ImageController@destroy');
                Route::get('/all-gallery', 'HomeController@gallery');
            });
    });
