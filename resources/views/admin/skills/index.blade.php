@extends('admin.master')
@section('title','Skell')
@section('skill-active','active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
        <h4 class="fw-bold py-3 mb-4 d-inline">Skills</h4>

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
     @livewire('admin.skills.skills-create')


        <div class="card mb-4">
            @livewire('admin.skills.skills-data')

            </div>
        </div>
@endsection
