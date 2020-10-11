@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end">
    <a href="{{route('categories.create')}}" class="btn mb-2 btn-success">Add Category</a>
</div>
<div class="card card-default">
    <div class="card-header">Categories</div>
    <div class="card-body">
    <table class="table">
        <thead>
            <th>Name</th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                {{$category->name}}
                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary btn-sm float-right">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>


@endsection