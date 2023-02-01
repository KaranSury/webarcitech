@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                     <h4>Edit Product</h4>
                </div>
            <div class="card-body">
                    <form action="{{route('update',$product->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                        </div>

                        <div class="form-group">
                          <label>Product Detail</label>
                          <textarea name="detail" class="form-control">{{ $product->detail }}</textarea>
                        </div>

                        <div class="form-group">
                          <label>Product Image</label>
                          <input type="file" name="image" class="form-control">
                          <img src="/images/{{ $product->image }}" width="100px">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('dashboard')}}" class="btn btn-danger">Cancel</a>
                  </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection

