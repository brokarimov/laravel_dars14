@extends('layout.user-main')


@section('title', 'Post')

@section('content')

<form action="/register" method="POST">
    @csrf
    <h1 style="color:black" class="mt-2">Register Page</h1>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
    </div>
    @error('name')
        <span class="text-danger">
            {{$message}}<br>
        </span>
    @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    @error('email')
        <span class="text-danger">
            {{$message}}<br>
        </span>
    @enderror
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    @error('password')
        <span class="text-danger">
            {{$message}}<br>
        </span>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection