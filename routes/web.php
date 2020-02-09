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
                        Route::get('view', 'MemberController@view')->name('view');

                        Route::get('edit', 'MemberController@edit')->name('edit');
                        Route::post('edit', 'MemberController@update')->name('edit');

                        Route::delete('delete', 'MemberController@destroy')->name('delete');
                    });
            });

        Route::prefix('event')
            ->name('event.')
            ->group(function () {
                Route::get('listing', 'EventController@index')->name('listing');
                Route::get('list', 'EventController@list')->name('list');

                Route::get('create', 'EventController@create')->name('create');
                Route::post('create', 'EventController@store')->name('create');

                Route::post('add-attention/{member}', 'EventController@addAttention')->name('add-attention');
                Route::get('delete-attention/{attention}', 'EventController@deleteAttention')->name('delete-attention');
                Route::get('print-attention/{attention}', 'EventController@printAttention')->name('print-attention');

                Route::prefix('{event}')
                    ->group(function () {
                        Route::get('edit', 'EventController@edit')->name('edit');
                        Route::post('edit', 'EventController@update')->name('edit');

                        Route::delete('delete', 'EventController@destroy')->name('delete');
                    });
            });
    });
