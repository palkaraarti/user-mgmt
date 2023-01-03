@extends('layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add user to company </h2>
            </div>
            <div class="pull-right mb-3">
                <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="/adduserspost" method="POST">
        @csrf
        @foreach ($companyusers as $user)
        <input type="hidden" id="company_id" name="company_id" value="{{$companyid}}">
        <input type="checkbox" id="user_id" name="user_id[]" value="{{$user->id}}">
        <label for="useridmapping">{{$user->name}}</label><br>
        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection