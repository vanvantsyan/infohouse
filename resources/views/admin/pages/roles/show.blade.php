@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-4">
            <div class="row page-header">
                <div class="col">
                    <h1>{!! $role->type_text !!} <br/>
                        <small>ID: {!! $role->id !!}</small></h1>
                </div>
                <div class="col-auto">
                    <a href="{!! route('roles.edit', $role->id) !!}" class="btn btn-primary">Փոփոխել</a>
                    <a href="{!! route('roles.index') !!}" class="btn btn-default">Վերադառնալ</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{!! $role->name!!}</td>
                            </tr>
                            <tr>
                                <td>Slug</td>
                                <td>{!! $role->slug !!}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
