<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 3/11/14
 * Time: 5:59 PM
 */


class RestaurantController extends BaseController{

    public function list_restaurants() {
        $restaurants = Reviews::getAll();


        return View::make('/restaurants/all', [
            'restaurants' => $restaurants
        ]);
    }
} 