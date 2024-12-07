@extends("dashbord.layout.main")

@section('content')

<a href= "{{ route("teacher.create") }}" class="btn btn-success  mb-3">Add teacher</a>

<div class="card">
    <div class="card-body">
      <h4 class="card-title">teacher table</h4>
      </p>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> # </th>
            <th> Name </th>
            <th> Email </th>
            <th> Phone </th>
            <th> Age </th>
            <th> Address </th>
            <th>Gender</th>
            <th>Courses</th>
            <th>Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($teacher as $key => $teacher)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->email }}</td>
            <td>{{ $teacher->phone }}</td>
            <td>{{ $teacher->age }}</td>
            <td>{{ $teacher->address }}</td>
            <td>{{ $teacher->gender==1?"Male":"Female" }}</td>

            <td>@foreach ($teacher->Tcourse as $item)

                {{ $item["name"] }}<br>
            @endforeach</td>


 

            <td class=" d-flex gap-2">
                <a href="{{ route("teacher.show",$teacher->id) }}" class="btn btn-info">Update</a>

                <form action="{{ route("teacher.destroy",$teacher->id) }}" method="POST">
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
