<x-edit-model title="Edit Counter">
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text"  class="form-control" placeholder="Name" wire:model="name" />
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</x-edit-model>


