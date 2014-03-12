<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 3/11/14
 * Time: 6:09 PM
 */

class Restaurant extends Eloquent{

    public static function getAll() {

        $restaurants = Restaurant::with('reviews');
        return $restaurants->get();
    }

    public function reviews() {
        return $this->hasMany('Reviews');
    }

} 