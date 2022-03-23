@extends('backend.layouts.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <center><h2> Product Details</h2></center>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Author</th>
                        <th scope="col">Publish_on</th>
                        <th scope="col">Image</th>

                    </tr>
                    </thead>
                    <tbody>
             @if($products)
                 @foreach($products as $product)
                     <tr>
                         <th>{{$loop->iteration}}</th>
                         <td>{{$product->name}}</td>
                         <td>{{$product->price}}</td>
                         <td>{{$product->author}}</td>
                         <td>{{$product->publih_on}}</td>
                         <td>{{$product->image}}</td>
                         <td>
                         <a href="" class="btn btn-primary">Edit</a>
                         <a href="{{ route('product.delete', $product->id) }}" class="btn btn-primary">Delete</a>
                         </td>
                     </tr>
                 @endforeach
             @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
