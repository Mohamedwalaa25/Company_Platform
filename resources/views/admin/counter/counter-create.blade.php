<x-create-model title="Add New Counter">
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text"  class="form-control" placeholder="Name" wire:model="name" />
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col mb-0">
        <label  class="form-label">Counter</label>
        <input type="number"  class="form-control" placeholder="Count" min="1"  wire:model="counter"/>
        @error('counter')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col mb-0">
        <label  class="form-label">Icon</label>
        <input type="text"  class="form-control" placeholder="Icon" wire:model="icon"/>
        @error('icon')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</x-create-model>

