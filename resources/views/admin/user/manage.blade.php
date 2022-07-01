@extends('admin.master')
@section('title')
    Manage
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">All users</h4>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <h5 class="text-center text-success">{{ Session::get('message')}}</h5>
                            @endif
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('edit-user',['id'=>$user->id]) }}" class="btn btn-sm btn-secondary">Edit</a>
                                        <a href="{{ route('delete-user',['id'=>$user->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
