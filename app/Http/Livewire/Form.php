<?php

namespace App\Http\Livewire;

// use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Project;
use Livewire\WithPagination;


class Form extends Component
{

    // use WithFileUploads;
    use WithPagination;

    // public $projects;

    public $first_name;
    public $last_name;
    public $email;
    // public $project_name;
    // public $project_priority = '';
    // public $project_status = '';
    // public $project_person;
    // public $attachment;
    public $search = '';

    public $user_id;
    public $project_id;

    protected $paginationTheme = 'bootstrap';



    protected function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }


    public function saveProject()
    {
        $validatedData = $this->validate();

        Project::create($validatedData);

        session()->flash('message', 'submitted!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');

    }


    public function closeModal()
    {
        $this->resetInput();
    }


    public function editProject($project_id)
    {
        $project = Project::find($project_id);
        if($project){
            $this->project_id = $project->id;
            $this->first_name = $project->first_name;
            $this->last_name = $project->last_name;
            $this->email = $project->email;
        }else{
            return redirect()->to('/form');
        }
    }



    public function updateProject()
    {

        $validatedData = $this->validate();

        Project::where('id', $this->project_id)->update([
           'first_name' => $validatedData['first_name'],
           'last_name' => $validatedData['last_name'],
           'email' => $validatedData['email'],
        ]);

        session()->flash('message', 'updated!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteProject($project_id)
    {
        $this->project_id = $project_id;
    }

    public function removeProject()
    {
        Project::find($this->project_id)->delete();
        
        session()->flash('message', 'deleted!');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function resetInput()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
    
    }

    public function render()
    {
        $projects = Project::where('first_name', 'like', '%'.$this->search.'%')
                            ->orderBy('updated_at', 'desc')
                            ->paginate(10);

        return view('livewire.form', ['projects' => $projects]);
    }
}
