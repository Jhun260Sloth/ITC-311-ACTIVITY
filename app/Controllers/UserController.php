<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\UserModel;

class UserController extends BaseController
{
    private $activity;
    public function __construct()
    {
       $this->activity = new \App\Models\UserModel();
    }

    public function index()
    {
        //nah
    }

    public function activity($activity)
    {
        echo $activity;
    }

    public function homepage()
    {
       $data = $this->activity->findAll();
        print_r($data);
    }
}
