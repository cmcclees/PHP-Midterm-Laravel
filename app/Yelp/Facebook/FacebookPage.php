<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 3/11/14
 * Time: 6:03 PM
 */

namespace Yelp\Facebook;


class FacebookPage {
    protected $page_id;

    public function __construct($page_id) {
        $this->page_id = $page_id;
    }

    public function getUrl() {
        $endpoint = "http://graph.facebook.com/";
        $endpoint .= $this->page_id;


        $json = file_get_contents($endpoint);

        $json = json_decode($json);
        $link = $json->link;
        return $link;
    }

    public function get() {
        $endpoint = "http://graph.facebook.com/";
        $endpoint .= $this->page_id;


        $json = file_get_contents($endpoint);

        $json = json_decode($json);
        return $json;
    }
} 