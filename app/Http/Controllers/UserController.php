<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function xinchao()
    {
        echo "chao xìn các bạn nhé hê lô hao a diu";
    }

    public function index()
    {
        $title = "hihihihihi";
        return view('/test')->with('title', $title);
    }
}
