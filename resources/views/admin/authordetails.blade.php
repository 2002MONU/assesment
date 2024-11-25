@extends('admin.layout.app')

@section('maincontent')
<div class="container-fluid content-inner pb-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between border-0 m-3">
                    <div class="header-title">
                        <h4 class="card-title">Book Details</h4>
                    </div>
                    @if(Session('success'))
                        <span class="alert alert-success" role="alert">{{ session('success') }}</span>
                    @endif
                    @if(Session('error'))
                        <span class="alert alert-danger" role="alert">{{ session('error') }}</span>
                    @endif
                    <div class="header-title">
                        <form method="GET" action="{{ route('admin.book-details') }}">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Search by Book, Author, or Title" value="{{ request('search') }}">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                    <div class="header-title">
                        <a href="{{ url('admin/addbook') }}" class="btn btn-success">Add Book</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div id="search_list"></div>
                        @if($users->count() > 0)
                            <table id="basic-table" class="table table-striped table-shadow mb-0" role="grid">
                                <thead class="border-0">
                                    <tr>
                                        <th>ID</th>
                                        <th>Book Name</th>
                                        <th>Author Name</th>
                                        <th>Title</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->book_name }}</td>
                                            <td>{{ $user->author_name }}</td>
                                            <td>{{ $user->title }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <a href="{{ route('admin.book-edit', $user->id) }}" class="btn btn-info">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{ url('delete/' . $user->id) }}" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $users->appends(['search' => request('search')])->links() !!}
                        @else
                            <div class="text-center p-3">
                                <h5 class="text-muted">No records found</h5>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
