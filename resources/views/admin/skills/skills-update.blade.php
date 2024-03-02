<x-edit-model title="Edit Skill">
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text"  class="form-control" placeholder="Name" wire:model="name" />
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col mb-0">
        <label  class="form-label">Progress</label>
        <input type="number"  class="form-control" placeholder="Progress" min="1" max="100" wire:model="progress"/>
        @error('progress')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</x-edit-model>


