<?php

namespace App\Http\Livewire\Seafoods;

use Livewire\Component;
use App\Models\menu; 

class Index extends Component
{
    public function loadMenus(){
        $menus = menu::orderBy('main_dish')->get();

        return compact('menus');
    }

    public function render()
    {
        return view('livewire.seafoods.index', $this->loadmenus());
    }
}
