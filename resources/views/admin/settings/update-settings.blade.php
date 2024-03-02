<form class="row" wire:submit.prevent="submit" xmlns="http://www.w3.org/1999/html">

    @if (session()->has('message'))
        <div class="alert alert-primary">
            {{ session('message') }}
        </div>
    @endif
    <div class="col-md-6 ">
        <label class="form-label">Name</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Name"
            aria-describedby="defaultFormControlHelp"
            wire:model="settings.name"/>
        @error('settings.name')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    <div class="col-md-6 ">
        <label class="form-label">Email</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Email"
            aria-describedby="defaultFormControlHelp"
            wire:model="settings.email"/>
        @error('settings.email')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Address</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Address"
            aria-describedby="defaultFormControlHelp"
            wire:model="settings.address"/>
        @error('settings.address')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Phone</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Phone"
            aria-describedby="defaultFormControlHelp"
            wire:model="settings.phone"/>
        @error('settings.phone')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Facebook</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Facebook"
            aria-describedby="defaultFormControlHelp"
            wire:model="settings.facebook"/>
        @error('settings.facebook')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Twitter</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Twitter"
            aria-describedby="defaultFormControlHelp"
            wire:model="settings.twitter"/>
        @error('settings.twitter')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Linkedin</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Linkedin"
            aria-describedby="defaultFormControlHelp"
            wire:model="settings.linkedin"/>
        @error('settings.linkedin')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Instagram</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="Instagram"
            aria-describedby="defaultFormControlHelp"
            wire:model="settings.instagram"/>
        @error('settings.instagram')
        <span class="text-danger"> {{$message}} </span>
        @enderror
    </div>
        <div class="mb-12 mt-4">
            <button class="btn btn-primary" type="submit" wire:loading.attr='disabled'>
                @include('admin.loadin',['btnName'=>'Submit'])
            </button>
        </div>
</form>
