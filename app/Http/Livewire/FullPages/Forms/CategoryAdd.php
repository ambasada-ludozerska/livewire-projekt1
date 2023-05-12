<?php

namespace App\Http\Livewire\FullPages\Forms;

use Livewire\Component;
use App\Models\Category;

class CategoryAdd extends Component
{
    public $name;
    public $description;
    public $is_active;

    public function render()
    {
        return view('livewire.FullPages.Forms.category-add');
    }

    public function create() {
        $categoryCreated = Category::create([
            'name' => $this->name,
            'description' => $this->description,
            'is_active' => $this->is_active
        ]);

        redirect("/");
    }
}
