@extends('admin.layout.app')

@section('maincontent')
<div class="container-fluid content-inner pb-0">
    <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between border-0 m-3">
               <div class="header-title ">
                  <h4 class="card-title">Author  Details  </h4>
               </div>
                     @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                        <div class="header-title">
                            <form method="GET" action="{{ route('admin.author-details') }}"> <!-- Replace your_route_name -->
                                <input type="text" name="search" id="search" class="form-control" placeholder="Author, City" value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                        
               <div class="header-title ">
               <a href="{{route('admin.add-author')}}" class="btn btn-success">Add Author</a>
             </div>
            </div>
            
            <div class="card-body p-0">
               <div class="table-responsive">
                  <div id="search_list"> </div>
                  <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                     <thead class="border-0">
                        <tr>
                           <th>ID</th>
                           <th>Author Name</th>
                           <th>Designation</th>
                           <th>City</th>
                           <th>Created</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @forelse ($users as $user)
                        <tr>
                           <td>{{$loop->iteration}}</td>
                           <td>{{$user->author_name}} </td>
                           <td>{{$user->designation}}</td>
                           <td>{{$user->city}}</td>
                           <td>{{$user->created_at->format('d M Y h:m:s')}}</td>
                           <td>
                            <a href="{{route('admin.edit-author',$user->id)}}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="{{route('admin.author-delete',$user->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a> 
                           </td>
                        </tr>  
                        @empty
                              <tr>
                                 <td colspan="3">No authors found</td>
                              </tr>
                        @endforelse
                     </tbody>
                  </table>
                  {!! $users->appends(['sort' => 'department'])->links() !!}
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection