<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemList extends Component
{
    public $allItems;

    public function mount() {
        $this->allItems = Item::all();
    }

    public function render()
    {
        return view('livewire.item-list');
    }
}
