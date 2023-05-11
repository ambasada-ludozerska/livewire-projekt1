<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemAdd extends Component
{
    public $name;
    public $description;
    public $price;

    public function render()
    {
        return view('livewire.item-add');
    }

    public function create() {
        $itemCreated = Item::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price
        ]);

        redirect("/przedmioty");
    }
}
