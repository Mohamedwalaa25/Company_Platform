<x-show-model title="Show Service">
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text"  class="form-control" placeholder="Name" wire:model="name" />
    </div>
    <div class="col mb-0">
        <label  class="form-label">email</label>
        <input type="text"  class="form-control" placeholder="Description"  wire:model="email"/>
    </div>
    <div class="col mb-0">
        <label  class="form-label">subject</label>
        <input type="text"  class="form-control" placeholder="Icon" wire:model="subject"/>
    </div>
    <div class="col mb-0">
        <label  class="form-label">message</label>
        <input type="text"  class="form-control" placeholder="Icon" wire:model="message"/>
    </div>
</x-show-model>
