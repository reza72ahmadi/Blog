<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Request $request)
    {
        return '<h1> This is a profile show </h1>';
    }
}
