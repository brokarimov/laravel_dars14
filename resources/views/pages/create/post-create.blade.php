@extends('layouts.main')

@section('title', 'Create')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Post Create</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post Create</li>
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
                    <a href="/posts" class="btn btn-primary">Posts</a>

                    <!-- general form elements -->
                    <div class="card card-primary mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Post Create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/posts" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter name">
                                    @error('title')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror
                                    

                                    <label for="exampleInputEmail1">Text</label>
                                    <input type="text" name="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter name">
                                    @error('text')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror

                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                                    @error('image')
                                        <span class="text-danger">
                                            {{$message}}<br>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <!-- /.card-body -->

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