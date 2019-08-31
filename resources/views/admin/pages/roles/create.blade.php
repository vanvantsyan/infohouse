@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-4">
            <div class="row page-header">
                <div class="col">
                    <h1>Role</h1>
                </div>
                <div class="col-auto">
                    <a href="{!! route('roles.index') !!}" class="btn btn-default">Վերադառնալ</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @include('adminlte-templates::common.errors')
                    {!! Form::open(['route' => 'roles.store']) !!}

                    @include('admin.pages.roles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
