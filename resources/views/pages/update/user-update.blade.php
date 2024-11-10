@extends('layouts.main')

@section('title', 'Update')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User Update</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Update</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                    <a href="/users" class="btn btn-primary">Users</a>

                    <!-- general form elements -->
                    <div class="card card-primary mt-2">
                        <div class="card-header">
                            <h3 class="card-title">User Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/users/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <h1>{{$user->name}}</h1>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <div class="select2-purple" data-select2-id="47">
                                        <select name="role_id[]" class="select2 select2-hidden-accessible" multiple
                                            data-placeholder="Select a Role" data-dropdown-css-class="select2-purple"
                                            style="width: 100%;" tabindex="-1" aria-hidden="true">

                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}" @if($user->roles->contains('id', $role->id))
                                                selected @endif>
                                                    {{ $role->role }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('role_id')
                                        <span class="text-danger">{{ $message }}</span><br>
                                    @enderror

                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                    <!-- general form elements -->

                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>


@endsection