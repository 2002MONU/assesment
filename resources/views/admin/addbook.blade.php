@extends('admin.layout.app')
@section('maincontent')

<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Author Book</h4>
                            @if(Session('success'))
                            <span class="alert alerty-success" role="alert">{{session('success')}}</span>

                            @endif 
                            {{-- @if($errors->has())
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                            @endif --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.add-book-post')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Book Name</label>
                                <input type="text" class="form-control" id="book_name" name="book_name">
                                @if($errors->has('book_name'))
                                        <div class="error text-danger">{{ $errors->first('book_name') }}</div>
                                    @endif
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">Select Author Name</label>
                                <select name="author_id" id="" class="form-control">
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->author_name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('author_name'))
                                <div class="error">{{ $errors->first('author_name') }}</div>
                            @endif
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">Title</label>
                                <input type="text" class="form-control" id="title" rows="4" name="title">
                                @if($errors->has('title'))
                                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                                    @endif
                            </div>

                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <button type="submit" class="btn btn-primary rounded text-capitalize">Submit</button>
                                {{-- <button type="submit" class="btn btn-danger rounded text-capitalize">cancel</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection