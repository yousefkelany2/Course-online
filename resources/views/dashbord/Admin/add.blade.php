
@extends("dashbord.layout.main")

@section('content')

<div class="card-body">
    <h4 class="card-title">Default form</h4>
    <p class="card-description"> Basic form layout </p>
    <form class="forms-sample" method="POST" action="{{ route("admin.store") }}">
      @csrf
      <div class="form-group">
        @error('name') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputUsername1">Username</label>
        <input type="text"  name="name" class="form-control" id="exampleInputUsername1" placeholder="Username">
      </div>
      <div class="form-group">
        @error('email') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputEmail1">Email </label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>
      <div class="form-group">
        @error('password') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputUsername1">Passwprd</label>
        <input type="password" name="password" class="form-control" id="exampleInputUsername1" placeholder="Passwprd">
      </div>

      <div class="form-group">
        @error('age') <p style="color: red" >{{ $message }}</p> @enderror
        <label for="exampleInputUsername1">Age</label>
        <input type="number" name="age" class="form-control" id="exampleInputUsername1" placeholder="Age">
      </div>

      <div class="form-group">
        <label for="exampleSelectGender">Gender</label>
        @error('gender') <p style="color: red" >{{ $message }}</p> @enderror
        <select class="form-control" name="gender" id="exampleSelectGender">
          <option value="1">Male</option>
          <option value="0">Female</option>
        </select>
      </div>
 


      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
      <button class="btn btn-light">Cancel</button>
    </form>
  </div>

@endsection
