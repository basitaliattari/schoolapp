@extends('layouts.app')

@section('title')
    Teacher
@endsection
@section('main-content')
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12  ">
      <div class="page-title">
         <div class="title_left">
            <h3>TEACHERS</h3>
         </div>
         <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
               <div class="input-group">
                  <a class="btn btn-success" href="{{ route('teachers.create') }}"> Create New Teacher</a>
               </div>
            </div>
         </div>
      </div>
      <div class="x_panel">
         <div class="x_title">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
               <p>{{ $message }}</p>
            </div>
            @endif
            <h2>Teacher Details</h2>
            <div class="clearfix"></div>
         </div>
         <div class="x_content">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>name</th>
                     <th>email</th>
                     <th>phone_no</th>
                     <th>class_id</th>
                     <th>action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($teachers as $teacher) 
                  @php
                  $sno = 1;
                  @endphp
                  <tr>
                     <th scope="row">{{ $sno }}</th>
                     <td>{{ $teacher->name }}</td>
                     <td>{{ $teacher->email }}</td>
                     <td>{{ $teacher->phone_no }}</td>
                     <td>{{ $teacher->class_id }}</td>
                     <td>
                        <form action="{{ route('teachers.destroy',$teacher->id) }}" method="POST">
                           <a class="btn btn-info" href="{{ route('teachers.show',$teacher->id) }}">Show</a>
                           <a class="btn btn-primary" href="{{ route('teachers.edit',$teacher->id) }}">Edit</a>
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger" onclick="return confirm('do you want to delete ?')">Delete</button>
                        </form>
                     </td>
                  </tr>
                  @php
                  $sno++;
                  @endphp
                  @endforeach
               </tbody>
            </table>
      {{-- <div>{{ $teachers->links() }}</div>   --}}
         </div>
      </div>
   </div>
</div>
@endsection