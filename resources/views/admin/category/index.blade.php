@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user()->role_id == 1)
    <h2>Category</h2>
    <a href="{{route('product')}}" class="btn btn-primary">Product</a>
    <a href="{{route('categories.create')}}" class="btn btn-primary">Add New</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>
                    <div class="row">
                        <div class="col" style="margin-right:-80%">
                            <a class ="btn btn-warning" href="{{route('edit', $category->id)}}">Edit</a>
                        </div>
                        <div class="col">
                            <form action="{{ route('destroy' , $category->id) }}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger save-cancel" name="confirm_delete">delete</button>
                            </form>
                        </div>
                    </div>
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