@extends('layouts.main')

@section('title', 'Update')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Car Update</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Car Update</li>
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

                    <a href="/cars" class="btn btn-primary">Cars</a>

                    <!-- general form elements -->
                    <div class="card card-primary mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Car Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/cars/{{$car->id}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Enter name" value="{{ $car->name }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span><br>
                                    @enderror

                                    <label for="name">Tel</label>
                                    <input type="text" name="brand" class="form-control" id="name"
                                        placeholder="Enter brand" value="{{ $car->brand }}">
                                    @error('brand')
                                        <span class="text-danger">{{ $message }}</span><br>
                                    @enderror

                                    <label for="name">Address</label>
                                    <input type="text" name="model" class="form-control" id="name"
                                        placeholder="Enter model" value="{{ $car->model }}">
                                    @error('model')
                                        <span class="text-danger">{{ $message }}</span><br>
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