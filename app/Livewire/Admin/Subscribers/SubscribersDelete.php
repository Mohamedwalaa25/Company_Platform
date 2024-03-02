<?php

namespace App\Livewire\Admin\Subscribers;
use App\Models\subscriber;
use Livewire\Component;

class SubscribersDelete extends Component
{
    protected $listeners = ['subscriberDelete'];
    public $subscriber;

    public function subscriberDelete($id){

        $this->subscriber = subscriber::find($id);
        $this->dispatch('deleteData');

    }

    public function submit(){
        $this->subscriber->delete();
        $this->reset('subscriber');
        $this->dispatch('deleteData');
        $this->dispatch('refreshData')->to(SubscribersData::class);
    }
    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
