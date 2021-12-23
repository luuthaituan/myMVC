<?php

namespace App\Controllers;
use Core\View;

/**
 * Home controller
 *
 * PHP version 5.4
 */
class Home
{

    /*
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
        // echo 'Hello from the index action in the Home controller!';
        View::render('Home/index.php', [
            'name' => 'Tuan',
            'colours' => ['red', 'green', 'blue']
        ]);
    }
}
