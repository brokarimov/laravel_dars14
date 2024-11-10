@extends('layouts.main')

@section('title', 'Update')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Role Update</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Role Update</li>
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

                    <a href="/roles" class="btn btn-primary">Roles</a>

                    <!-- general form elements -->
                    <div class="card card-primary mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Role Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/roles/{{$role->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <h1>{{$role->name}}</h1>
                                <div class="form-group">
                                    @foreach ($permissionsGroups as $permissionsGroup)
                                                                    <h4>{{ $permissionsGroup->name }}</h4>
                                                                    @foreach ($permissionsGroup->permissions as $permission)
                                                                                                    @php
                                                                                                        $isChecked = false;
                                                                                                        if (isset($role) && $role->permissions->contains('id', $permission->id)) {
                                                                                                            $isChecked = true;
                                                                                                        }
                                                                                                    @endphp

                                                                                                    <input type="checkbox" name="permission_id[]" value="{{ $permission->id }}" {{ $isChecked ? 'checked' : '' }}>
                                                                                                    {{ $permission->name }}<br>
                                                                    @endforeach
                                    @endforeach
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