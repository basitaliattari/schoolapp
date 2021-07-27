@extends('layouts.app')

@section('title')
    classes
@endsection
@section('main-content')
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12  ">
      <div class="page-title">
         <div class="title_left">
            <h3>Classes</h3>
         </div>
         <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
               <div class="input-group">
                  {{-- <a class="btn btn-success" href="{{ route('classes.create') }}"> Create New Teacher</a> --}}
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
            <h2>class Details</h2>
            <div class="clearfix"></div>
         </div>
         <div class="x_content">
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>title</th>
                     <th>status</th>
                     <th>action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($classes as $class) 
                  @php
                  $sno = 1;
                  @endphp
                  <tr>
                     <th scope="row">{{ $sno }}</th>
                     <td>{{ $class->title }}</td>
                     <td>{{ $class->status }}</td>
                     <td>
                       {{--  <form action="{{ route('classes.destroy',$class->id) }}" method="POST">
                           <a class="btn btn-info" href="{{ route('classes.show',$class->id) }}">Show</a>
                           <a class="btn btn-primary" href="{{ route('classes.edit',$class->id) }}">Edit</a>
                           @csrf --}}
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