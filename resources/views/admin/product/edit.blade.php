@extends('admin.master')
@section('title')
    Edit
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Update Product</h4>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <h5 class="text-center text-success">{{ Session::get('message')}}</h5>
                            @endif

                            <form action="{{ route('update-product',['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control" value="{{ $product->category_name }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Brand Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="brand_name" class="form-control" value="{{ $product->brand_name }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ $product->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{ asset($product->image) }}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1" {{ $product->status == 1 ? 'checked':'' }}>Published</label>
                                        <label for=""><input type="radio" name="status" value="0" {{ $product->status == 0 ? 'checked':'' }}>Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
