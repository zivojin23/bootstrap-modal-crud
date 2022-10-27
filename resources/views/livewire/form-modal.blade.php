<!-- New project Modal -->
<div wire:ignore.self class="modal fade" id="newProjectModal" tabindex="-1" aria-labelledby="newProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newProjectModalLabel">New Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
            </div>

                <form wire:submit.prevent="saveProject">
                    <div class="modal-body">
                    
                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="first_name" class="mb-2 mt-10 text-sm font-medium">First Name</label>
                            <input wire:model="first_name" id="first_name" type="text" placeholder="Your First Name" class="form-control">
                            
                            @error('first_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="last_name" class="mb-2 mt-10 text-sm font-medium">Last Name</label>
                            <input wire:model="last_name" id="last_name" type="text" placeholder="Your Last Name" class="form-control">
                            
                            @error('last_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="email" class="mb-2 mt-10 text-sm font-medium">Email</label>
                            <input wire:model="email"  id="email" type="email" placeholder="Your Email" class="form-control">
                            
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="project_name" class="mb-2 mt-10 text-sm font-medium">Project Name</label>
                            <input wire:model="project_name" id="project_name" type="text" placeholder="Name of your project" class="form-control">
                            
                            @error('project_name')<span class="text-red-600">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="project_priority" class="mb-2 mt-10 text-sm font-medium">Priority</label>
                            <input wire:model="project_priority" id="project_priority" type="text" class="form-control">
                            
                            @error('project_priority')<span class="text-red-600">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="project_status" class="mb-2 mt-10 text-sm font-medium">Project Status</label>
                            <input wire:model="project_status" id="project_status" type="text" class="form-control">
                            
                            @error('project_status')<span class="text-red-600">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="project_person" class="mb-2 mt-10 text-sm font-medium">Project Person</label>
                            <input wire:model="project_person" id="project_person" type="text" placeholder="Contact Email"class="form-control">
                            
                            @error('project_person')<span class="text-red-600">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="attachment" class="mb-2 mt-10 text-sm font-medium">Attachment</label>
                            <input wire:model="attachment" id="attachment" type="file" class="form-control">
                            
                            @error('attachment')<span class="text-red-600">{{ $message }}</span>@enderror
                        </div>


                    

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
        </div>
    </div>
</div>


<!-- Edit Project Modal -->
<div wire:ignore.self class="modal fade" id="editProjectModal" tabindex="-1" aria-labelledby="editProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editProjectModalLabel">Edit Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
            </div>

                <form wire:submit.prevent="updateProject">
                    <div class="modal-body">
                    
                        {{-- <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="first_name" class="mb-2 mt-10 text-sm font-medium">First Name</label>
                            <input wire:model="first_name" id="first_name" type="text" placeholder="Your First Name" class="form-control">
                            
                            @error('first_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="last_name" class="mb-2 mt-10 text-sm font-medium">Last Name</label>
                            <input wire:model="last_name" id="last_name" type="text" placeholder="Your Last Name" class="form-control">
                            
                            @error('last_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="email" class="mb-2 mt-10 text-sm font-medium">Email</label>
                            <input wire:model="email"  id="email" type="email" placeholder="Your Email" class="form-control">
                            
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div> --}}



                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="project_priority" class="mb-2 mt-10 text-sm font-medium">Priority</label>
                            <input wire:model="project_priority" id="project_priority" type="text" class="form-control">
                            
                            @error('project_priority')<span class="text-red-600">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="project_status" class="mb-2 mt-10 text-sm font-medium">Project Status</label>
                            <input wire:model="project_status" id="project_status" type="text" class="form-control">
                            
                            @error('project_status')<span class="text-red-600">{{ $message }}</span>@enderror
                        </div>

                        <div class="flex flex-col w-4/5 mx-auto my-8">
        
                            <label for="project_person" class="mb-2 mt-10 text-sm font-medium">Project Person</label>
                            <input wire:model="project_person" id="project_person" type="text" placeholder="Contact Email"class="form-control">
                            
                            @error('project_person')<span class="text-red-600">{{ $message }}</span>@enderror
                        </div>

                      



                    

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
        </div>
    </div>
</div>





<!-- Delete Project Modal -->
<div wire:ignore.self class="modal fade" id="deleteProjectModal" tabindex="-1" aria-labelledby="deleteProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteProjectModalLabel">Delete Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal" aria-label="Close"></button>
            </div>

                <form wire:submit.prevent="removeProject">
                    <div class="modal-body">
                    
               
                        <h6>are u sure?</h6>
                    

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
        </div>
    </div>
</div>