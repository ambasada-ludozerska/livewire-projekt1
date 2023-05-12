<?php

namespace App\Http\Livewire\FullPages\Forms;

use Livewire\Component;
use App\Models\Category;

class CategoryDelete extends Component
{
    public $category;

    public function mount($id) {
        $this->category = Category::find($id);
    }

    public function render()
    {
        return view('livewire.FullPages.Forms.category-delete');
    }

    public function cancel() {
        redirect('/');
    }

    public function delete() {
        $this->category->delete();
        redirect('/');
    }
}
