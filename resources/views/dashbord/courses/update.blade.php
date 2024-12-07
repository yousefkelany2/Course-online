
@extends("dashbord.layout.main")

@section('content')

<div class="card-body">
    <h4 class="card-title">Default form</h4>
    <p class="card-description"> Basic form layout </p>
    <form class="forms-sample" method="POST" action="{{ route("course.update",$course->id) }}" enctype="multipart/form-data">
      @csrf
      @method("PUT")
      <div class="form-group">
        @error('name') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputUsername1">NameCourse</label>
        <input type="text"  value={{ $course->name }} name="name" class="form-control" id="exampleInputUsername1" placeholder="NameCourse">
      </div>
      <div class="form-group">
        @error('price') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputPrice">Price</label>
        <input type="number" value={{ $course->price }} name="price" class="form-control" id="exampleInputPrice" placeholder="Price">
      </div>
      <div class="form-group">
        @error('sale') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputSale">Sale</label>
        <input type="number" value={{ $course->sale }} name="sale" class="form-control" id="exampleInputSale" placeholder="Sale">
      </div>
      <div class="form-group">
        @error('count') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputCount">Count</label>
        <input type="number" value={{ $course->count }} name="count" class="form-control" id="exampleInputCount" placeholder="Count">
      </div>
      <div class="form-group">
        @error('duration') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputDuration">Duration</label>
        <input type="text"  value={{ $course->duration }} name="duration" class="form-control" id="exampleInputDuration" placeholder="Duration">
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlSelect2">Category</label>
        <select class="form-control" name="category_id" id="exampleFormControlSelect2">
            @foreach ($Category as $category)
            <option @selected($category->id==$course->category_id)  value="{{ $category->id }}" >{{ $category->name }}</option>
            @endforeach
        </select>
      </div>


      <div class="form-group">
        @error('image') <p style="color: red" >{{ $message }}</p> @enderror
        <label>File upload</label>
        <input type="file" multiple name="img[]" class="file-upload-default">
        <div class="input-group col-xs-12">
          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
          <span class="input-group-append">
            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
          </span>
        </div>
      </div>



      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>

@endsection
