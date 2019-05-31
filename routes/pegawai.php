<?php

Route::group(['namespace' => 'Pegawai'], function() {
    Route::get('/', 'HomeController@index')->name('pegawai.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('pegawai.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('pegawai.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('pegawai.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('pegawai.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('pegawai.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('pegawai.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('pegawai.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('pegawai.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('pegawai.verification.verify');

    // Anggaran
    Route::get('daftar', 'PegawaiController@showDaftarAnggaran')->name('pegawai.daftar.anggaran');

});
