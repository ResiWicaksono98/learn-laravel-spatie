@extends('layouts.back')

@section('content')
    <div class="card">
        <div class="card-header">Data Table Navigation</div>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>Parent</th>
                    <th>Name</th>
                    <th>Url</th>
                    <th>Permission Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($navigations as $navigation)
                    <tr>
                        <td><strong>{{ $navigation->parent->name }}</strong></td>
                        <td>{{ $navigation->name }}</td>
                        <td>{{ $navigation->url ?? "it's a parent"}}</td>
                        <td>{{ $navigation->permission_name }}</td>
                        <td><a href="{{ route('navigation.edit', $navigation) }}">Edit Or Remove</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
