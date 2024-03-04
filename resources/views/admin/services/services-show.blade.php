<x-show-model title="Show Service">
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text"  class="form-control" placeholder="Name" wire:model="name" />
    </div>
    <div class="col mb-0">
        <label  class="form-label">Description</label>
        <input type="text"  class="form-control" placeholder="Description" min="1" max="100" wire:model="description"/>
    </div>
    <div class="col mb-0">
        <label  class="form-label">Icon</label>
        <input type="text"  class="form-control" placeholder="Icon" min="1" max="100" wire:model="icon"/>
    </div>
</x-show-model>
