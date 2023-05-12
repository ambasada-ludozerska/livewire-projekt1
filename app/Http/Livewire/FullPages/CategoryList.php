<?php

namespace App\Http\Livewire\FullPages;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination;

    protected $paginationTheme='bootstrap';

    public $search = '';

    public function updateSearch() {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.FullPages.category-list', 
        ['categories'=>Category::where('name', 'like', '%'.$this->search.'%')->paginate(20)]);
    }
}
