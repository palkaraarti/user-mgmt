@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-3">
                <h3>User List</h3>
            </div>
            <div class="pull-right mt-5">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Add User</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered"  width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($cusers as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->address }}</td>
            <td> <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a></td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $cusers->links() !!}
      
@endsection