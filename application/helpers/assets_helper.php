<?php

function asset_url() {
    return base_url().'assets/';
}

function image_url() {
    return asset_url()."images/";
}

function js_url() {
    return asset_url()."js/";
}

function css_url() {
    return asset_url()."css/";
}
