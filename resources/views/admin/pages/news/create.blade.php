@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-10">
            <div class="row page-header">
                <div class="col">
                    <h1>Նորության ավելացում</h1>
                </div>
                <div class="col-auto">
                    <a href="{!! route('news.index') !!}" class="btn btn-default">Վերադառնալ</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @include('adminlte-templates::common.errors')
                    {!! Form::open(['route' => 'news.store','enctype'=>'multipart/form-data','files' => 'true']) !!}

                    @include('admin.pages.news.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
