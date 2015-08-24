<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    public function sayHelloWorld()
    {
        return 'Hello Wrold In HelloController';
    }
}