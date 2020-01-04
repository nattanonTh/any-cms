<?php

Route::namespace('Landing')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('landing-page');
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
    });
