<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function getMenu(Request $request)
    {
        $requestMenu = $request->menu;

        return json_encode(config("menu.$requestMenu"));

    }
}
