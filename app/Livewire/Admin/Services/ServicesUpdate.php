<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    protected $listeners = ['serviceUpdate'];
    public $service,$name,$description,$icon;

    public function serviceUpdate($id){

        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;



        $this->dispatch('editData');
        $this->resetValidation();

    }

    public function rules(){
        return [
            'name'=>'required',
            'description'=>'required',
            'icon'=>'required'
        ];
    }
    public function submit(){
        $data=$this->validate();
        $this->service->update($data);
        $this->reset('name','description','icon');

        $this->dispatch('editData');
        $this->dispatch('refreshData')->to(ServicesData::class);

    }
    public function render()
    {
        return view('admin.services.services-update');
    }
}
