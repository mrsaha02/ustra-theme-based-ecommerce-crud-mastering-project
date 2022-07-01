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
                            <h4 class="text-center">All Products</h4>
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
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Active</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category_name }}</td>
                                    <td>{{ $product->brand_name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <img src="{{ asset($product->image) }}" alt="" style="height: 80px; width: 80px">
                                    </td>
                                    <td>{{ $product->status == 1 ? 'Published':'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('edit-product',['id'=>$product->id]) }}" class="btn btn-sm btn-secondary">Edit</a>
                                        <a href="{{ route('delete-product',['id'=>$product->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
