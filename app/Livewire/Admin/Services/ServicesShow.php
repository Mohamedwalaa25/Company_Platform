<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;

use Livewire\Component;

class ServicesShow extends Component
{
    protected $listeners = ['servicesShow'];
    public $service,$name,$description,$icon;

    public function servicesShow($id){
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        $this->dispatch('skillShow');
    }

    public function render()
    {
        return view('admin.services.services-show');
    }
}
