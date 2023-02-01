@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
                <div class="card-header">
                    <h4> 
                        Product Listing
                        <a href="{{url('dashboard')}}" class="btn btn-primary float-right">Back</a>
                    </h4>
                </div>
            <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
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
            </div>
              <img src="/images/{{ $product->image }}" width="100px">
        </form>
     </div>
    </div>
  </div>
</div>

@endsection
