@extends('admin.master')
@section('title','counters')
@section('counter-active','active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Counters</h4>

            <button
                type="button"
                class="btn btn-sm btn-primary mb-2 mx-2"
                data-bs-toggle="modal"
                data-bs-target="#basicModal"
            >
                Add New
            </button>
        </div>

        <!-- Modal -->
        @livewire('admin.counter.counter-create')


        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.counter.counter-data')

            </div>
        </div>


        @livewire('admin.counter.counter-update')
        @livewire('admin.counter.counter-delete')


    </div>
@endsection
