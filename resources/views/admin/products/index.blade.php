@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user()->role_id == 1)
    <h2>Products</h2>
    <a href="{{route('create')}}" class="btn btn-primary">Add New</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>
                    <img src="{{$product->product_img}}" alt="product image" style="width: 150px; height:100px">
                </td>
                <td>{{$product->product_name}}</td>
                <td>
                    <a class ="btn btn-warning" href="{{route('edit', $product->product_id)}}">Edit</a><br><br>
                    <form action="{{ route('destroy' , $product->product_id) }}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger save-cancel" name="confirm_delete">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h1>Please login as admin</h1>
    @endif
</div>
@endsection