@extends('layouts.back')

@section('content')
    <div class="card">
        <div class="card-header">Create New Navigation</div>
        <div class="card-body">
            <form action="{{ route('navigations.create') }}" method="post">
                @include('navigation.partials.form-control')
            </form>
        </div>
    </div>
@endsection
