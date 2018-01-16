<?php

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the DashboardServiceProvider.
|
*/

Route::get('dashboard/', 
  'Johnrob1880\Dashboard\DashboardController@index')->name('dashboard');

Route::get('dashboard/notifications/{id?}', 'Johnrob1880\Dashboard\DashboardNotificationsController@show')->name('notifications');
Route::get('dashboard/tasks/{id?}', 'Johnrob1880\Dashboard\DashboardTasksController@show')->name('tasks');
Route::get('dashboard/messages/{id?}', 'Johnrob1880\Dashboard\DashboardMessagesController@show')->name('messages');
