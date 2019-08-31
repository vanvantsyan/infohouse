@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-4">
            <div class="row page-header">
                <div class="col">
                    <h1>
                        <small>ID: {!! $user->id !!}</small>
                    </h1>
                </div>
                <div class="col-auto">
                    <a href="{!! route('users.edit', $user->id) !!}" class="btn btn-primary">Փոփոխել</a>
                    <a href="{!! route('users.index') !!}" class="btn btn-default">Վերադառնալ</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Անուն Ազգանուն</td>
                            <td>{!! $user->full_name !!} </td>
                        </tr>
                        <tr>
                            <td>Էլ.հասցե</td>
                            <td>{!! $user->email !!}</td>
                        </tr>
                        <tr>
                            <td>Պաշտոն</td>
                            <td>{!! $user->role_id !!}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
