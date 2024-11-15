<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function view(Request $request)
    {
        $area = $request->soA / 2 * $request->soB;
        return view('area', compact('area'));
    }

    public function caculate($a, $b)
    {
        return $a / 2 * $b;
    }
}
