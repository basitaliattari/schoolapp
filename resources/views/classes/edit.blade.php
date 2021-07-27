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
                  <h2>Edit Teacher</h2>
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
                  <form class="form-horizontal form-label-left" action="{{ route('teachers.update',$teacher->id) }}" method="POST">
                     @csrf
                     @method('PUT')
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Name</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="text" class="form-control" value="{{ $teacher->name }}" name="name" placeholder="Name">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="email" class="form-control" value="{{ $teacher->email }}" name="email" placeholder="Email">
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Phone_no</label>
                        <div class="col-md-9 col-sm-9 ">
                           <input type="number" class="form-control" value="{{ $teacher->phone_no }}" name="phone_no" placeholder="Phone_no">
                        </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-md-9 col-sm-9 ">
                           <input type="hidden"  value="{{ $teacher->password }}">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Select</label>
                        <div class="col-md-9 col-sm-9 ">
                           <select class="form-control" name="class_id">
                              <option >Choose option</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                              <option value="4">Four</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                           <a href="/teachers" class="btn btn-primary">Cancel</a>
                           <button type="reset" class="btn btn-primary">Reset</button>
                           <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection