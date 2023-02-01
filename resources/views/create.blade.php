@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
              <div class="card-body">
      @if($errors->any())
          <div class="alert alert-danger">
          <strong>Whoops!</strong>There were some problem with your input. <br><br>
            <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error}}</li>
          @endforeach
            </ul>
           </div>      
        @endif 
              <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                      </div>
                      <div class="form-group">
                        <label>Product Detail</label>
                        <textarea name="detail" class="form-control" placeholder="Enter Product Detail"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" name="image" class="form-control">
                      </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
                <a href="{{url('dashboard')}}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
