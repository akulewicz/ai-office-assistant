<?php

function base_path($path) {
    return BASE_PATH . $path;
}

function view($view, $data = []) {
    extract($data);
    require base_path("App/views/{$view}.view.php");
}

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}