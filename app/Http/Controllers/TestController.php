<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TestController extends Controller
{
    public function test()
    {
        $request = new Request();
        return "Halo, selamat datang di " . Route::currentRouteName() . ".";
    }
}