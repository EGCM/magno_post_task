<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function add(Request $request) {
        $val1 = $request->input('value1');
        $val2 = $request->input('value2');

        return $val1 + $val2;
    }

    public function subtract(Request $request) {
        $val1 = $request->input('value1');
        $val2 = $request->input('value2');

        return $val1 - $val2;
    }

    public function multiply(Request $request) {
        $val1 = $request->input('value1');
        $val2 = $request->input('value2');

        return $val1 * $val2;
    }

    public function divide(Request $request) {
        $val1 = $request->input('value1');
        $val2 = $request->input('value2');

        return $val1 / $val2;
    }

}
