<?php

namespace App\Controllers;

use \Core\View;


class Home extends \Core\Controller
{

    /*
     Before filter
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /*
     After filter
     */
    protected function after()
    {
        //echo " (after)";
    }

    /*
     Show the index page
     */
    public function indexAction()
    {
        /*
        View::render('Home/index.php', [
            'name'    => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
        */
        View::renderTemplate('Home/index.html', [
            'name'    => 'Tuan',
            'colours' => ['red', 'green', 'blue']
        ]);
    }
}
