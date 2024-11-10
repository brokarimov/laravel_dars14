@extends('layout.user-main')


@section('title', 'Post')

@section('content')

<form action="/login" method="POST">
    @csrf
    <h1 style="color:black" class="mt-2">Login Page</h1>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection