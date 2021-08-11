<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $permission->name }}">
</div>
<div class="form-group">
    <label for="guard_name">Guard Name</label>
    <input type="text" name="guard_name" id="guard_name" class="form-control" placeholder='Default to "web" ' value="{{ old('guard_name') ?? $permission->guard_name }}">
</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>