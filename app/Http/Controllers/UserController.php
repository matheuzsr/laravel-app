<?php

namespace App\Http\Controllers;

use App\Providers\UserServiceProvider;
class UserController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new UserServiceProvider();
    }

    public function getAll()
    {
        $users = $this->service->getAll();
        return response()->json($users);
    }
}
