@extends('layouts.app')

@section('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                    <div class="card-header">
                        <h4> 
                            Product Listing
                            <a href="{{url('create')}}" class="btn btn-primary float-right">Add Product</a>
                        </h4>
                    </div>
                <div class="card-body">
                @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
  @endif
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ ++$i}}</td>
                <td><img src="/images/{{ $product->image }}" width="70px"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
              <form action="{{route('destroy',$product->id)}}" method="POST">

              <a href="{{ route('show',$product->id) }}" class="btn btn-info">View</a>
              <a href="{{ route('edit',$product->id) }}" class="btn btn-primary">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
              </form>

                </td>
            </tr>
            @endforeach
   
     </table>
    </div>
   </div> 
  </div>
</div>

@endsection
