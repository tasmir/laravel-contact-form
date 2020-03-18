<?php

Route::namespace('Tasmir\Contact\Http\Controllers')->group(function(){

Route::get('contact', 'ContactContoller@index')->name('contact');
Route::post('contact', 'ContactContoller@send');

});
