<?php

namespace App\Livewire\Admin\Categories;

use App\Livewire\Admin\Counter\CounterData;
use App\Livewire\Admin\Messages\MessagesData;
use App\Models\Category;
use App\Models\Message;
use Livewire\Component;

class CategoriesCreate extends Component
{
    public $name;

    public function mount()
    {

    }
    public function rules(){
        return [
            'name'=>'required',
        ];
    }
    public function submit(){
        $data=$this->validate();
        Category::create($data);
        $this->reset('name');

        $this->dispatch('createData');
        $this->dispatch('refreshData')->to(CategoriesData::class);


    }
    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
