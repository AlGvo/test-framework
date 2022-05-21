<?php

namespace Aigletter\App\Controllers;

class Page
{
    public static function view($id, $name) {
        echo 'I am a Page view ID = '. $id . 'Name = ' . $name;
    }
}