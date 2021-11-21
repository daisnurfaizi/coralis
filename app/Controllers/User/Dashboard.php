<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('User/Dashboard');
    }

    public function Profile()
    {
        return view('User/Profile');
    }
}
