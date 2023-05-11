<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemEdit extends Component
{

    public $item;
    public $name;
    public $description;
    public $price;

    public $currentName;
    public $currentDesc;
    public $currentPrice;

    public function mount($id) {
        $this->item = Item::find($id);
        $this->currentName = $this->item->name;
        $this->currentDesc = $this->item->description;
        $this->currentPrice = $this->item->price;
    }
    public function render()
    {
        return view('livewire.item-edit');
    }

    public function save() {
        $this->item->name = $this->name;
        $this->item->description = $this->description;
        $this->item->price = $this->price;
        $this->item->save();

        redirect("/przedmioty");
    }
}
