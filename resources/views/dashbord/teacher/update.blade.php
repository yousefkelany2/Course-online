
@extends("dashbord.layout.main")

@section('content')

<div class="card-body">
    <h4 class="card-title">Default form</h4>
    <p class="card-description"> Basic form layout </p>
    <form class="forms-sample" method="POST" action="{{ route("teacher.update",$teacher->id) }}">
      @csrf
      @method("PUT")
      <div class="form-group">
        @error('name') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputUsername1">Username</label>
        <input type="text" value="{{ $teacher->name }}"  name="name" class="form-control" id="exampleInputUsername1" placeholder="Username">
      </div>
      <div class="form-group">
        @error('email') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputEmail1">Email </label>
        <input type="email" value="{{ $teacher->email }}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>
      <div class="form-group">
        @error('phone') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputUsername1">Phone</label>
        <input type="number" value="{{ $teacher->phone }}" name="phone" class="form-control" id="exampleInputUsername1" placeholder="Phone">
      </div>

      <div class="form-group">
        @error('age') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputUsername1">Age</label>
        <input type="number"  value="{{ $teacher->age }}" name="age" class="form-control" id="exampleInputUsername1" placeholder="Age">
      </div>
      <div class="form-group">
        @error('address') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputEmail1">Address</label>
        <input type="text" value="{{ $teacher->address }}" name="address" class="form-control" id="exampleInputEmail1" placeholder="Address">
      </div>
      <div class="form-group">
        <label for="exampleSelectGender">Gender</label>
        @error('gender') <p style="color: red" >{{ $message }}</p> @enderror
        <select class="form-control" name="gender" id="exampleSelectGender">
          <option @selected($teacher->gender==1) value="1">Male</option>
          <option  @selected($teacher->gender==0) value="0">Female</option>
        </select>
      </div>
      <div class="form-group">
        @error('courses') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleSelectCourses">Courses</label>

        @foreach ($Tcourse as $item)
        <div class="form-check">
            <label class="form-check-label">
                {{ $item["name"] }}
                <input type="checkbox" name="courses[]" class="form-check-input"
                @if($teacher->Tcourse->contains('id', $item["id"])) checked @endif
                value="{{ $item["id"] }}" id="exampleSelectCourses">
                <i class="input-helper"></i>
            </label>
        </div>
    @endforeach



      <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>

@endsection
