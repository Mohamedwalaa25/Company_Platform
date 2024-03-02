<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{
    protected $listeners = ['skillUpdate'];
    public $skill,$name,$progress;

    public function skillUpdate($id){

        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;

        $this->dispatch('editData');
        $this->resetValidation();

    }

    public function rules(){
        return [
            'name'=>'required',
            'progress'=>'required|numeric|min:1|max:100',
        ];
    }
    public function submit(){
        $data=$this->validate();
       $this->skill->update($data);
        $this->reset('name','progress');

        $this->dispatch('editData');
        $this->dispatch('refreshData')->to(SkillsData::class);

    }
    public function render()
    {
        return view('admin.skills.skills-update');
    }
}
