<!-- home.blade.php -->

@extends('layouts.admin.index')



@section('title', 'Home Page')



@section('content')

  <h1>Welcome to the Home Page</h1>

  <p>This is the content of the home page.</p>
  <div class="container">
    <div class="row">
    <!-- left column -->
    <div class="col">
      <!-- general form elements -->
      <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Quick Example</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">

          <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
          <label>
          <input type="checkbox"> Check me out
          </label>
        </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div>
    </div>
    </div>
  </div>


@endsection