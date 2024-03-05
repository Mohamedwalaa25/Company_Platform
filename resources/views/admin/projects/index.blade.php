@extends('admin.master')
@section('title','counters')
@section('projects-active','active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            <h4 class="fw-bold py-3 mb-4 d-inline">Projects</h4>

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
        @livewire('admin.projects.project-create')


        <div class="card mb-4">
            <div class="card-body">
                @livewire('admin.projects.project-data')

            </div>
        </div>


        @livewire('admin.projects.project-update')
        @livewire('admin.projects.project-delete')


    </div>
@endsection
