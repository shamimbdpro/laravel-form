@extends('layouts.backend')

@section('content')

      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

            <?php $x=0 ?>
           @foreach($curd as $show_data)
               <?php $x++; ?>
                  <tr>
                    <td>{{$x}}</td>
                    <td>{{$show_data->name}}</td>
                    <td>{{$show_data->username}}</td>
                    <td>{{$show_data->email}}</td>
                    <td></td>
                    <td>
                      <a class="btn btn-primary" href="#">Edit</a>
                      <a class="btn btn-danger" href="#">Delete</a>
                      <a class="btn btn-success" href="#">View</a>
                    </td>
                  </tr>
              @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection
