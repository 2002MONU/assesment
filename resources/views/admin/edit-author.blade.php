@extends('admin.layout.app')
@section('maincontent')
    
<div class="container-fluid content-inner pb-0">
    <div>
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit Author </h4>
                        </div>
                        @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{session('success')}}</span>
                        @endif
                        @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{session('error')}}</span>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.edit-author-post',$author->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="email">Author Name</label>
                                <input type="text" class="form-control" name="author_name" id="email1" value="{{$author->author_name}}">
                                @if($errors->has('author_name'))
                                <div class="error text-danger">{{ $errors->first('author_name') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Designation</label>
                                <input type="text" class="form-control" id="email1" name="designation" value="{{$author->designation}}">
                                @if($errors->has('designation'))
                                <div class="error text-danger">{{ $errors->first('designation') }}</div>
                            @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">City</label>
                                <select name="city" id="" class="form-control"> 
                                    <option value="hydrabad" {{$author->city == 'hydrabad' ? 'selected' : ''}}>Hydrabad</option>
                                    <option value="delhi" {{$author->city == 'delhi' ? 'selected' : ''}}>Delhi</option>
                                    <option value="vizag" {{$author->city == 'vizag' ? 'selected' : ''}}>Vizag</option>
                                    <option value="jaipur" {{$author->city == 'jaipur' ? 'selected' : ''}}>Jaipur</option>
                                    <option value="pune" {{$author->city== 'pune' ? 'selected' : ''}}>Pune</option>
                                    <option value="lucknow" {{$author->city== 'lucknow' ? 'selected' : ''}}>Lucknow</option>
                                    <option value="indore" {{$author->city == 'indore'? 'selected' : ''}}>Indore</option>
                                </select>
                                @if($errors->has('city'))
                                <div class="error">{{ $errors->first('city') }}</div>
                            @endif
                            </div>
                           
                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                <button type="submit" name="submit" class="btn btn-primary rounded text-capitalize">Submit</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection