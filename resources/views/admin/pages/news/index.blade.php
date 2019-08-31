@extends('admin.layouts.app')

@section('content')

    <div class="row page-header">
        <div class="col">
            <h1>Օգտատերեր</h1>
        </div>
        <div class="col">
            <a class="btn btn-create" href="{!! route('news.create') !!}"><i class="fas fa-plus"></i>Ավելացնել լուրեր</a>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            @include('flash::message')
        </div>
        <div class="col-12">
            @include('admin.pages.news.table')
        </div>
    </div>

@endsection

