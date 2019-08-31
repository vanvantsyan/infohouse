@extends('layouts.app')

@section('content')

    <div class="row page-header">
        <div class="col">
            <h1>Roles</h1>
        </div>
        <div class="col">
            <a class="btn btn-create" href="{!! route('roles.create') !!}"><i class="fas fa-plus"></i> Add New Role</a>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            @include('flash::message')
        </div>
        <div class="col-12">
            @include('admin.pages.roles.table')
        </div>
    </div>

@endsection

