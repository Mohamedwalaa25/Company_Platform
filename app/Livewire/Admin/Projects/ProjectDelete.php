<?php

namespace App\Livewire\Admin\Projects;

use App\Livewire\Admin\Services\ServicesData;
use App\Models\Project;
use App\Models\Service;
use Livewire\Component;

class ProjectDelete extends Component
{
    protected $listeners = ['projectDelete'];
    public $project;

    public function projectDelete($id){

        $this->project = Project::find($id);
        $this->dispatch('deleteData');
    }

    public function submit(){
        unlink($this->project->image);
        $this->project->delete();
        $this->reset('project');
        $this->dispatch('deleteData');
        $this->dispatch('refreshData')->to(ProjectData::class);
    }
    public function render()
    {
        return view('admin.projects.project-delete');
    }
}
