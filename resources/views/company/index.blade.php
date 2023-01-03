@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-3">
                <h3>Company List</h3>
            </div>
            <div class="pull-right mt-5">
                <a class="btn btn-success" href="{{ route('company.create') }}"> Add Company</a>
                <a class="btn btn-primary" href="{{ url('/dashboard') }}"> Back</a>
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
            <th>Add Users</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($companies as $company)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $company->name }}</td>
            <td><a class="btn btn-primary" href="{{ URL::to('addusers/' . $company->id) }}">Add Users</a></td>
            <td><a class="btn btn-primary" href="{{ route('company.edit',$company->id) }}">Edit</a></td>
            <td>
                <form action="{{ route('company.destroy',$company->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $companies->links() !!}
      
@endsection