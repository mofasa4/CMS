@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">Add Post</div>
    <div class="card-body">
    <form action="{{route('posts.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label for="title" >Title</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="published_at" >Published At</label>
            <input type="text" id="published_at" name="published_at" class="form-control">
        </div>
        <div class="form-group">
            <label for="image" >Image</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Create Post</button>
        </div>
    </form>
    </div>
</div>

@endsection

