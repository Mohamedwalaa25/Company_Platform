<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{
    public $name,$progress;

    public function mount()
    {

    }
    public function rules(){
        return [
            'name'=>'required',
            'progress'=>'required|numeric|min:1|max:100',
        ];
    }
    public function submit(){
        $data=$this->validate();
        Skill::create($data);
        $this->reset('name','progress');


        $this->dispatch('createData');
        $this->dispatch('refreshData')->to(SkillsData::class);


    }
    public function render()
    {
        return view('admin.skills.skills-create');
    }
}

