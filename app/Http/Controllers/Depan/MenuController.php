<?php

namespace App\Http\Controllers\Depan;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu($menu)
    {
        $data['menu'] = Menu::find($menu);
        return view('depan.menu.menu',$data);
    }

    public function submenu($menu,$submenu){
        $data['submenu'] = Menu::find($submenu);
        return view('depan.menu.submenu',$data);
    }
}
