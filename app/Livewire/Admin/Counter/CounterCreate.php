<?php

namespace App\Livewire\Admin\Counter;

use App\Livewire\Admin\Skills\SkillsData;
use App\Models\Counter;
use Livewire\Component;

class CounterCreate extends Component
{

    public $name,$counter,$icon;

    public function mount()
    {

    }
    public function rules(){
        return [
            'name'=>'required',
            'counter'=>'required|numeric',
            'icon'=>'required'
        ];
    }
    public function submit(){
        $data=$this->validate();
        Counter::create($data);
        $this->reset('name','counter','icon');


        $this->dispatch('createData');
        $this->dispatch('refreshData')->to(CounterData::class);


    }
    public function render()
    {
        return view('admin.counter.counter-create');
    }
}
