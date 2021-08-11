@extends('layouts.back')
namespace App;

@section('content')
    <div class="card mb-4">
        <div class="card-header">Edit Permissions</div>
        <div class="card-body">
            <form action="{{ route('permissions.edit', $permission) }}" method="post">
                @csrf
                @method('PUT')
               @include('permission.permissions.partials.form-control')
            </form>
        </div>
    </div>
    
@endsection