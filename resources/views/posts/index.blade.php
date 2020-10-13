@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end">
    <a href="{{route('posts.create')}}" class="btn mb-2 btn-success">Add Post</a>
</div>
<div class="card card-default">
    <div class="card-header">Posts</div>
    <div class="card-body">
    <table class="table">
        <thead>
            <th>Title</th>
            <th>Description</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>
                <img src="/storage/{{$post->image}}" style="width:50px;height:50px;" alt="">
            </td>
            <td>
            {{$post->title}}
            </td>
            <td>
                <a href="" class="btn btn-sm btn-info">Edit</a>
            </td>
            <td>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>
    </div>
</div>

@endsection

