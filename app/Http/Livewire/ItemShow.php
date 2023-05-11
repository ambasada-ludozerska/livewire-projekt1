<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemShow extends Component
{
    public $item;

    public function mount($id) {
        $this->item = Item::find($id);
    }
    public function render()
    {
        return view('livewire.item-show');
    }
}
