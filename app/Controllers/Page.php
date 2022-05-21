<?php

namespace Aigletter\App\Controllers;

class Page
{
    public static function view($id = null, $name = null) {
        // Для проверки 500 ошибки в роутере
        //       foo();
        echo 'I am a Page view ID = '. $id . 'Name = ' . $name;
    }
}