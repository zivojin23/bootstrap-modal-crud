<div>

    @include('livewire.form-modal')

<div>
@if (session()->has('message'))
    <h5 class="alert alert-success">{{ session('message') }}</h5>
@endif
</div>

<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProjectModal">
        New Project
    </button>
    <input type="search" wire:model="search" class="form-control" placeholder="search...">
</div>


<div class="card-body">
    <table class="table table-borderd table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->first_name }}</td>
                    <td>{{ $project->last_name }}</td>
                    <td>{{ $project->email }}</td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#editProjectModal" 
                        wire:click="editProject({{$project->id}})" class="btn btn-primary">Edit</button>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteProjectModal" 
                        wire:click="deleteProject({{$project->id}})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No Record Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div>
        {{ $projects->links() }}
    </div>
</div>


</div>
