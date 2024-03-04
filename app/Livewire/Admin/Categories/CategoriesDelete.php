<?php

namespace App\Livewire\Admin\Categories;

use App\Livewire\Admin\Counter\CounterData;
use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{
    protected $listeners = ['categoryDelete'];
    public $category;

    public function categoryDelete($id){

        $this->category = Category::find($id);
        $this->dispatch('deleteData');

    }

    public function submit(){
        $this->category->delete();
        $this->reset('category');
        $this->dispatch('deleteData');
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
