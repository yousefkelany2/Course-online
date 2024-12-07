@extends('dashbord.layout.main');
@section('content')
<a href= "{{ route("category.create") }}" class="btn btn-success  mb-3">Add Category</a>
<div class="card">
    <div class="card-body">
      <h4 class="card-title">category table</h4>
      </p>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> # </th>
            <th> Name </th>

            <th>Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($Category as $key => $category)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $category->name }}</td>

            <td class=" d-flex gap-2">
                <a href="{{ route("category.show",$category->id) }}" class="btn btn-info h-max-content ">Update</a>

                <form action="{{ route("category.destroy",$category->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Delete" class="btn btn-danger">

                </form>
            </td>
        </tr>

        @empty
        

        @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
