<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeworkController;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthorController;
use App\Http\Requests\ClientReqquest;

Route::get('/contact','HomeworkController@index')->name('contact.index');



Route::get('/contact/confirm', 'HomeworkController@confirm')->name('contact.confirm');

Route::post('/process', 'ContactsController@process')->name('process');

Route::get('/contact/thanks', 'HomeworkController@send')->name('contact.thanks');

Route::get('/verror', [HomeworkController::class, 'verror']);