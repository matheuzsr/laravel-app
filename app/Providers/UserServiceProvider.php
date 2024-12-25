<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider
{
    public function getAll()
    {
        return User::all();
    }
}
