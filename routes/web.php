<?php

Route::get('/', function () {
    return redirect('login');
});

Auth::routes(['register' => false]);

// Admin route
Route::middleware('auth')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        Route::prefix('member')
            ->name('member.')
            ->group(function () {
                Route::get('listing', 'MemberController@index')->name('listing');
                Route::get('list', 'MemberController@list')->name('list');

                Route::get('create', 'MemberController@create')->name('create');
                Route::post('create', 'MemberController@store')->name('create');

                Route::prefix('{member}')
                    ->group(function () {
                        Route::get('edit', 'MemberController@edit')->name('edit');
                        Route::post('edit', 'MemberController@update')->name('edit');

                        Route::delete('delete', 'MemberController@destroy')->name('delete');
                    });
            });
    });
