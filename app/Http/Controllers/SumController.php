<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function view(Request $request)
    {
        $sum = $request->soA + $request->soB;
        return view('sum', compact('sum'));
    }

    public function caculate($a, $b)
    {
        return $a + $b;
    }
}
