<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemDelete extends Component
{public $item;

    public function mount($id) {
        $this->item = Item::find($id);
    }

    public function render()
    {
        return view('livewire.item-delete');
    }

    public function cancel() {
        redirect('/przedmioty');
    }

    public function delete() {
        $this->item->delete();
        redirect('/przedmioty');
    }
}
