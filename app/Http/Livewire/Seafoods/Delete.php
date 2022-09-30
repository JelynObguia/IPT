<?php

namespace App\Http\Livewire\Seafoods;

use App\Models\menu;
use App\Events\UserLog;
use Livewire\Component;

class Delete extends Component
{
    Public $menuId;

    public function getSeafoodProperty(){
        return menu::find($this->menuId);
    }

    public function delete(){
        $this->seafood->delete();
        $log_entry = 'Deleted menu ' . $this->seafood->main_dish . ' with the ID# ' . $this->seafood->id;
        event(new UserLog($log_entry));

        return redirect('/dashboard')->with('message', 'Deleted Successfully');
    }

    public function back(){
        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.seafoods.delete');
    }
}
