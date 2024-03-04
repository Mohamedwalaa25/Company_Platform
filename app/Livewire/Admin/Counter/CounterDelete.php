<?php

namespace App\Livewire\Admin\Counter;

use App\Models\Counter;
use Livewire\Component;

class CounterDelete extends Component
{
    protected $listeners = ['counterDelete'];
    public $counter;

    public function counterDelete($id){

        $this->counter = Counter::find($id);
        $this->dispatch('deleteData');

    }

    public function submit(){
        $this->counter->delete();
        $this->reset('counter');
        $this->dispatch('deleteData');
        $this->dispatch('refreshData')->to(CounterData::class);
    }
    public function render()
    {
        return view('admin.counter.counter-delete');
    }
}
