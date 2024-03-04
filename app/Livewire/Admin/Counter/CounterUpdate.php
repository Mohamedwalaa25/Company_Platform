<?php

namespace App\Livewire\Admin\Counter;

use App\Models\Counter;
use Livewire\Component;

class CounterUpdate extends Component
{
    protected $listeners = ['counterUpdate'];
    public $model,$name,$counter,$icon;

    public function counterUpdate($id){

        $this->model = Counter::find($id);
        $this->name = $this->model->name;
        $this->counter = $this->model->counter;
        $this->icon = $this->model->icon;

        $this->dispatch('editData');
        $this->resetValidation();

    }

    public function rules(){
        return [
            'name'=>'required',
            'counter'=>'required|numeric|min:1',
            'icon'=>'required',
        ];
    }
    public function submit(){
        $data=$this->validate();
         $this->model->update($data);
        $this->reset('name','icon','counter');

        $this->dispatch('editData');
        $this->dispatch('refreshData')->to(CounterData::class);

    }
    public function render()
    {
        return view('admin.counter.counter-update');
    }
}
