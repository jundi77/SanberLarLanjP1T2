<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TestController extends Controller
{
    public function test()
    {
        return Carbon::now()->day;
    }
}