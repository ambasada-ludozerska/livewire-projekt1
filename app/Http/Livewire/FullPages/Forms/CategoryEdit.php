<?php

namespace App\Http\Livewire\FullPages\Forms;

use Livewire\Component;
use App\Models\Category;

class CategoryEdit extends Component
{
    public $category;
    public $name;
    public $description;
    public $is_active = false;

    public function mount($id) {
        $this->category = Category::find($id);
    }

    public function render()
    {
        return view('livewire.FullPages.Forms.category-edit');
    }

    public function save() {
        $this->category->name = $this->name;
        $this->category->description = $this->description;
        $this->category->is_active = $this->is_active;
        $this->category->save();

        redirect("/");
    }
}
