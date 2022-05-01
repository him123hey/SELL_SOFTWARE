@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data" style="width: 60%;">
        @csrf
        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" name="category_name" class="form-control" placeholder="Category Price" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection