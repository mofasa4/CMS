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
            <th>Content</th>
            <th>published_at</th>
            <th>Image</th>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>
            {{$post->title}}
            </td>
            <td>
            {{$post->description}}
            </td>
            <td>
            {{$post->content}}
            </td>
            <td>
            {{$post->published_at}}
            </td>
            <td>
            <img src="{{$post->image}}" alt="">
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>
    </div>
</div>

@endsection

