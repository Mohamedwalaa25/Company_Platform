<div>
    <div class="card-body ">
        <div class="mb-3">
            <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">

        </div>
        <div class="table-responsive text-nowrap">
            @if(count($data)>0)
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($data as $res)
                        <tr>
                            <td> <strong>{{$res->name}}</strong></td>

                            <td>{{$res->category?->name}}</td>

                            <td> <img src="{{asset($res->image)}}" width="50px" height="50px" ></td>


                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"wire:click.prevent="$dispatch('projectUpdate', { id: {{ $res->id }} })"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                        >
                                        <a class="dropdown-item" href="#"wire:click.prevent="$dispatch('projectDelete', { id: {{ $res->id }} })"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                        >
                                        <a class="dropdown-item" href="#"wire:click.prevent="$dispatch('projectShow', { id: {{ $res->id }} })"
                                        ><i class="bx bx-show me-1"></i> show</a
                                        >
                                    </div>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{$data->links()}}
            @else
                <span class="text-danger">No Result Found</span>
            @endif
        </div>
    </div>
</div>
