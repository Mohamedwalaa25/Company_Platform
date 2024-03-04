<?php

namespace App\Livewire\Admin\Categories;

use App\Livewire\Admin\Counter\CounterData;
use App\Models\Category;
use App\Models\Counter;
use Livewire\Component;

class CategoriesUpdate extends Component
{
    protected $listeners = ['categoryUpdate'];
    public $model,$name;

    public function categoryUpdate($id){

        $this->model = Category::find($id);
        $this->name = $this->model->name;


        $this->dispatch('editData');
        $this->resetValidation();

    }

    public function rules(){
        return [
            'name'=>'required',
        ];
    }
    public function submit(){
        $data=$this->validate();
        $this->model->update($data);
        $this->reset('name');

        $this->dispatch('editData');
        $this->dispatch('refreshData')->to(CategoriesData::class);

    }
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
