@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-8">
            <div class="row page-header">
                <div class="col">
                    <h1>
                        <small>ID: {!! $news->id !!}</small>
                    </h1>
                </div>
                <div class="col-auto">
                    <a href="{!! route('news.edit', $news->id) !!}" class="btn btn-primary">Փոփոխել</a>
                    <a href="{!! route('news.index') !!}" class="btn btn-default">Վերադառնալ</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Վերնագիր</td>
                            <td>{!! $news->title !!} </td>
                        </tr>
                        <tr>
                            <td>Բնութագիր</td>
                            <td>{!! $news->description !!}</td>
                        </tr>
                        <tr>
                            <td>Slug</td>
                            <td>{!! $news->slug !!}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
