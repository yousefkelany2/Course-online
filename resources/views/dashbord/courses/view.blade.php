@extends("dashbord.layout.main")

@section('content')

<a href= "{{ route("course.create") }}" class="btn btn-success  mb-3">Add course</a>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">course table</h4>
      </p>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> # </th>
            <th> Name </th>
            <th> Price </th>
            <th> Sale </th>
            <th> Count </th>
            <th> Duration </th>
            <th>Category</th>
            <th>Images</th>
            <th>Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($course as $key => $course)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->price }}</td>
            <td>{{ $course->sale }}</td>
            <td>{{ $course->count }}</td>
            <td>{{ $course->duration }}</td>
            <td>
                {{ $course->category["name"] }}
            </td>
            <td>
              @php
                  $images=explode('+',$course->img);
              @endphp
              @foreach ($images as $image)
         {{--  {{ $image->extension(); }} --}}



            @if (pathinfo($image, PATHINFO_EXTENSION)=="mp4")

            <video src="{{ asset("storage/images/". $image) }}" width="40" height="40" controls poster="{{ asset("storage/images/poster.jpg") }}"></video>

            @else
            <img src="{{ asset("storage/images/". $image) }}" alt="">
            @endif




              @endforeach
            </td>

            <td class=" d-flex gap-2">
                <a href="{{ route("course.show",$course->id) }}" class="btn btn-info">Update</a>

                <form action="{{ route("course.destroy",$course->id) }}" method="POST">
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
