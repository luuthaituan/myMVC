<?php

namespace App\Controllers\Admin;


class Users extends \Core\Controller
{

    /*
     Before filter
     */
    protected function before()
    {
        // Make sure an admin user is logged in for example
        // return false;
    }

    /*
     Show the index page
     */
    public function indexAction()
    {
        echo 'User admin index';
    }
}
