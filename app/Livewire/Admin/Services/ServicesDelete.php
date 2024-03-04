<?php

namespace App\Livewire\Admin\Services;


use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component

{
    protected $listeners = ['serviceDelete'];
    public $services;

    public function serviceDelete($id){

        $this->services = Service::find($id);
        $this->dispatch('deleteData');
    }

    public function submit(){
        $this->services->delete();
        $this->reset('services');
        $this->dispatch('deleteData');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-delete');
    }
}
