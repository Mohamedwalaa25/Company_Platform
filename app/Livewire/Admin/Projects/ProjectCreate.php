<?php

namespace App\Livewire\Admin\Projects;

use App\Livewire\Admin\Counter\CounterData;
use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectCreate extends Component
{
    use WithFileUploads;

    public $name,$description,$link,$image,$category_id,$categories;

    public function mount()
    {
       $this->categories=Category::all();
    }
    public function rules(){
        return [
            'name' => 'required',
            'description' => 'required|string',
            'link' => 'nullable|url',
            'image' => 'required',
            'category_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'Category',
        ];
    }
    public function submit(){
        $data = $this->validate($this->rules(), [], $this->attributes());

        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');

        $data['image'] = 'storage/images/' . $imageName;
        Project::create($data);
        $this->reset(['name', 'description', 'link', 'image', 'category_id']);


        $this->dispatch('createData');
        $this->dispatch('refreshData')->to(ProjectData::class);


    }
    public function render()
    {
        return view('admin.projects.project-create');
    }
}
