<?php

namespace App\Http\Livewire\Seafoods;

use App\Models\menu;
use Livewire\Component;
use App\Events\UserLog;
class Edit extends Component
{
    public $menuId;
    public $main_dish, $dessert, $beverages, $price;


    public function mount(){
        $this->main_dish = $this->seafood->main_dish;
        $this->dessert = $this->seafood->dessert;
        $this->beverages = $this->seafood->beverages;
        $this->price = $this->seafood->price;
    }

    public function editmenu(){
        $this->validate([
            'main_dish'  =>    ['required', 'string', 'max:150'],
            'dessert'    =>    ['required', 'string', 'max:150'],
            'beverages'  =>    ['required', 'string', 'max:150'],
            'price'      =>    ['required', 'numeric']
        ]);

        $this->seafood->update([
            'main_dish'   => $this->main_dish,
            'dessert'     => $this->dessert,
            'beverages'   => $this->beverages,
            'price'       => $this->price,

        ]);

        $log_entry = 'Updated menu ' . $this->seafood->main_dish . ' with the ID# ' . $this->seafood->id;
        event(new UserLog($log_entry));

        return redirect('/dashboard')->with('message', 'Updated Successfully');
    }

    public function getSeafoodProperty(){
        return menu::find($this->menuId);
    }

    public function render()
    {
        return view('livewire.seafoods.edit');
    }
}
