<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 3/11/14
 * Time: 6:13 PM
 */

class Reviews extends Eloquent{

    public function restaurants() {
        return $this->belongsTo('Restaurants');
    }
}
