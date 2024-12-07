
@extends("dashbord.layout.main")

@section('content')

<div class="card-body">
    <h4 class="card-title">Default form</h4>
    <p class="card-description"> Basic form layout </p>
    <form class="forms-sample" method="POST" action="{{ route("category.update",$category->id) }}">
      @csrf
      @method("PUT")
      <div class="form-group">
        @error('name') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputUsername1">Username</label>
        <input type="text" value="{{ $category->name }}"  name="name" class="form-control" id="exampleInputUsername1" placeholder="Username">
      </div>




      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>

@endsection
