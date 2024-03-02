<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{
    protected $listeners = ['skillShow'];
    public $skill,$name,$progress;

    public function skillShow($id){

        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;

        $this->dispatch('showData');
    }


    public function render()
    {
        return view('admin.skills.skills-show');
    }
}
