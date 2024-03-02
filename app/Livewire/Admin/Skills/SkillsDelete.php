<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    protected $listeners = ['skillDelete'];
    public $skill;

    public function skillDelete($id){

        $this->skill = Skill::find($id);
        $this->dispatch('deleteData');

    }

    public function submit(){
        $this->skill->delete();
        $this->reset('skill');
        $this->dispatch('deleteData');
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
