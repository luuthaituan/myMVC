<?php

namespace App\Controllers;


class Posts extends \Core\Controller
{
    //show the index page
    public function index()
    {
        echo 'Hello from the index action in the Posts controller!';
        echo '<p>Query string parameters: <pre>' .
             htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    }

//show add new page
    public function addNew()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    public function edit() {
        echo 'Hello from the edit action in the Posts controller!';
        echo '<p>Route parameters: <pre>' .
            htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}
