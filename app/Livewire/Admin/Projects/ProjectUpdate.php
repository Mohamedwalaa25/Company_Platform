<?php

namespace App\Livewire\Admin\Projects;

use App\Livewire\Admin\Services\ServicesData;
use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectUpdate extends Component
{
    use WithFileUploads;

    public $project, $name, $description, $link, $image, $category_id, $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    protected $listeners = ['projectUpdate'];

    public function projectUpdate($id)
    {

        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->description = $this->project->description;
        $this->link = $this->project->link;
        $this->category_id = $this->project->category_id;
        $this->resetValidation();

        $this->dispatch('editData');
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required|string',
            'link' => 'nullable|url',
            'image' => 'nullable',
            'category_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'Category',
        ];
    }

    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());

        if ($this->image) {
            unlink($this->project->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $imageName, 'public');
            $data['image'] = 'storage/images/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->project->update($data);


        $this->dispatch('editData');
        $this->dispatch('refreshData')->to(ProjectData::class);

    }

    public function render()
    {
        return view('admin.projects.project-update');
    }
}

