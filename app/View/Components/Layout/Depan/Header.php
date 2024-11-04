<?php

namespace App\View\Components\Layout\Depan;

use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menu = Menu::whereNull('id_induk')->with('submenus')->get();
        return view('components.layout.depan.header', compact('menu'));
    }
}
