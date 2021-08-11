@csrf
<div class="form-group">
    <label for="parent_id">Parent</label>
    <select name="parent_id" id="parent_id" class="form-control">
        <option selected disabled>Choose a Parent</option>
        @foreach ($navigations as $item)
            <option {{ $item->id == $navigation->parent_id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="permission_name">Permission</label>
    <select name="permission_name" id="permission_name" class="form-control">
        <option  selected disabled>Choose a Permission</option>
        @foreach ($permissions as $permission)
            <option {{ $permission->name == $navigation->permission_name ? 'selected' : '' }} value="{{ $permission->name }}">{{ $permission->name }}</option>
        @endforeach
    </select>
    @error('permission_name')
        <div class="text-danger mt-2 d-block">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Create New Post" value="{{ old('name') ?? $navigation->name }}" >
            @error('name')
                <div class="text-danger mt-2 d-block">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="url">URL</label>
            <input type="text" name="url" id="url" class="form-control" placeholder="posts/create" value="{{ old('url') ?? $navigation->url }}">
        </div>
    </div>
</div>


<button type="submit" class="btn btn-success">{{ $submit }}</button>