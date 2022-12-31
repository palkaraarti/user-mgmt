@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">
                    <div class="row mx-md-n5">
                        <div class="col px-md-5"><div class="p-3"><a href="{{ url('/') }}" class="card-link">Home</a></div></div>
                        <div class="col px-md-5"><div class="p-3"><a href="{{ url('users') }}" class="card-link">User List Page </a></div></div>
                        <div class="col px-md-5"><div class="p-3"><a href="#" class="card-link">Company List Page</a></div></div>
                    </div>
                    <!-- <a href="#" class="card-link">Home</a>
                    <a href="#" class="card-link">User List Page </a>
                    <a href="#" class="card-link">Company List Page</a> -->
                </div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                    You are Logged In
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
