<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/', 'RestaurantController@list_restaurants');

Route::get('restaurants/{id}/reviews', function($id)
{
    $restaurant = Restaurant::find($id);
    $reviews = Reviews::where('restaurant_id', '=', $id);
    $reviews = $reviews->get();

    return View::make('restaurants/review', [
        'restaurant' => $restaurant,
        'reviews' => $reviews]);
});



