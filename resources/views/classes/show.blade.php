@extends('layouts.app')

@section('title')
    Teacher
@endsection
@section('main-content')

<div class="right_col" role="main">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>TEACHERS</h3>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 ">
            <div class="x_panel">
               <div class="x_title">
                  <h2>show Teacher</h2>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
                  <br />
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
                        <div class="col-md-9 col-sm-9 ">
                           <p>{{ $teacher->name }}</p>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                        <div class="col-md-9 col-sm-9 ">
                           <p>{{ $teacher->email }}</p>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Phone_no</label>
                        <div class="col-md-9 col-sm-9 ">
                           <p>{{ $teacher->phone_no }}</p>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">class</label>
                        <div class="col-md-9 col-sm-9 ">
                           <p>{{ $teacher->title }}</p>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-5 col-sm-5  ">
                           <a href="/teachers" class="btn btn-primary">BACK</a>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection