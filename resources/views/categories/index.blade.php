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
            <th></th>
            <th></th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>
                {{$category->name}}
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm float-right">Edit</a>
                </td>
                <td>
                <button class="btn btn-danger btn-sm" onclick="handleDelete({{$category->id}})">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>

<!-- Modal -->
<form action="" method="POST" id="deleteForm">
@csrf
@method('DELETE')
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        Are You Sure You Want to Delete This Category
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Yes Delete</button>
      </div>
    </div>
  </div>
</div>
</form>


@endsection

@section('script')

<script>

    
    
    function handleDelete(id){
        $('#deleteModal').modal('show');

    var form = document.getElementById('deleteForm');
    form.action = '/categories/' + id;
    console.log(form)
    }

</script>

@endsection