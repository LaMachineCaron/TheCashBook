@extends('layouts.app')

@section('content')
<form action="" class="col-sm-8 col-sm-offset-2">
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Title" required>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="description" rows="4" placeholder="Description..."></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>
@endsection