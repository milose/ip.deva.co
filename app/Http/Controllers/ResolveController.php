<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class ResolveController extends Controller
{
    public function index(Request $request)
    {
        if ($request->text !== null) {
            return $request->ip();
        }

        return ['ip' => $request->ip()];
    }
}
