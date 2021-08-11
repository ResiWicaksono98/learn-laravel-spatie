@extends('layouts.back')

@section('content')
    <div class="card">
        <div class="card-header">Table of Posts</div>
        <div class="card-body">
            Hi {{ auth()->user()->name}}
        </div>
    </div>
@endsection