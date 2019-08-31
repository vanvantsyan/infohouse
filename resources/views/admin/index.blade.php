@extends('admin.layouts.app')

{{-- Page title --}}
@section('title')
    Dashboard |
    @parent
@endsection

@section('css')

@endsection

@section('content')
    <div class="row page-header">
        <div class="col">
            <h1>Բարև ձեզ հարգելի {{\Illuminate\Support\Facades\Auth::user()->full_name }}</h1>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
