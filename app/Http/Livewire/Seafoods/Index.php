<?php

namespace App\Http\Livewire\Seafoods;

use Livewire\Component;
use App\Models\menu; 
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $beverages = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function loadMenus(){

        $query = menu::orderBy('main_dish')
                ->search($this->search);

        if ($this->beverages != 'all') {
            $query->where('beverages', $this->beverages);
        }

        $menus = $query->paginate(2);

        return compact('menus');
    }

    public function render()
    {
        return view('livewire.seafoods.index', $this->loadMenus());
    }
}
