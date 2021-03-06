@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-4">
            <div class="row page-header">
                <div class="col">
                    <h1>Բրոկերի տվյալների փոփոխում</h1>
                </div>
                <div class="col-auto">
                    <a href="{!! route('users.index') !!}" class="btn btn-default">Վերադառնալ</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @include('adminlte-templates::common.errors')
                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

                    @include('admin.pages.users.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

