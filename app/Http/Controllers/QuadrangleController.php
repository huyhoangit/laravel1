<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuadrangleController extends Controller
{
    public function view(Request $request)
    {
        // Kiểm tra xem các cạnh có được nhập vào hay không
        if ($request->has(['soA', 'soB', 'soC', 'soD'])) {
            $a = $request->soA;
            $b = $request->soB;
            $c = $request->soC;
            $d = $request->soD;

            // Tính nửa chu vi
            $p = ($a + $b + $c + $d) / 2;

            // Tính diện tích theo công thức Brahmagupta
            $quadrangle = sqrt(($p - $a) * ($p - $b) * ($p - $c) * ($p - $d));
        } else {
            // Nếu thiếu cạnh nào đó, gán diện tích bằng 0 hoặc thông báo lỗi
            $quadrangle = 0;
        }

        // Trả về view với biến 'quadrangle' chứa kết quả
        return view('quadrangle', compact('quadrangle'));
    }


    public function caculate($a, $b)
    {
        return $a / 2 * $b;
    }
}
