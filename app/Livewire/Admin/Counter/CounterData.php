<?php

namespace App\Livewire\Admin\Counter;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CounterData extends Component
{

    use WithPagination;
    public $search;

    protected $listeners = ['refreshData'=>'$refresh'];
    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.counter.counter-data',[
            'data'=>Counter::where('name','like','%'.$this->search.'%')->paginate(10)
        ]);
    }
}
